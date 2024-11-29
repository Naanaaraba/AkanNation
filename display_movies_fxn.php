<?php
require_once (dirname(__FILE__)) . "/../settings/db_connection.php";
include_once (dirname(__FILE__)) . "/../functions/get_favorites_fxn.php";

function display_popular_movies_fxn()
{
    // sql connection
    global $conn;

    // results
    $reviews = [];

    // sql query
    $sql = "SELECT * FROM movies JOIN category ON movies.category = category.cat_id WHERE category.cat_name='Movie'";

    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $reviews = $executed_query->fetch_all(MYSQLI_ASSOC);
    }

    $html = '';
    foreach ($reviews as $popular_movie) {
        $image_path = '../assets/movie_images/' . urlencode(basename($popular_movie["thumbnail"]));
        $is_favorite = get_favorite_icon_fxn($popular_movie["movie_id"], $_SESSION["user_id"]);
        $favorite_icon_class = $is_favorite ? "bxs-heart" : "bx-heart";
        $html .= '
        <div class="movie_card">
            <a href="../views/streaming.php?movie_id=' . urlencode($popular_movie["movie_id"]) . '" class="image_container">
                <div class="overlay">
                    <i class="bx bxl-play-store bx-lg"></i>
                </div>
                <img src="' . htmlspecialchars($image_path) . '" alt="Movie Thumbnail">
            </a>
            <div class="content">
                <div class="top">
                    <a href="../views/streaming.php?movie_id=' . urlencode($popular_movie["movie_id"]) . '" class="title">' . htmlspecialchars($popular_movie["title"]) . '</a>
                    <a onclick=manage_favorites(this) data-id="' . urlencode($popular_movie["movie_id"]) . '" data-userID="' . urlencode($_SESSION["user_id"]) . '" class="favorite"><i class="bx ' . $favorite_icon_class . ' bx-sm"></i></a>
                </div>
                <div class="details">
                    <div class="year_and_duration">
                        <p>' . htmlspecialchars($popular_movie["year"]) . '</p>
                        <p>•</p>
                        <p>' . htmlspecialchars($popular_movie["duration"]) . 'm</p>
                    </div>
                    <div class="category">
                        <span>' . htmlspecialchars($popular_movie["cat_name"]) . '</span>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    return $html;
}

function display_popular_tv_shows_fxn()
{
    // sql connection
    global $conn;

    // results
    $reviews = [];

    // sql query
    $sql = "SELECT * FROM movies JOIN category ON movies.category = category.cat_id WHERE category.cat_name='TV Show'";

    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $reviews = $executed_query->fetch_all(MYSQLI_ASSOC);
    }

    $html = '';
    // print_r($reviews);
    foreach ($reviews as $popular_movie) {
        $image_path = '../assets/movie_images/' . urlencode(basename($popular_movie["thumbnail"]));
        $is_favorite = get_favorite_icon_fxn($popular_movie["movie_id"], $_SESSION["user_id"]);
        $favorite_icon_class = $is_favorite ? "bxs-heart" : "bx-heart";
        $html .= '
        <div class="movie_card">
            <a href="../views/streaming.php?movie_id=' . urlencode($popular_movie["movie_id"]) . '" class="image_container">
                <div class="overlay">
                    <i class="bx bxl-play-store bx-lg"></i>
                </div>
                <img src="' . htmlspecialchars($image_path) . '" alt="Movie Thumbnail">
            </a>
            <div class="content">
                <div class="top">
                    <a href="../views/streaming.php?movie_id=' . urlencode($popular_movie["movie_id"]) . '" class="title">' . htmlspecialchars($popular_movie["title"]) . '</a>
                    <a onclick=manage_favorites(this) data-id="' . urlencode($popular_movie["movie_id"]) . '" data-userID="' . urlencode($_SESSION["user_id"]) . '" class="favorite"><i class="bx ' . $favorite_icon_class . ' bx-sm"></i></a>
                </div>
                <div class="details">
                    <div class="year_and_duration">
                        <p>' . htmlspecialchars($popular_movie["year"]) . '</p>
                        <p>•</p>
                        <p>' . htmlspecialchars($popular_movie["duration"]) . 'm</p>
                    </div>
                    <div class="category">
                        <span>' . htmlspecialchars($popular_movie["cat_name"]) . '</span>
                    </div>
                </div>
            </div>
        </div>
        ';
    }

    return $html;
}


function get_all_ratings_fxn()
{
    // sql connection
    global $conn;

    // list to hold query results
    $results = [];

    // sql query to fetch the categories
    $sql = "SELECT * FROM ratings";

    // execute query
    $execute_query = $conn->query($sql);

    if ($execute_query) {
        $results = $execute_query->fetch_all(MYSQLI_ASSOC);
    }

    return $results;
}


function get_movie_reviews_fxn($movie_id)
{
    // sql connection
    global $conn;

    // results
    $reviews = [];

    // sql query
    $sql = "SELECT * FROM reviews 
    JOIN movies ON reviews.movie_id = movies.movie_id 
    JOIN movie_users ON reviews.user_id = movie_users.user_id 
    JOIN ratings ON reviews.rating = ratings.rating_id 
    WHERE reviews.movie_id='$movie_id'";

    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $reviews = $executed_query->fetch_all(MYSQLI_ASSOC);
    }

    $html = '';
    // print_r($reviews);
    foreach ($reviews as $review) {
        $html .= '
        <div class="review_item">
            <p> <i class="bx bx-user"></i>' . $review["username"] . '</p>
            <p><i style="color: #f4c542" class="bx bxs-star" ></i>' . $review["rating_name"] . '</p>
            <p>' . $review["review"] . '</p>
        </div>
        ';
    }

    return $html;
}
