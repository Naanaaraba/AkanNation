<?php
// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");
include_once(dirname(__FILE__) . "/../functions/get_favorites_fxn.php");

function get_movie_statistics_fxn($user_id)
{
    // sql connection
    global $conn;

    // Initialize results array
    $statistics = [
        'movies_watched' => 0,
        'watchlist' => 0,
        'total_hours_watched' => 0,
    ];

    // Query for movies watched
    $movies_watched_query = "SELECT COUNT(DISTINCT movie_id) AS movies_watched FROM activity WHERE activity.user_id='$user_id'";
    $movies_watched_result = $conn->query($movies_watched_query);
    if ($movies_watched_result && $row = $movies_watched_result->fetch_assoc()) {
        $statistics['movies_watched'] = $row['movies_watched'];
    }

    // Query for watchlist
    $watchlist_query = "SELECT COUNT(*) AS watchlist FROM favorite_movies WHERE user_id='$user_id'";
    $watchlist_result = $conn->query($watchlist_query);
    if ($watchlist_result && $row = $watchlist_result->fetch_assoc()) {
        $statistics['watchlist'] = $row['watchlist'];
    }

    // Query for total hours watched
    $total_hours_watched_query = "SELECT ROUND(SUM(DISTINCT m.duration) / 60, 2) AS total_watch_time_in_hour
        FROM activity a
        JOIN movies m ON a.movie_id = m.movie_id
        WHERE a.user_id = '$user_id'
    ";
    $total_hours_watched_result = $conn->query($total_hours_watched_query);
    if ($total_hours_watched_result && $row = $total_hours_watched_result->fetch_assoc()) {
        $statistics['total_hours_watched'] = $row['total_watch_time_in_hour'];
    }

    // Return the statistics as an associative array
    return $statistics;
}


function get_recent_activity_fxn($user_id)
{
    // sql connection
    global $conn;

    $favorites = [];

    // Sanitize inputs to avoid SQL injection
    $user_id = mysqli_real_escape_string($conn, $user_id);

    // sql query to fetch the categories
    $sql = "SELECT DISTINCT movies.movie_id, movies.title, movies.thumbnail, movies.year, movies.duration, category.cat_name
        FROM movies
        JOIN activity ON movies.movie_id = activity.movie_id
        JOIN category ON movies.category = category.cat_id
        JOIN genre ON movies.genre = genre.genre_id
        WHERE activity.user_id = '$user_id';";

    // execute query
    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $favorites = $executed_query->fetch_all(MYSQLI_ASSOC);
    }

    $html = '';
    // print_r($favorites);
    foreach ($favorites as $favorite) {
        $image_path = '../assets/movie_images/' . urlencode(basename($favorite["thumbnail"]));
        $is_favorite = get_favorite_icon_fxn($favorite["movie_id"], $_SESSION["user_id"]);
        $favorite_icon_class = $is_favorite ? "bxs-heart" : "bx-heart";
        $html .= '
        <div class="movie_card">
            <a href="../views/streaming.php?movie_id=' . urlencode($favorite["movie_id"]) . '" class="image_container">
                <div class="overlay">
                    <i class="bx bxl-play-store bx-lg"></i>
                </div>
                <img src="' . htmlspecialchars($image_path) . '" alt="Movie Thumbnail">
            </a>
            <div class="content">
                <div class="top">
                    <a href="../views/streaming.php?movie_id=' . urlencode($favorite["movie_id"]) . '" class="title">' . htmlspecialchars($favorite["title"]) . '</a>
                    <a onclick=manage_favorites(this) data-id="' . urlencode($favorite["movie_id"]) . '" data-userID="' . urlencode($_SESSION["user_id"]) . '" class="favorite"><i class="bx ' . $favorite_icon_class . ' bx-sm"></i></a>
                </div>
                <div class="details">
                    <div class="year_and_duration">
                        <p>' . htmlspecialchars($favorite["year"]) . '</p>
                        <p>•</p>
                        <p>' . htmlspecialchars($favorite["duration"]) . 'm</p>
                    </div>
                    <div class="category">
                        <span>' . htmlspecialchars($favorite["cat_name"]) . '</span>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    return $html;
}

function get_user_favorites_fxn($user_id)
{
    // sql connection
    global $conn;

    $favorites = [];

    // Sanitize inputs to avoid SQL injection
    $user_id = mysqli_real_escape_string($conn, $user_id);

    // sql query to fetch the categories
    $sql = "SELECT * FROM movies 
    JOIN favorite_movies ON movies.movie_id = favorite_movies.movie_id 
    JOIN category ON movies.category = category.cat_id 
    WHERE favorite_movies.user_id = '$user_id'";

    // execute query
    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $favorites = $executed_query->fetch_all(MYSQLI_ASSOC);
    }

    $html = '';
    // print_r($favorites);
    foreach ($favorites as $favorite) {
        $image_path = '../assets/movie_images/' . urlencode(basename($favorite["thumbnail"]));
        $is_favorite = get_favorite_icon_fxn($favorite["movie_id"], $_SESSION["user_id"]);
        $favorite_icon_class = $is_favorite ? "bxs-heart" : "bx-heart";
        $html .= '
        <div class="movie_card">
            <a href="../views/streaming.php?movie_id=' . urlencode($favorite["movie_id"]) . '" class="image_container">
                <div class="overlay">
                    <i class="bx bxl-play-store bx-lg"></i>
                </div>
                <img src="' . htmlspecialchars($image_path) . '" alt="Movie Thumbnail">
            </a>
            <div class="content">
                <div class="top">
                    <a href="../views/streaming.php?movie_id=' . urlencode($favorite["movie_id"]) . '" class="title">' . htmlspecialchars($favorite["title"]) . '</a>
                    <a onclick=manage_favorites(this) data-id="' . urlencode($favorite["movie_id"]) . '" data-userID="' . urlencode($_SESSION["user_id"]) . '" class="favorite"><i class="bx ' . $favorite_icon_class . ' bx-sm"></i></a>
                </div>
                <div class="details">
                    <div class="year_and_duration">
                        <p>' . htmlspecialchars($favorite["year"]) . '</p>
                        <p>•</p>
                        <p>' . htmlspecialchars($favorite["duration"]) . 'm</p>
                    </div>
                    <div class="category">
                        <span>' . htmlspecialchars($favorite["cat_name"]) . '</span>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    return $html;
}
