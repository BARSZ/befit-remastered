<?php
session_start();
if (isset($_POST["edit-details-button"])) {
    require_once 'dbh.php';
    require_once 'functions.php';
    include_once "get-info.php";
    $ageEntered = $_POST["age"];
    $emailEntered = $_POST["email"];
    $passwordEntered = $_POST["psw"];
    $userid = $_SESSION["userid"];
    //Name
    if ($_POST["name"]  != "") {
        $newName = $_POST["name"];
        updateName($conn, $userid, $passwordEntered, $newName);
    }
    //Age
    if ($ageEntered != "") {
        if ($ageEntered > 17 && $ageEntered < 100) {
            updateAge($conn, $userid, $passwordEntered, $ageEntered);
        }
    }
    //Password
    if ($_POST["password"] != "") {
        if ($_POST["password"] == $_POST["password2"]) {
            $newPassword = $_POST["password"];
            updatePassword($conn, 11, $passwordEntered, $newPassword);
            //echo '<script>alert("Passwords changed!")</script>';
        } else {
            //echo '<script>alert("Passwords do not match!")</script>';
            //header("Location: ../profile-page.php");
        }
    }
    //Email
    if ($emailEntered != "") {
        updateEmail($conn, $userid, $passwordEntered, $emailEntered);
    }
    header("Location: ../profile-page.php");
    exit();
    //updateUser($conn, $_SESSION["userid"], $passwordEntered, $newEmail, $newName, $newAge, $newPassword);
}
