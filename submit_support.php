<?php
// =========================
// LOAD .env FILE
// =========================
$envFile = __DIR__ . '/.env';

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($key, $value) = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value);
    }
} else {
    die("Missing .env file.");
}

// =========================
// TELEGRAM FUNCTION
// =========================
function sendTelegramMessage($messageText)
{
    $token = $_ENV['TELEGRAM_BOT_TOKEN'] ?? null;
    $chat_id = $_ENV['TELEGRAM_CHAT_ID'] ?? null;

    if (!$token || !$chat_id) {
        return; // fail silently – don't break form
    }

    $url = "https://api.telegram.org/bot$token/sendMessage";

    $data = [
        'chat_id' => $chat_id,
        'text' => $messageText,
        'parse_mode' => 'HTML'
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    @file_get_contents($url, false, $context);
}

// =========================
// PROCESS FORM SUBMISSION
// =========================

$email = isset($_POST['Email']) ? trim($_POST['Email']) : '';
$name = isset($_POST['Name']) ? trim($_POST['Name']) : '';
$category = isset($_POST['Category']) ? trim($_POST['Category']) : '';
$message = isset($_POST['Message']) ? trim($_POST['Message']) : '';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // VALIDATION
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please provide a valid email address.';
    } elseif (empty($name)) {
        $error = 'Please provide your name.';
    } elseif (empty($category) || !in_array($category, ['Payments', 'Account', 'Software'])) {
        $error = 'Please select a valid category.';
    } elseif (empty($message)) {
        $error = 'Please provide a message.';
    } else {

        // EMAIL SETTINGS FROM ENV
        $to = $_ENV['SUPPORT_EMAIL'] ?? 'info@penthian.com';
        $fromEmail = $_ENV['FROM_EMAIL'] ?? 'no-reply@penthian.com';

        $subject = 'Support Form Submission - ' . $category;

        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Category: $category\n";
        $body .= "Message:\n$message\n";

        $headers = "From: $fromEmail\r\n";
        $headers .= "Reply-To: $email\r\n";

        // SEND EMAIL
        if (mail($to, $subject, $body, $headers)) {

            // SEND TELEGRAM UPDATE
            $telegramMessage =
                "📩 <b>New Support Request</b>\n" .
                "<b>Name:</b> $name\n" .
                "<b>Email:</b> $email\n" .
                "<b>Category:</b> $category\n" .
                "<b>Message:</b>\n$message";

            sendTelegramMessage($telegramMessage);

            header('Location: /support.php?success=1');
            exit;

        } else {
            $error = 'Failed to send the email. Please try again later.';
        }
    }
}

// ERROR REDIRECT
if ($error) {
    header('Location: /support.php?error=' . urlencode($error));
    exit;
}
?>
