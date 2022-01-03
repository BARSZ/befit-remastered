<?php session_start(); ?>
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
    <div class="pricing">
        <ul class="price">
            <li class="header">Basic membership</li>
            <li class="grey">50 € / per month</li>
            <li>You can workout 3 times per week</li>
            <li>3 workouts with a Personal trainer</li>
            <li>5 Spa treatments</li>
            <li>Free mineral water and towel</li>
            <li class="grey"><a href="Contacts.php" class="signup-button"><button>Sign Up</button></a></li>
        </ul>
        <br>
        <ul class="price">
            <li class="header">Premium membership *BEST DEAL*</li>
            <li class="grey">$ 100 € / per month</li>
            <li>You can workout 7 times per week</li>
            <li>10 workouts with a Personal trainer</li>
            <li>15 Spa treatments</li>
            <li>Free mineral water, towel and a protein bar</li>
            <li class="grey"><a href="Contacts.php" class="signup-button"><button>Sign Up</button></a></li>
        </ul>
    </div>
</body>

</html>