<!DOCTYPE html>
<html lang="en">

<head>
    <title>BeFit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="center">
        <h1>Log In</h1>
        <!-- form starts -->
        <form action="includes/login.php" method="POST">
            <!-- row username -->
            <div class="input">
                <input type="text" name="username" placeholder=" ">
                <span></span>
                <label>Username:</label>
            </div>
            <!-- row pass -->
            <div class="input">
                <input type="password" name="password" placeholder=" ">
                <span></span>
                <label>Password:</label>
            </div>
            <!-- row button -->
            <div class="login-button">
                <button type="submit" name="loginButton">Log In</button>
            </div>
            <!-- row link register -->
            <div class="signup-link">
                Don't have an account? <a href="signup-page.php">Sign Up!</a>
            </div>
            <!-- form ends -->
        </form>
        <?php
        if (!isset($_GET['loginButton'])) {
            exit();
        } else {
            $signupCheck = $_GET['login'];

            if ($signupCheck == "empty") {
                echo "<p class='error'>You did not fill all fields</p>";
                exit();
            } else if ($signupCheck == "usernameDoesNotExist") {
                echo '<script>alert("This username does not exist!")</script>';
                exit();
            } else if ($signupCheck == "wrongPassword") {
                echo '<script>alert("Wrong password!")</script>';
                exit();
            } else if ($signupCheck == "success") {
                echo '<script>alert("Logged in successfully!")</script>';
                exit();
            }
        }
        ?>
</body>

</html>