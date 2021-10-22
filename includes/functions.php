<?php

function emptyInputSignUp($username, $password, $email, $name, $age, $gender, $dateOfBirth)
{
    $result = false;
    if (empty($username) || empty($password) || empty($email) || empty($name) || empty($age) || empty($gender) || empty($dateOfBirth)) {
        $result = true;
    }
    return $result;
}
function invalidUsername($username)
{
    $result = false;
    if (!preg_match(("/^[a-zA-Z0-9]*$/"), $username)) {
        $result = true;
    }
    return $result;
}
function invalidEmail($email)
{
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    return $result;
}
function passwordDontMatch($password, $passwordRepeat)
{
    $result = false;
    if ($password !== $passwordRepeat) {
        $result = true;
    }
    return $result;
}
function usernameExists($conn, $username, $email)
{
    $sql = "SELECT * FROM clients WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup-page.php?signup=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $username, $password, $email, $name, $age, $gender, $dateOfBirth, $startingCredits, $membershipExpires)
{
    $sql = "INSERT INTO `clients`(`username`, `password`, `email`, `name`, `age`, `gender`, `dateOfBirth`, `credits`, `membershipExpires`) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup-page.php?signup=stmtfailed");
        exit();
    }
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssssssss", $username, $passwordHashed, $email, $name, $age, $gender, $dateOfBirth, $startingCredits, $membershipExpires);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../index.php?signup=success");
}
