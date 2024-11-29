<?php

include_once (dirname(__FILE__)) . "/./settings/core.php";
$username = getUsername();
?>

<div id="navbar" class="navbar">
    <div class="logo">
        <a href="home.php">
            <h2>AKAN NATION</h2>
        </a>
    </div>
    <div class="navLinks">
        <ul id="navlinks">
            <div class="menu_heading">
                <p>Menu</p>
            </div>
            <li><a href="home.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li>
                <form action="../views/searchPage.php" method="GET">
                    <input placeholder="Search for a movie..." type="text" name="search_term">
                    <button class="searchBtn" type="submit">Search</button>
                </form>
            </li>
            <!-- <li><a href="">Tv Shows</a></li> -->
            <li><a href="profile.php"><?php echo !empty($username) ?  $username :  "Account"; ?></a></li>
            <?php
            if (isLoggedIn()) {
                echo '<li><a href="../actions/logoutAction.php">Logout</a></li>';
            } else {
                echo '<li><a href="../auth/login.php">Login</a></li>';
            }
            ?>
        </ul>
        <div id="burger" class="burger">
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>
</div>