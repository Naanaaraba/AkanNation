<?php

// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");


if (isset($_POST["loginButton"])) {
    // accessing the database connection variable from the connection file
    global $conn;
    // get the form data
    $email = mysqli_real_escape_string($conn, trim($_POST["emailAddress"]));
    $password = mysqli_real_escape_string($conn, trim($_POST["password"]));

    // check if input is not empty
    if (empty($email) && empty($password)) {
        return;
    }

    // create sql query
    $sql = "SELECT user_id, user_role, username, password FROM movie_users WHERE email='$email'";

    // execute query
    if ($user = $conn->query($sql)) {
        // fetch results
        $results = $user->fetch_assoc();
        // verify if passwords match
        if (password_verify($password, $results["password"])) {
            // start session
            session_start();
            // store user details in session
            $_SESSION["username"] = $results["username"];
            $_SESSION["user_id"] = $results["user_id"];
            $_SESSION["user_role"] = $results["user_role"];
            // send success response
            echo $_SESSION["user_role"];
        } else {
            echo "Invalid username or password. Please try again.";
        }
    } else {
        echo "No user account exists";
    }
}
