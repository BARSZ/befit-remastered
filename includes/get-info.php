<?php

function getName($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["name"];
}
function getGender($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["gender"];
}
function getAge($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["age"];
}
function getEmail($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["email"];
}
function getBirth($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["dateOfBirth"];
}
function getCredits($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["credits"];
}
function getMembershipExpires($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["membershipExpires"];
}
function getHashedPassword($conn, $id)
{
    $sql = "SELECT * FROM `clients` WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $client = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($client);
    return $client[0]["password"];
}
