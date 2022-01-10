<?php
include_once "get-info.php";
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
function emptyInputLogin($username, $password)
{
    $result = false;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    return $result;
}
function loginUser($conn, $username, $password)
{
    $usernameExists = usernameExists($conn, $username, $username);

    if ($usernameExists === false) {
        header("Location: ../index.php?login=usernameDoesNotExist");
        exit();
    }

    $passwordHashed = $usernameExists["password"];
    $checkPasswordMatch = password_verify($password, $passwordHashed);

    if ($checkPasswordMatch === false) {
        header("Location: ../index.php?login=wrongPassword");
        exit();
    } else if ($checkPasswordMatch === true) {
        session_destroy();
        session_start();
        $_SESSION["userid"] = $usernameExists["id"];
        $_SESSION["username"] = $usernameExists["username"];
        $_SESSION["name"] = $usernameExists["name"];
        header("Location: ../home-page.php?login=success");
        exit();
    }
}
function updateUser($conn, $id, $passwordEntered, $newEmail, $newName, $newAge, $newPassword)
{
    $passwordHashed = getHashedPassword($conn, $id);
    $checkPasswordMatch = password_verify($passwordEntered, $passwordHashed);
    $newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);

    if ($checkPasswordMatch === true) {
        $sql = "UPDATE clients SET name = ?, age = ?, email = ?, password = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissi", $newName, $newAge, $newEmail, $newPasswordHashed, $id);
        $stmt->execute();
    }
    header("Location: ../profile-page.php");
    exit();
}
function updatePassword($conn, $id, $passwordEntered, $newPassword)
{
    $passwordHashed = getHashedPassword($conn, $id);
    $checkPasswordMatch = password_verify($passwordEntered, $passwordHashed);
    $newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);
    if ($checkPasswordMatch === true) {
        $sql = "UPDATE clients SET password = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newPasswordHashed, $id);
        $stmt->execute();
    }
}
function updateName($conn, $id, $passwordEntered, $newName)
{
    $passwordHashed = getHashedPassword($conn, $id);
    $checkPasswordMatch = password_verify($passwordEntered, $passwordHashed);

    if ($checkPasswordMatch === true) {
        $sql = "UPDATE clients SET name = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newName, $id);
        $stmt->execute();
    }
}
function updateAge($conn, $id, $passwordEntered, $newAge)
{
    $passwordHashed = getHashedPassword($conn, $id);
    $checkPasswordMatch = password_verify($passwordEntered, $passwordHashed);

    if ($checkPasswordMatch === true) {
        $sql = "UPDATE clients SET age = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $newAge, $id);
        $stmt->execute();
    }
}
function updateEmail($conn, $id, $passwordEntered, $newEmail)
{
    $passwordHashed = getHashedPassword($conn, $id);
    $checkPasswordMatch = password_verify($passwordEntered, $passwordHashed);

    if ($checkPasswordMatch === true) {
        $sql = "UPDATE clients SET email = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $newEmail, $id);
        $stmt->execute();
    }
}
