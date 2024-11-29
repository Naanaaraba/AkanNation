<?php

session_start();

// check if user is logged in
function isLoggedIn()
{
    if (isset($_SESSION["user_role"]) && isset($_SESSION["user_id"])) {
        return true;
    }
    header("Location: ../index.php");
}

// check if admin is logged in
function isAdminLoggedIn()
{
    if (isset($_SESSION["user_role"], $_SESSION["user_id"]) && $_SESSION["user_role"]==1) {
        return true;
    }
    header("Location: ../index.php");
}

// get userid
function getUserID()
{
    return $_SESSION["user_id"];
}

// get username
function getUsername()
{
    return $_SESSION["username"];
}


// get user role
function getUserRole()
{
    return $_SESSION["user_role"];
}
