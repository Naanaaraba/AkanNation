<?php
require_once(dirname(__FILE__) . "/../functions/get_profile_info_fxn.php");
include_once(dirname(__FILE__) . "/../settings/core.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/profile.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="icon" href="../assets/images/AkanNation_logo.jpg" type="image/x-icon" />
    <!-- boxicons -->
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.min.css">
</head>
<body>
    <?php
    include_once(dirname(__FILE__)) . "/../header.php";
    $user_id = getUserID();
    $username = getUsername();
    ?>
    
    <header id="logo-header">
        <img src="../assets/images/akannation.webp" alt="Akan Nation Logo" />
        <label>USER PROFILE</label>
    </header>

    <section id="profile-header">
        <div class="profile-picture">
            <img src="../assets/images/profilepic.png" alt="User Profile" />
        </div>
        <div class="profile-info">
            <h1><?php echo $username ?></h1>
            <p class="bio">"We are Netflix Ghana"</p>
        </div>
    </section>

    <section id="movie-stats">
        <div class="stats">
            <div class="stat-item">
                <h3>Movies Watched</h3>
                <p><?php echo get_movie_statistics_fxn($user_id)["movies_watched"] ?></p>
            </div>
            <div class="stat-item">
                <h3>Favorites</h3>
                <p><?php echo get_movie_statistics_fxn($user_id)["watchlist"] ?></p>
            </div>
            <div class="stat-item">
                <h3>Total Hours Watched</h3>
                <p><?php echo get_movie_statistics_fxn($user_id)["total_hours_watched"] ?> hrs</p>
            </div>
        </div>
    </section>

    <section id="recent-activity">
        <h2>Recent Activity</h2>
        <div class="activity-list">
            <?php echo get_recent_activity_fxn($user_id) ?>
        </div>
    </section>

    <section id="favorites">
        <h2>Favorites</h2>
        <div class="favorites-list">
            <?php echo get_user_favorites_fxn($user_id) ?>
        </div>
    </section>

    <?php include_once(dirname(__FILE__)) . "/../footer.php"; ?>
    <script src="../js/navbar.js"></script>
    <script src="../js/favorite.js"></script>
</body>
</html>