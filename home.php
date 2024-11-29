<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once (dirname(__FILE__)) . "/../functions/display_movies_fxn.php";
include_once (dirname(__FILE__)) . "/../functions/display_banner_fxn.php";
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

    <div class="hero swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php echo display_banner_fxn() ?>

            <!-- <div class="swiper-slide">
                <img src="../assets/movie_images/spiderman.jpg" alt="">
                <div class="text-content">
                    <div class="details">
                        <h1>Spiderman 2</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero quibusdam cum perferendis consequatur eum ratione doloremque vitae veniam nemo officiis.</p>
                        <a href="">
                            <i class='bx bxl-play-store bx-sm'></i>
                            <span>Watch now</span>
                        </a>
                    </div>
                </div>
            </div>  -->
        </div>
    </div>

    <!-- popular movies -->
    <section class="popular">
        <p class="heading">Popular Movies</p>

        <div class="movie_grid">
            <?php echo display_popular_movies_fxn() ?>
        </div>
    </section>


    <!-- popular tv shows -->
    <!-- <section class="popular">
        <p class="heading">Popular TV Shows</p>

        <div class="movie_grid">
            <?php echo display_popular_tv_shows_fxn() ?>
        </div>
    </section> -->

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