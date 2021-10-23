<?php

if (isset($_POST["loginButton"])) {
    require_once 'dbh.php';
    require_once 'functions.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (emptyInputLogin($username, $password)) {
        header("Location: ../index.php?login=empty");
        exit();
    }
    loginUser($conn, $username, $password);
} else {
    header("location: ../index.php");
    exit();
}
