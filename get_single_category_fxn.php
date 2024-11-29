<?php
// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");


function get_single_category_fxn($cat_id)
{
    // sql connection 
    global $conn;

    $category = [];

    $sql = "SELECT * FROM category WHERE cat_id='$cat_id'";

    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $category = $executed_query->fetch_assoc();
    }

    return $category;
}


