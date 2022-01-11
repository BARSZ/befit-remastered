<?php
session_start();
require_once 'includes/dbh.php';
require_once 'includes/get-info.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>BeFit Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body class="home-page-body">
    <header>
        <?php
        include_once "header.php";
        ?>
    </header>
    <form method="post" action="includes/logout.php">
        <div class="logout">
            <p>Are you sure you want to log out?</p>
            <br>
            <div class="logout-buttons">
                <button type="submit" name="logout_user">Logout</button>
                <button type="submit" name="goBack">Back</button>
            </div>
        </div>
        <div class="container2" style="backface-visibility: visible">
        </div>
    </form>
</body>

</html>