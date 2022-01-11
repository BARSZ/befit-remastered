<?php
session_start();
if (isset($_POST['logout_user'])) {
    setcookie(session_name(), '', 100);
    session_unset();
    session_destroy();
    $_SESSION = array();
    sleep(2);
    header('Location:../index.php');
} else if (isset($_POST['goBack'])) {
    unset($_SESSION['loggedin']);
    sleep(2);
    header('Location:../home-page.php');
}
