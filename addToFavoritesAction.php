<?php
// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");

if (isset($_POST["movie_id"]) && isset($_POST["user_id"]) && isset($_POST["add"])) {
    // sql connection
    global $conn;

    // get data
    $user_id = $_POST["user_id"];
    $movie_id = $_POST["movie_id"];

    // sql
    $sql = "INSERT INTO favorite_movies VALUES ('$movie_id','$user_id')";

    // execute query
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "failure";
    }
}

// remove from favorites
if (isset($_POST["movie_id"]) && isset($_POST["user_id"]) && isset($_POST["remove"])) {
    // sql connection
    global $conn;

    // get data
    $user_id = $_POST["user_id"];
    $movie_id = $_POST["movie_id"];

    // sql
    $sql = "DELETE FROM favorite_movies WHERE movie_id='$movie_id' AND user_id='$user_id'";

    // execute query
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "failure";
    }
}
