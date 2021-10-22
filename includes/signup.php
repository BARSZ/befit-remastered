<?php
if (isset($_POST['registerButton'])) {
    require_once 'dbh.php';
    require_once 'functions.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $startingCredits = 30;
    $membershipExpires = date("Y-m-d");

    if (emptyInputSignUp($username, $password, $email, $name, $age, $gender, $dateOfBirth)) {
        header("Location: ../signup-page.php?signup=empty");
        exit();
    }
    if (invalidUsername($username)) {
        header("Location: ../signup-page.php?signup=invalidusername");
        exit();
    }
    if (invalidEmail($email)) {
        header("Location: ../signup-page.php?signup=invalidemail&username=$username&name=$name&age=$age&gender=$gender&dateOfBirth=$dateOfBirth");
        exit();
    }
    if (passwordDontMatch($password, $passwordRepeat)) {
        header("Location: ../signup-page.php?signup=passwordsDontMatch");
        exit();
    }
    if (usernameExists($conn, $username, $email)) {
        header("Location: ../signup-page.php?signup=usernameOrEmailEXIST");
        exit();
    }
    createUser($conn, $username, $password, $email, $name, $age, $gender, $dateOfBirth, $startingCredits, $membershipExpires);
} else {
    header("Location: ../index.php?signup=error");
    exit();
}
