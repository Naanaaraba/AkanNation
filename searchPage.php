<?php

require_once(dirname(__FILE__) . "/../settings/db_connection.php");
include_once (dirname(__FILE__)) . "/../functions/get_favorites_fxn.php";
include_once (dirname(__FILE__)) . "/../functions/display_search_results_fxn.php";

if(isset($_GET["search_term"])){
    $search_term = $_GET["search_term"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AkanNation - Home of movies</title>
    <link rel="stylesheet" href="../css/styles.css">
    <!-- swiper js -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- boxicons -->
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">
</head>

<body>

    <!-- include navbar -->
    <?php include_once (dirname(__FILE__)) . "/../header.php"; ?>


    <!-- popular movies -->
    <section class="popular all_movies">
        <p class="heading">Showing results for <?php echo !empty($search_term) ? "'".trim($search_term)."'" : "'All movies'" ?></p>

        <div class="movie_grid">
            <?php echo display_search_results_fxn($search_term) ?>
        </div>
    </section>




    <!-- include footer -->
    <?php include_once (dirname(__FILE__)) . "/../footer.php"; ?>


    <!-- swiper js  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <!-- navbar js -->
    <script src="../js/navbar.js"></script>
    <script src="../js/favorite.js"></script>
</body>

</html>