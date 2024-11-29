<?php

require_once(dirname(__FILE__) . "/../settings/core.php");
require_once(dirname(__FILE__) . "/../functions/get_movies_fxn.php");
require_once(dirname(__FILE__) . "/../functions/get_categories_fxn.php");
require_once(dirname(__FILE__) . "/../functions/get_genres_fxn.php");

isAdminLoggedIn();
$all_movies = get_movies_fxn();
$all_categories = get_categories_fxn();
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
    <div class="admin">
        <a class="logout" href="../actions/logoutAction.php">logout</a>
    </div>
    <div class="admin_container">
        <div class="admin_form">
            <h1>Add Movie</h1>
            <form method="post" action="../actions/manageMovieAction.php" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="">Title</label>
                    <input type="text" name="title" required>
                </div>
                <div class="input-group">
                    <label for="">Description</label>
                    <textarea name="description" rows="10" id="" style="resize:none;" required></textarea>
                </div>
                <div class="input-group">
                    <label for="">Category</label>
                    <select name="category" id="">
                        <?php
                        foreach ($all_categories as $category) {
                        ?>
                            <option value="<?php echo $category["cat_id"] ?>"><?php echo $category["cat_name"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">Duration</label>
                    <input type="text" name="duration" required>
                </div>
                <div class="input-group">
                    <label for="">Genre</label>
                    <select name="genre" id="">
                        <?php
                        foreach ($all_genres as $genre) {
                        ?>
                            <option value="<?php echo $genre["genre_id"] ?>"><?php echo $genre["genre_name"] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">Year</label>
                    <input type="text" name="year" required>
                </div>
                <div class="input-group">
                    <label for="">Url</label>
                    <input type="text" name="url" required>
                </div>
                <div class="input-group">
                    <label for="">Movie Image</label>
                    <input type="file" name="thumbnail" accept="image/*" required>
                </div>
                <button name="addMovie">Add Movie</button>
            </form>
        </div>
        <!-- categories table -->
        <div class="admin_table">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Duration</th>
                        <th>Year</th>
                        <th>Url</th>
                        <th>Thumbnail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($all_movies as $movie) {
                    ?>
                        <tr>
                            <td> <?php echo htmlspecialchars($movie['title']) ?></td>
                            <td> <?php echo htmlspecialchars($movie['description']) ?></td>
                            <td> <?php echo htmlspecialchars($movie['cat_name']) ?></td>
                            <td> <?php echo htmlspecialchars($movie['duration']) ?></td>
                            <td> <?php echo htmlspecialchars($movie['year']) ?></td>
                            <td> <?php echo htmlspecialchars($movie['url']) ?></td>
                            <td>
                                <div class="image"><img src="<?php echo htmlspecialchars($movie['thumbnail']) ?>" alt=""></div>
                            </td>
                            <td>
                                <a class="btn edit" href="../admin/edit_movie.php?id=<?php echo urlencode($movie['movie_id']) ?>">Edit</a>
                                <a class="btn delete" href="../actions/manageMovieAction.php?deleteID=<?php echo urlencode($movie['movie_id']) ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>