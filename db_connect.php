<?php
    $dbhost = "localhost";
    $dbuser = "sean_acls";
    $dbpass = "secretpassword";
    $dbname = "acls";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    //Test if connection occurred
    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
            myqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
        );
    }
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
            $query = "SELECT * FROM server_status";
            $result = mysqli_query($conn, $query);
            //test if there was a query error
            if($conn == false){
                //try to reconnect
            } else {
                $test = "Connected Successfully";
            }
            if(!$result) {
                die("Database query failed.");
            } else {
                $test .= "Connected Successfully";
            }
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            } else {
                $test .= "Connected Successfully";
            }
?>
