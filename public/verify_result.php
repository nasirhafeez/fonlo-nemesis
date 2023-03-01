<?php

require 'header.php';

$redirect_url = 'index.php';

if ($_SESSION['result'] == true) {
    $redirect_url = 'connect.php';
}


?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?php echo htmlspecialchars($business_name); ?> WiFi
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="assets/styles/bulma.min.css" />
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.css" />
    <meta http-equiv="refresh" content="5;url=<?php echo htmlspecialchars($redirect_url); ?>" />
    <link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="assets/styles/style.css" />
    <style>
        body {
      background-image: url('lg.jpeg'); /* fallback for large devices */
      background-size: cover;
    }

    @media only screen and (max-width: 768px) {
      body {
        background-image: url('md.png'); /* used for medium and small devices */
        background-size: cover;
      }
    }



    .logo {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px;
}

.logo img {
  width: 30%;
  height: auto;
  max-width: 200px;
}

@media screen and (min-width: 768px) {
  .logo img {
    max-width: 200px;
  }
}
  </style>
  
</head>

<body>





  <div class="page">

  <div class="head">
      <br>
      <figure class="logo">
        <img src="assets/images/logo.png">
      </figure>
    </div>
<br><br>
    <div class="main">
      <section class="section" style="background-color: rgba(255, 255, 255, 0.4);border-radius:25px;">
            <?php
            if ($_SESSION['result'] == true) {
            ?>
                <div id="margin_zero" class="content has-text-centered is-size-6">Great! Your code has been approved!</div>
                <div id="margin_zero" class="content has-text-centered is-size-6">You'll be automatically authorized</div>
                <div id="margin_zero" class="content has-text-centered is-size-6">in a few moments</div>
            <?php
            } else {
            ?>
                <div id="margin_zero" class="content has-text-centered is-size-6">Sorry! The code you entered</div>
                <div id="margin_zero" class="content has-text-centered is-size-6">is not correct. You'll shortly be</div>
                <div id="margin_zero" class="content has-text-centered is-size-6">redirected back to our main page</div>
            <?php
            }
            ?>
        </seection>
    </div>

</div>

</body>

</html>