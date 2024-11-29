<?php
// include database connection file
require_once(dirname(__FILE__) . "/../settings/db_connection.php");

function get_categories_fxn()
{
    // sql connection
    global $conn;

    // list to hold query results
    $results = [];

    // sql query to fetch the categories
    $sql = "SELECT * FROM category";

    // execute query
    $execute_query = $conn->query($sql);

    if ($execute_query) {
        $results = $execute_query->fetch_all(MYSQLI_ASSOC);
    }

    return $results;
}
