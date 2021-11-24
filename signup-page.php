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
        <h1>Sign Up</h1>
        <!-- form starts -->
        <form action="includes/signup.php" method="POST">
            <!-- row username -->
            <div class="input">
                <?php
                if (isset($_GET['username'])) {
                    $username = $_GET['username'];
                    echo '<input type="text" name="username" value="' . $username . '" placeholder=" ">';
                } else {
                    echo '<input type="text" name="username" placeholder=" ">';
                }
                ?>
                <span></span>
                <label>Username:</label>
            </div>
            <!-- row pass -->
            <div class="input">
                <input type="password" name="password" placeholder=" ">
                <span></span>
                <label>Password:</label>
            </div>
            <!-- row pass repeat -->
            <div class="input">
                <input type="password" name="passwordRepeat" placeholder=" ">
                <span></span>
                <label>Repeat Password:</label>
            </div>
            <!-- row email -->
            <div class="input">
                <input type="email" name="email" placeholder=" ">
                <span></span>
                <label>E-mail:</label>
            </div>
            <!-- row for name -->
            <div class="input">
                <?php
                if (isset($_GET['name'])) {
                    $name = $_GET['name'];
                    echo '<input type="text" name="name" placeholder=" " value="' . $name . '">';
                } else {
                    echo '<input type="text" name="name" placeholder=" ">';
                }
                ?>
                <span></span>
                <label>Full Name:</label>
            </div>
            <!-- row for age -->
            <div class="input">
                <?php
                if (isset($_GET['age'])) {
                    $age = $_GET['age'];
                    echo '<input type="number" name="age" placeholder=" " value="' . $age . '">';
                } else {
                    echo '<input type="number" name="age" placeholder=" ">';
                }
                ?>
                <span></span>
                <label>Age:</label>
            </div>
            <!-- row gender -->
            <div class="input">
                <?php
                if (isset($_GET['gender'])) {
                    $gender = $_GET['gender'];
                    echo '<input type="text" name="gender" placeholder=" " value="' . $gender . '">';
                } else {
                    echo '<input type="text" name="gender" placeholder=" ">';
                }
                ?>
                <span></span>
                <label>Gender:</label>
            </div>
            <!-- row date -->
            <div class="input">
                <?php
                if (isset($_GET['dateOfBirth'])) {
                    $dateOfBirth = $_GET['dateOfBirth'];
                    echo '<input type="date" name="dateOfBirth" placeholder=" " value="' . $dateOfBirth . '">';
                } else {
                    echo '<input type="date" name="dateOfBirth" placeholder=" ">';
                }
                ?>
                <span></span>
                <label>Date Of Birth:</label>
            </div>
            <!-- row link log in -->
            <div class="signup-link">
                Already have an account?<a href="index.php">Log In!</a>
            </div>
            <!-- row button -->
            <div class="login-button">
                <button type="submit" name="registerButton">Sign Up</button>
            </div>
            <!-- form ends -->
        </form>
    </div>
    <?php
    if (!isset($_GET['signup'])) {
        exit();
    } else {
        $signupCheck = $_GET['signup'];

        if ($signupCheck == "empty") {
            echo '<script>alert("You did not fill all fields")</script>';
            exit();
        } else if ($signupCheck == "invalidemail") {
            echo '<script>alert("Invalid E-mail")</script>';
            exit();
        } else if ($signupCheck == "invalidusername") {
            echo '<script>alert("Invalid Username")</script>';
            exit();
        } else if ($signupCheck == "passwordsDontMatch") {
            echo '<script>alert("Passwords do not match")</script>';
            exit();
        } else if ($signupCheck == "usernameOrEmailEXIST") {
            echo '<script>alert("Username or Email already exist")</script>';
            exit();
        } else if ($signupCheck == "error") {
            echo '<script>alert("You did not press the button")</script>';
            exit();
        } else if ($signupCheck == "success") {
            echo '<script>alert("You have been signed up")</script>';
            exit();
        }
    }
    ?>
</body>

</html>