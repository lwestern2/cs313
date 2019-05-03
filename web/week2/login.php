<?php
session_start();

$userType = $_GET['userType'];

if ($userType != "logout") {
    $_SESSION["userType"] = $userType;
}

else {
    unset($_SESSION["userType"]);
}
?>

<!doctype html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title id="page-title">Login | Dogs are Cute.Inc</title>
    <meta name="description" content="Dogs are Cute.Inc About Us Page">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div>
        <?php
            include("nav.php");
            ?>

        <main class="jumbotron">
            <h2>Login</h2>
            <button type="button" href="login.php?userAdmin">Log in as Administrator</button>
            <button type="button" href="login.php?userTest">Log in as Tester</button>
        </main>

        <footer id="site-footer">
            <p>&copy;2019 Dogs are Cute.Inc, All rights reserved</p>
        </footer>
    </div>
</body>

</html>