<?php

// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");


if (isset($_POST["reviewBtn"])) {
    global $conn;

    $user_id = mysqli_real_escape_string($conn, $_POST["user_id"]);
    $movie_id = mysqli_real_escape_string($conn, $_POST["movie_id"]);
    $review_content = mysqli_real_escape_string($conn, $_POST["review"]);
    $rating = mysqli_real_escape_string($conn, $_POST["rating"]);

    // 
    $sql = "INSERT INTO reviews(user_id, movie_id, review, rating) VALUES ('$user_id', '$movie_id', '$review_content','$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success');</script>";
    } else {
        echo "<script>alert('Failed');</script>";
    }
}
