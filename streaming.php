<?php
include_once (dirname(__FILE__)) . "/../settings/core.php";
include_once (dirname(__FILE__)) . "/../functions/get_single_movie_fxn.php";
include_once (dirname(__FILE__)) . "/../functions/display_movies_fxn.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akan Nation | Stream High Quality Videos</title>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- boxicons -->
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">
</head>

<body>
    <!-- include navbar -->
    <?php
    include_once (dirname(__FILE__)) . "/../header.php";
    $movie_id = $_GET["movie_id"];
    $user_id = getUserID();
    $movie_details = get_single_movie_fxn($movie_id);
    update_activity_fxn($movie_id, $user_id);
    $all_ratings = get_all_ratings_fxn();
    ?>

    <div class="backdrop">
        <div class="overlay"></div>
        <img src="<?php echo $movie_details["thumbnail"] ?>" alt="">
    </div>

    <div class="container">
        <!-- Movie Player -->
        <div class="movie-player">
            <iframe
                id="moviePlayer"
                src="<?php echo $movie_details["url"] ?>"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Movie Details -->
        <div class="movie-details">
            <div class="movie-title"><?php echo $movie_details["title"] ?></div>
            <div class="movie-meta">
                <span><?php echo $movie_details["year"] ?></span> • <span><?php echo $movie_details["genre_name"] ?></span> • <span><?php echo $movie_details["duration"] ?>min</span>
            </div>
            <div class="movie-description">
                <?php echo $movie_details["description"] ?>
            </div>
        </div>


        <!-- review form -->
        <div class="review_form">
            <form method="post" onsubmit = "<?php

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
            ?>">
                <h3>Share your thoughts!</h3>
                <textarea name="review" id="" rows="10"></textarea>
                <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                <input type="hidden" name="movie_id" value="<?php echo $movie_id ?>">
                <select name="rating" id="">
                    <?php
                    foreach ($all_ratings as $rating) {
                    ?>
                        <option value="<?php echo $rating["rating_id"] ?>"><?php echo $rating["rating_name"] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <button type="submit" name="reviewBtn">Submit review</button>
            </form>
            <div class="reviews">
                <h3>All Reviews</h3>
                <?php echo get_movie_reviews_fxn($movie_id); ?>
            </div>
        </div>


        <!-- popular movies -->
        <section class="popular stream">
            <p class="heading">Other Popular Movies You May Like</p>

            <div class="movie_grid">
                <?php echo display_popular_movies_fxn() ?>
            </div>
        </section>
    </div>

    <!-- include footer -->
    <?php include_once (dirname(__FILE__)) . "/../footer.php"; ?>

    <script src="../js/navbar.js"></script>
    <script src="../js/favorite.js"></script>
    <script>
        const iframe = document.getElementById('moviePlayer');
        const originalSrc = iframe.src;

        // Continuously check if the iframe's `src` changes
        setInterval(() => {
            if (iframe.src !== originalSrc) {
                console.log('Iframe attempted to navigate away!');
                iframe.src = originalSrc; // Reset to original src
            }
        }, 1000);
    </script>
</body>

</html>