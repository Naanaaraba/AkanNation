
<?php
require_once (dirname(__FILE__)) . "/../settings/db_connection.php";

function get_favorite_icon_fxn($movie_id, $user_id)
{
    // sql connection
    global $conn;

    // Sanitize inputs to avoid SQL injection
    $movie_id = mysqli_real_escape_string($conn, $movie_id);
    $user_id = mysqli_real_escape_string($conn, $user_id);

    // sql query to fetch the categories
    $sql = "SELECT * FROM favorite_movies WHERE movie_id = '$movie_id' AND user_id = '$user_id'";

    // execute query
    $execute_query = $conn->query($sql);


    // Check if a row is returned (meaning the movie is a favorite)
    if ($execute_query && $execute_query->num_rows > 0) {
        return true; // Movie is a favorite
    } else {
        return false; // Movie is not a favorite
    }
}
