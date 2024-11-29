<?php

require_once(dirname(__FILE__))."/../settings/db_connection.php";

function get_user_details_fxn($user_id){
    // sql connection 
    global $conn;

    $user_details = [];

    $sql = "SELECT * FROM movie_users WHERE user_id='$user_id'";

    $executed_query = $conn->query($sql);

    if ($executed_query) {
        $user_details = $executed_query->fetch_assoc();
    }

    return $user_details;
}

?>