<?php

require 'header.php';
$version=time();
?>
<!DOCTYPE HTML>
<html>


<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($business_name); ?> WiFi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="assets/styles/bulma.min.css"/>
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.css"/>
    <meta http-equiv="refresh" content="2;url=connect.php"/>
    <link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-16x16.png" sizes="16x16"/>
    <link rel="stylesheet" href="assets/styles/style.css?v=<?=$version?>"/>
    
</head>

<body>





  <div class="page">

  <div class="head">
      <br>
      <figure class="logo">
        <img src="assets/images/logo.png">
      </figure>
    </div>

    <div class="main">
      <section class="section bg_col">
            <div class="container" style="text:white;">
                <div id="margin_zero" class="content has-text-centered is-size-6">Welcome!</div>
                <div id="margin_zero" class="content has-text-centered is-size-6">You'll be automatically authorized
                </div>
                <div id="margin_zero" class="content has-text-centered is-size-6">on the network in a few moments</div>
            </div>
        </seection>
    </div>

</div>
</body>

</html>