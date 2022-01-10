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
            <p>Full Name: <span><?php echo getName($conn, $_SESSION["userid"]) ?></span></p>
            <p>Gender: <span><?php echo getGender($conn, $_SESSION["userid"]) ?></span></p>
            <p>Username: <span><?php echo $_SESSION["username"] ?></span></p>
            <p>Age: <span><?php echo getAge($conn, $_SESSION["userid"]) ?></span></p>
            <p>E-Mail: <span><?php echo getEmail($conn, $_SESSION["userid"]) ?></span></p>
            <p>Date Of Birth: <span><?php echo getBirth($conn, $_SESSION["userid"]) ?></span></p>
            <p>Credits: <span><?php echo getCredits($conn, $_SESSION["userid"]) ?></span></p>
            <p>Membership Expires on: <span><?php echo getMembershipExpires($conn, $_SESSION["userid"]) ?></span></p>

            <div class="profile-edit-btn">
                <button onclick="openForm()">Edit Profile</button>
            </div>
        </div>
    </div>
    <div class="form-popup" id="myForm">
        <form action="includes/edit-info.php" class="form-container" method="POST">
            <h1>Edit Details:</h1>

            <label for="name"><b>New Name:</b></label>
            <input type="text" placeholder="Enter New Name" name="name">

            <label for="age"><b>Change Age:</b></label>
            <input type="text" placeholder="Enter New Age" name="age">

            <label for="email"><b>Change Email</b></label>
            <input type="text" placeholder="Enter Email" name="email">

            <label for="password"><b>Change Password:</b></label>
            <input type="text" placeholder="Enter New Password" name="password">

            <label for="password2"><b>Repeat New Password:</b></label>
            <input type="text" placeholder="Enter Email" name="password2">

            <label for="psw"><b>Password*</b></label>
            <input type="password" placeholder="Enter Password*" name="psw" required>

            <button type="submit" class="btn" name="edit-details-button">Edit</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>

</html>