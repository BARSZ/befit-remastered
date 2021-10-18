<html>

<head>
    <title>

    </title>
</head>

<body>
    <div class="registerForm">
        <h1>Sign Up</h1>
        <form action="includes/signup.php" method="POST">
            <?php
            if (isset($_GET['username'])) {
                $username = $_GET['username'];
                echo '<input type="text" name="username" placeholder="Username" value="' . $username . '">';
            } else {
                echo '<input type="text" name="username" placeholder="Username">';
            }
            ?>
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <input type="email" name="email" placeholder="E-mail">
            <br>
            <?php
            if (isset($_GET['name'])) {
                $name = $_GET['name'];
                echo '<input type="text" name="name" placeholder="Name" value="' . $name . '">';
            } else {
                echo '<input type="text" name="name" placeholder="Name">';
            }
            echo '<br>';
            if (isset($_GET['age'])) {
                $age = $_GET['age'];
                echo '<input type="number" name="age" placeholder="Age" value="' . $age . '">';
            } else {
                echo '<input type="number" name="age" placeholder="Age">';
            }
            echo '<br>';
            if (isset($_GET['gender'])) {
                $gender = $_GET['gender'];
                echo '<input type="text" name="gender" placeholder="Gender" value="' . $gender . '">';
            } else {
                echo '<input type="text" name="gender" placeholder="Gender">';
            }
            echo '<br>';
            if (isset($_GET['dateOfBirth'])) {
                $dateOfBirth = $_GET['dateOfBirth'];
                echo '<input type="date" name="dateOfBirth" placeholder="Date Of Birth" value="' . $dateOfBirth . '">';
            } else {
                echo '<input type="date" name="dateOfBirth" placeholder="Date Of Birth">';
            }
            echo '<br>';
            ?>
            <button type="submit" name="registerButton">Sign Up</button>
        </form>
        <?php
        /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($fullUrl, "signup=empty") == true) {
            echo "<p class='error'>You did not fill all fields</p>";
            exit();
        } else if (strpos($fullUrl, "signup=invalidemail") == true) {
            echo "<p class='error'>Invalid E-mail</p>";
            exit();
        } else if (strpos($fullUrl, "signup=error") == true) {
            echo "<p class='error'>You did not press the button.</p>";
            exit();
        } else if (strpos($fullUrl, "signup=success") == true) {
            echo "<p class='success'>You have been signed up.</p>";
            exit();
        }*/
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