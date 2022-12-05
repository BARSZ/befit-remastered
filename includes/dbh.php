<?php
$dbServerName = "localhost:3306";
$dbUserName = "root";
$dbPassword = "root";
$dbName = "befit";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
