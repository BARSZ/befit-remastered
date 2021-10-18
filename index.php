<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>

    </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Sign Up</h1>
            </div>
        </div>

        <form action="includes/signup.php" method="POST">
            <div class="row">
                <div class="col-md-6 text-center">
                    <?php
                    if (isset($_GET['username'])) {
                        $username = $_GET['username'];
                        echo '<input type="text" name="username" placeholder="Username" value="' . $username . '">';
                    } else {
                        echo '<input type="text" name="username" placeholder="Username">';
                    }
                    ?>
                </div>
                <div class="col-md-6 text-center">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
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