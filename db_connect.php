<?php
    $dbhost = "localhost";
    $dbuser = "sean_acls";
    $dbpass = "secretpassword";
    $dbname = "acls";
    // $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    //Test if connection occurred
    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
            myqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
        );
    }

            $query = "SELECT * FROM status";
            $result = mysqli_query($link, $query);
            //test if there was a query error
            if($link == false){
                //try to reconnect
                echo "hrumph.";
            } else {
                $test = "Connected Successfully";
            }
            if(!$result) {
                die("Database query failed.");
            } else {
                $test .= "Connected Successfully";
            }
            if($link->connect_error){
                die("Connection failed: " . $link->connect_error);
            } else {
                $test .= "Connected Successfully";
            }
?>
