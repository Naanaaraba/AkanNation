<?php
// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");


function get_single_movie_fxn($movie_id)
{
    // sql connection 
    global $conn;

    $movies = [];

    $sql = "SELECT * FROM movies 
    JOIN category ON movies.category = category.cat_id
    JOIN genre ON movies.genre = genre.genre_id
    WHERE movie_id='$movie_id'";

    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $movies = $executed_query->fetch_assoc();
    }

    return $movies;
}

function update_activity_fxn($movie_id, $user_id)
{
    // sql connection 
    global $conn;

    // insert query to update activity
    $activity_sql = "INSERT INTO activity(movie_id, user_id) VALUES ('$movie_id','$user_id')";

    // execute activity query
    if ($conn->query($activity_sql) === TRUE) {
        return true;
    }

    return false;
}
