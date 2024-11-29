<?php
require_once(dirname(__FILE__) . "/../settings/core.php");
require_once(dirname(__FILE__) . "/../functions/get_categories_fxn.php");
require_once(dirname(__FILE__) . "/../functions/get_single_movie_fxn.php");
require_once(dirname(__FILE__) . "/../functions/get_genres_fxn.php");
isAdminLoggedIn();
// get category id
$movie_id = $_GET["id"];

// fetch single category
$movie = get_single_movie_fxn($movie_id);

// all categories
$all_categories = get_categories_fxn();
// all genres
$all_genres = get_genres_fxn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akan Nation | Admin Portal</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="admin_form">
        <h1>Update Movie</h1>
        <form method="post" action="../actions/manageMovieAction.php">
            <input type="hidden" name="movie_id" value="<?php echo $movie["movie_id"] ?>">
            <div class="input-group">
                <label for="">Title</label>
                <input type="text" name="title" value="<?php echo $movie["title"] ?>">
            </div>
            <div class="input-group">
                <label for="">Description</label>
                <textarea name="description" id="" style="resize:none;"><?php echo $movie["description"] ?></textarea>
            </div>
            <div class="input-group">
                <label for="">Category</label>
                <select name="category" id="">
                    <option selected value="<?php echo $movie["category"] ?>"><?php echo $movie["cat_name"] ?></option>
                    <?php
                    foreach ($all_categories as $category) {
                        // Skip the selected category to avoid showing duplicates
                        if ($category["cat_id"] == $movie["category"]) {
                            continue;
                        }
                    ?>
                        <!-- Display other categories -->
                        <option value="<?php echo $category["cat_id"]; ?>"><?php echo $category["cat_name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <label for="">Duration</label>
                <input type="text" name="duration" value="<?php echo $movie["duration"] ?>">
            </div>
            <div class="input-group">
                <label for="">Genre</label>
                <select name="genre" id="">
                    <option selected value="<?php echo $movie["genre"] ?>"><?php echo $movie["genre_name"] ?></option>
                    <?php
                    foreach ($all_genres as $genre) {
                        // Skip the selected genre to avoid showing duplicates
                        if ($genre["genre_id"] == $movie["genre"]) {
                            continue;
                        }
                    ?>
                        <!-- Display other categories -->
                        <option value="<?php echo $genre["genre_id"]; ?>"><?php echo $genre["genre_name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="input-group">
                <label for="">Year</label>
                <input type="text" name="year" value="<?php echo $movie["year"] ?>">
            </div>
            <div class="input-group">
                <label for="">Url</label>
                <input type="text" name="url" value="<?php echo $movie["url"] ?>">
            </div>

            <button name="updateMovie">Update Movie</button>
        </form>
    </div>

</body>

</html>