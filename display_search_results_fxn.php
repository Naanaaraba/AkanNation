<?php

function display_search_results_fxn($search_term)
{
    
    // sql connection
    global $conn;

    // results
    $reviews = [];

    $search_term = strtolower($search_term); // Make lowercase
    
    $search_term = str_replace(['-', ' '], '', $search_term);

    $search_term = mysqli_real_escape_string($conn, $search_term);

    // sql query
    $sql = "SELECT * FROM movies WHERE REPLACE(title, '-', '') LIKE REPLACE('%$search_term%', '-', '');";

    $executed_query = $conn->query($sql);

    $html = '';
    
    if ($executed_query) {
        $reviews = $executed_query->fetch_all(MYSQLI_ASSOC);

        if(!empty($reviews)){

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
        }
        else{
            $html.='<div class="">Nothing to show</div>';
        }
    }



    return $html;
}