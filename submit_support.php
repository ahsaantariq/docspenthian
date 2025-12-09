<?php
// =========================
// TELEGRAM MESSAGE FUNCTION
// =========================
function sendTelegramMessage($messageText) {
    $token = "8546620743:AAEBMWZZMm2fu11cQWGh4SaW3oU9BwWB02E"; // <- REPLACE WITH NEW TOKEN
    $chat_id = "7692376148";

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

    $context  = stream_context_create($options);
    file_get_contents($url, false, $context);
}

// =========================
// PROCESS FORM SUBMISSION
// =========================

// Get form data
$email = isset($_POST['Email']) ? trim($_POST['Email']) : '';
$name = isset($_POST['Name']) ? trim($_POST['Name']) : '';
$category = isset($_POST['Category']) ? trim($_POST['Category']) : '';
$message = isset($_POST['Message']) ? trim($_POST['Message']) : '';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validate fields
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please provide a valid email address.';
    } elseif (empty($name)) {
        $error = 'Please provide your name.';
    } elseif (empty($category) || !in_array($category, ['Payments', 'Account', 'Software'])) {
        $error = 'Please select a valid category.';
    } elseif (empty($message)) {
        $error = 'Please provide a message.';
    } else {

        // Prepare email
        $to = 'info@penthian.com';
        $subject = 'Support Form Submission - ' . $category;

        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Category: $category\n";
        $body .= "Message:\n$message\n";

        $headers = "From: no-reply@penthian.com\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Try sending email
        if (mail($to, $subject, $body, $headers)) {

            // =======================
            // SEND TELEGRAM MESSAGE
            // =======================
            $telegramMessage =
                "📩 <b>New Support Request</b>\n" .
                "<b>Name:</b> $name\n" .
                "<b>Email:</b> $email\n" .
                "<b>Category:</b> $category\n" .
                "<b>Message:</b>\n$message";

            sendTelegramMessage($telegramMessage);

            // Redirect on success
            header('Location: /support.php?success=1');
            exit;

        } else {
            $error = 'Failed to send the email. Please try again later.';
        }
    }
}

// Redirect back with error
if ($error) {
    header('Location: /support.php?error=' . urlencode($error));
    exit;
}

?>
