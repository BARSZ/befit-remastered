<?php
if (isset($_POST['registerButton'])) {
    include_once 'dbh.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $startingCredits = 30;
    $membershipExpires = date("Y-m-d");

    if (empty($username) || empty($password) || empty($email) || empty($name) || empty($age) || empty($gender) || empty($dateOfBirth)) {
        header("Location: ../index.php?signup=empty");
        exit();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?signup=invalidemail&username=$username&name=$name&age=$age&gender=$gender&dateOfBirth=$dateOfBirth");
            exit();
        } else {
            $sql = "INSERT INTO `clients`(`username`, `password`, `email`, `name`, `age`, `gender`, `dateOfBirth`, `credits`, `membershipExpires`) 
                    VALUES ('$username','$passwordHashed','$email','$name','$age','$gender','$dateOfBirth','$startingCredits','$membershipExpires');";
            mysqli_query($conn, $sql);
            header("Location: ../index.php?signup=success");
            exit();
        }
    }
} else {
    header("Location: ../index.php?signup=error");
    exit();
}
