<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");


if (isset($_POST["addMovie"])) {
    // sql connection
    global $conn;
    // get form data
    $title = mysqli_real_escape_string($conn, trim($_POST["title"]));
    $description = mysqli_real_escape_string($conn, trim($_POST["description"]));
    $genre = mysqli_real_escape_string($conn, trim($_POST["genre"]));
    $category = mysqli_real_escape_string($conn, trim($_POST["category"]));
    $duration = mysqli_real_escape_string($conn, trim($_POST["duration"]));
    $year = mysqli_real_escape_string($conn, trim($_POST["year"]));
    $url = mysqli_real_escape_string($conn, trim($_POST["url"]));

    // stop execution if movie is empty
    if (empty($title)) {
        return;
    }

    // Handle image upload
    $thumbnail = null; // Default value if no image is uploaded
    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == UPLOAD_ERR_OK) {
        // File details
        $file_tmp = $_FILES['thumbnail']['tmp_name'];
        $file_name = str_replace(' ', '_', basename($_FILES['thumbnail']['name']));
        $upload_dir = "../assets/movie_images/";

        // Ensure the upload directory exists
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Generate a unique name for the file to avoid overwriting
        $unique_file_name = uniqid() . "_" . $file_name;
        $target_file = $upload_dir . $unique_file_name;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file_tmp, $target_file)) {
            $thumbnail = $target_file; // Store the file path
            $sql = "INSERT INTO movies(title, `description`, genre, duration, category, `year`, `url`, thumbnail) VALUES ('$title', '$description', '$genre', '$duration', '$category', '$year', '$url', '$thumbnail')";

            // execute query
            if ($conn->query($sql) === TRUE) {
                echo "Success";
            } else {
                echo "Failed to add movie";
            }
        } else {
            echo "Failed to upload the image.";
            return;
        }
    } else {
        echo "An error occured while uploading the image.";
        return;
    }
}

// update category
if (isset($_POST["updateMovie"]) && isset($_POST["movie_id"])) {
    // sql connection
    global $conn;
    // get form data
    $id = mysqli_real_escape_string($conn, trim($_POST["movie_id"]));
    $title = mysqli_real_escape_string($conn, trim($_POST["title"]));
    $description = mysqli_real_escape_string($conn, trim($_POST["description"]));
    $genre = mysqli_real_escape_string($conn, trim($_POST["genre"]));
    $category = mysqli_real_escape_string($conn, trim($_POST["category"]));
    $duration = mysqli_real_escape_string($conn, trim($_POST["duration"]));
    $year = mysqli_real_escape_string($conn, trim($_POST["year"]));
    $url = mysqli_real_escape_string($conn, trim($_POST["url"]));

    // stop execution if movie is empty
    if (empty($title)) {
        return;
    }

    $sql = "UPDATE movies SET title='$title', `description`='$description', genre='$genre', category='$category', duration='$duration', `year`='$year', `url`='$url' WHERE movie_id='$id'";

    // execute query
    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Failed to add movie";
    }
}


// delete category
if (isset($_GET["deleteID"])) {
    global $conn;

    $id = $_GET["deleteID"];

    $sql = "DELETE FROM movies WHERE movie_id='$id'";

    // execute query
    if ($conn->query($sql) === TRUE) {
        echo "Deleted successfully";
    } else {
        echo "Failed to delete category";
    }
}
