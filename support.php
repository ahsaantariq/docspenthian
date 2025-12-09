<!DOCTYPE html>
<!-- This site was created in Webflow. https://webflow.com -->
<!-- Last Published: Wed Oct 09 2024 16:05:01 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="netdocs-template.webflow.io" data-wf-page="660ae783c787b93a08073b89" data-wf-site="65f1bda3afbf12c329f9dfa2" lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Support - Penthian</title>
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
      !function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
    <link href="https://www.penthian.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://www.penthian.com/favicon.ico" rel="apple-touch-icon" />
  </head>
  <body>
    <?php include 'src/header.php'; ?>
    <section class="section">
      <div class="container container-layout">
        <?php include 'src/sidebar.php'; ?>
        <div class="layout-content-outer-wrapper">
          <div class="layout-content-inner-wrapper">
            <div class="content-title">
              <div class="content-title-breadcrumbs">
                <a href="#" class="link-breadcrumb">Home</a>
                <div class="content-title-breadcrumbs-link">
                  <img src="https://cdn.prod.website-files.com/65f1bda3afbf12c329f9dfa2/660ac3f8ce6d192d22dce7a8_icon__chevron.svg" loading="lazy" alt="" class="icon-xs" />
                  <a href="/support" aria-current="page" class="link-breadcrumb w--current">Support</a>
                </div>
              </div>
              <div class="w-layout-vflex v-flex-s">
                <h1 class="display-2xl">Support</h1>
              </div>
            </div>
            <div class="support-form-block w-form">
              <form id="wf-form-Admin-Form" name="wf-form-Admin-Form" data-name="Admin Form" method="post" action="/submit_support.php" class="support-form" data-wf-page-id="660ae783c787b93a08073b89" data-wf-element-id="3c4380c1-145f-046b-6956-f6f205d1a61c">
                <div class="w-layout-vflex form-row">
                  <label for="Email-5" class="form-label">Email address</label>
                  <input class="form-input w-input" maxlength="256" name="Email" data-name="Email" placeholder="Email" type="email" id="Email-5" required="" />
                </div>
                <div class="w-layout-vflex form-row">
                  <label for="Name" class="form-label">Name</label>
                  <input class="form-input w-input" maxlength="256" name="Name" data-name="Name" placeholder="Name" type="text" id="Name" required="" />
                </div>
                <div class="w-layout-vflex form-row">
                  <label for="Category-4" class="form-label">Category</label>
                  <select id="Category-4" name="Category" data-name="Category" required="" class="form-input w-select">
                    <option value="">Select one...</option>
                    <option value="Payments">Payments</option>
                    <option value="Account">Account</option>
                    <option value="Software">Software</option>
                  </select>
                </div>
                <div class="w-layout-vflex form-row">
                  <label for="Message-4" class="form-label">Message</label>
                  <textarea id="Message-4" name="Message" maxlength="5000" data-name="Message" placeholder="Example Text" required="" class="form-input form-input-area w-input"></textarea>
                </div>
                <input type="submit" data-wait="Please wait..." class="button w-button" value="Submit" />
              </form>
              <div class="w-form-done" style="<?php echo isset($_GET['success']) && $_GET['success'] == '1' ? 'display:block' : 'display:none'; ?>">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail" style="<?php echo isset($_GET['error']) ? 'display:block' : 'display:none'; ?>">
                <div>Oops! Something went wrong while submitting the form. <?php echo isset($_GET['error']) ? htmlspecialchars($_GET['error']) : ''; ?></div>
              </div>
              <div class="body-s">Check out our <a href="/faq" class="link-blue">frequently asked questions</a>.</div>
            </div>
            <?php include 'src/footer.php'; ?>
          </div>
        </div>
      </div>
    </section>
    <div class="search-modal">
      <form action="/search" class="search-form w-form">
        <input class="form-input w-input" maxlength="256" name="query" placeholder="Search…" type="search" id="search" required="" />
        <input type="submit" class="button button-search-modal w-button" value="Search" />
      </form>
      <img src="https://cdn.prod.website-files.com/65f1bda3afbf12c329f9dfa2/661e359cba5b0235e64f505e_icon__x.svg" loading="eager" data-w-id="704091e1-2c4f-3615-a457-13ae63219e21" alt="Close Modal" class="search-modal-close-button" />
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65f1bda3afbf12c329f9dfa2" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/script.js" type="text/javascript"></script>
  </body>
</html>