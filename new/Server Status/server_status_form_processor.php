<?php
    require_once '../../db_connect.php';
    # Backend (admin.php)
    $submit = $_POST["submit"];
    # Put 'Up' or 'Down' into the status column in the DB
    # ... depending on which radio button is chosen
    if (isset($submit)) {
        if ($_POST["status"] == 'Up') {
        // if (isset($_POST["up"])) {
            $query = "UPDATE server_status SET status = 'up' WHERE id = 1;";
           // $query = "INSERT INTO server_status (status) VALUES ('up') WHERE id = 1";
        }
        elseif ($_POST["status"] == 'Down') {
            $query = "UPDATE server_status SET status = 'down' WHERE id = 1;";
        }
        else{
            echo 'ELSE!';
        }
    # code added
    mysqli_query($link, $query);
    }
?>
