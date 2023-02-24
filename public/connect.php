<?php

require 'header.php';
include 'config.php';

$redirect_url = $_SERVER['REDIRECT_URL'];

$url = $_SESSION['url'];
$mac = $_SESSION["id"];
$method = $_SESSION["method"];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$last_updated = date("Y-m-d H:i:s");

mysqli_query($con, "
CREATE TABLE IF NOT EXISTS `$table_name` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `phone` varchar(16),
    `email` varchar(45),
    `first_name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NULL,
    `mac` varchar(17) NOT NULL,
    `method` varchar(10) NOT NULL,
    `last_updated` datetime NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `mac` (`mac`)
)");

if ($_SESSION['user_type'] == "new") {
  mysqli_query($con, "INSERT INTO `$table_name` (phone, email, first_name, last_name, mac, method, last_updated) VALUES ('$phone','$email','$fname','$lname','$mac', '$method', '$last_updated')");
} else {
  mysqli_query($con, "UPDATE `$table_name` SET last_updated = '$last_updated' WHERE mac = '$mac'");
}

mysqli_close($con);

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($business_name); ?> WiFi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="assets/styles/bulma.min.css" />
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.css" />
    <meta http-equiv="refresh" content="5;url=<?php echo htmlspecialchars($redirect_url); ?>" />
    <link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/images/favicomatic/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="assets/styles/style.css" />
</head>

<body>
<div class="page">

    <div class="head">
        <br>
        <figure id="logo">
            <img src="assets/images/logo.png">
        </figure>
    </div>

   <div class="main">
       <seection class="section">
           <div id="margin_zero" class="content has-text-centered is-size-6">Thanks, you are now </div>
           <div id="margin_zero" class="content has-text-centered is-size-6">authorized on WiFi</div>
       </seection>
    </div>

</div>

<form id="form1" name="form1" method=POST action="https://<?php echo htmlspecialchars($url); ?>/cgi-bin/login">
    <input name=user value="user1" type="hidden">
    <input name=password value="pass1" type="hidden">
    <input name=cmd value="authenticate" type="hidden">
    <input name=session_timeout value="3600" type="hidden">
</form>

<script type="text/javascript">
    window.onload = function () {
        window.setTimeout(function () {
            document.form1.submit();
        }, 2000);
    };
</script>

</body>
</html>