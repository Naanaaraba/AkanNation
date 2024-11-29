<?php

// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");


if (isset($_POST["addCategory"])) {
    // sql connection
    global $conn;
    // get form data
    $category = mysqli_real_escape_string($conn, trim($_POST["category"]));

    // stop execution if category is empty
    if (empty($category)) {
        return;
    }

    $sql = "INSERT INTO category(cat_name) VALUES ('$category')";

    // execute query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success');</script>";
        header("Location:../admin/add_category.php");
    } else {
        echo "<script>alert('Failed to add category');</script>";
        header("Location:../admin/add_category.php");
    }
}

// update category
if (isset($_POST["updateCategory"]) && isset($_POST["cat_id"])) {
    // sql connection
    global $conn;
    // get form data
    $category = mysqli_real_escape_string($conn, trim($_POST["category"]));
    $cat_id = $_POST["cat_id"];

    // stop execution if category is empty
    if (empty($category)) {
        return;
    }

    $sql = "UPDATE category SET cat_name='$category' WHERE cat_id='$cat_id'";

    // execute query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Success');</script>";
        header("Location:../admin/add_category.php");
    } else {
        echo "<script>alert('Failed to add category');</script>";
        header("Location:../admin/add_category.php");
    }
}


// delete category
if (isset($_GET["deleteID"])) {
    global $conn;

    $id = $_GET["deleteID"];

    $sql = "DELETE FROM category WHERE cat_id='$id'";

    // execute query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Deleted Successfully');</script>";
        header("Location:../admin/add_category.php");
    } else {
        echo "<script>alert('Failed to delete category');</script>";
        header("Location:../admin/add_category.php");
    }
}
