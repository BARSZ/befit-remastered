<!DOCTYPE html>
<html lang="en">

<head>
    <title>BeFit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="signup-body">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 style="color: white;">Log In</h1>
            </div>
        </div>
        <!-- form starts -->
        <form action="includes/login.php" method="POST">
            <!-- row username -->
            <div class="row">
                <div class="col text-center">
                    <?php
                    if (isset($_GET['username'])) {
                        $username = $_GET['username'];
                        echo '<input type="text" name="username" placeholder="Username" value="' . $username . '">';
                    } else {
                        echo '<input type="text" name="username" placeholder="Username/E-mail">';
                    }
                    ?>
                </div>
            </div>
            <!-- row pass -->
            <div class="row">
                <div class="col text-center">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <!-- row link register -->
            <div class="row">
                <div class="col text-center">
                    <a href="signup-page.php" class="stretched-link">Don't have an account? Click here to Sign Up!</a>
                </div>
            </div>
            <!-- row button -->
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary btn-lg" name="loginButton">Log In</button>
                </div>
            </div>
            <!-- form ends -->
        </form>
        <?php
        if (!isset($_GET['signup'])) {
            exit();
        } else {
            $signupCheck = $_GET['signup'];

            if ($signupCheck == "empty") {
                echo "<p class='error'>You did not fill all fields</p>";
                exit();
            } else if ($signupCheck == "invalidemail") {
                echo "<p class='error'>Invalid E-mail</p>";
                exit();
            } else if ($signupCheck == "error") {
                echo "<p class='error'>You did not press the button.</p>";
                exit();
            } else if ($signupCheck == "success") {
                echo "<p class='success'>You have been signed up.</p>";
                exit();
            }
        }
        ?>
    </div>
</body>

</html>