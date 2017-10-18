<?php
    $dbhost = "localhost";
    $dbuser = "sean_acls";
    $dbpass = "secretpassword";
    $dbname = "acls";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    //Test if connection occurred
    if(mysqli_connect_errno()) {
        die("Database connection failed: " .
            myqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
        );
    }

            $query = "SELECT * FROM status";
            $result = mysqli_query($connection, $query);
            //test if there was a query error
            if(!$result) {
                die("Database query failed.");
            }
            if($connection->connect_error){
                die("Connection failed: " . $connection->connect_error);
            }
        echo "Connected Successfully ";
?>
