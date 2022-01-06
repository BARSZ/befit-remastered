<?php session_start();
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
    <h1>My Profile</h1>
    <div class="profile-info">
        <div class="profile-image">
            <img src="img/muscules-nobg.png" class="profilePicture">
        </div>
        <div class="profile-data">
            <p style="color:white">Full Name: <span style="color: palegoldenrod;"><?php echo getName($conn, $_SESSION["userid"]) ?></span></p>
            <p style="color:white">Gender: <span style="color: palegoldenrod;"><?php echo getGender($conn, $_SESSION["userid"]) ?></span></p>
            <p style="color:white">Username: <span style="color: palegoldenrod;"><?php echo $_SESSION["username"] ?></span></p>
            <p style="color:white">Age: <span style="color: palegoldenrod;"><?php echo getAge($conn, $_SESSION["userid"]) ?></span></p>
            <p style="color:white">E-Mail: <span style="color: palegoldenrod;"><?php echo getEmail($conn, $_SESSION["userid"]) ?></span></p>
            <p style="color:white">Date Of Birth: <span style="color: palegoldenrod;"><?php echo getBirth($conn, $_SESSION["userid"]) ?></span></p>
            <p style="color:white">Credits: <span style="color: palegoldenrod;"><?php echo getCredits($conn, $_SESSION["userid"]) ?></span></p>
            <p style="color:white">Membership Expires on: <span style="color: palegoldenrod;"><?php echo getMembershipExpires($conn, $_SESSION["userid"]) ?></span></p>
        </div>
    </div>
</body>

</html>