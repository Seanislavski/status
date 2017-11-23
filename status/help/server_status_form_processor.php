<?php 
    
    require_once 'db.php';
    
    # Backend (admin.php)
    $up = $_POST["up"];
    $down = $_POST["down"];
    $submit = $_POST["submit"];

    # Put 'Up' or 'Down' into the status column in the DB 
    # ... depending on which radio button is chosen
    if (isset($submit)) {
        if (isset($up)) {
            $query = "INSERT INTO server_status (status) VALUES ('$up') WHERE id = 1";
        }
        elseif (isset($down)) {
            $query = "INSERT INTO server_status (status) VALUES ('$down') WHERE id = 1";
        }
    }
?>