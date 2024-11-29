<?php
require_once (dirname(__FILE__)) . "/../settings/db_connection.php";

function display_banner_fxn()
{
    // sql connection
    global $conn;

    // results
    $banners = [];

    // sql query
    $sql = "SELECT * FROM movies JOIN category ON movies.category = category.cat_id WHERE category.cat_name='hero'";

    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $banners = $executed_query->fetch_all(MYSQLI_ASSOC);
    }

    $html = '';
    // print_r($banners);
    foreach ($banners as $banner) {
        $image_path = '../assets/movie_images/' . urlencode(basename($banner["thumbnail"]));
        $html .= '
        <div class="swiper-slide">
                <img src="' . htmlspecialchars($image_path) . '" alt="">
                <div class="text-content">
                    <div class="details">
                        <h1>' . htmlspecialchars($banner["title"]) . '</h1>
                        <p>' . htmlspecialchars($banner["description"]) . '</p>
                        <a href="../views/streaming.php?movie_id=' . htmlspecialchars($banner["movie_id"]) . '">
                            <i class="bx bxl-play-store bx-sm"></i>
                            <span>Watch now</span>
                        </a>
                    </div>
                </div>
            </div>
        ';
    }

    return $html;
}
