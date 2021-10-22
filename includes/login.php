<?php

if (isset($_POST["loginButton"])) {
    require_once 'dbh.php';
    require_once 'functions.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../index.php?signup=empty");
        exit();
    } else {
    }
} else {
    header("location: ../index.php");
}
