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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Test Page </title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <span class="center" id="center">
        <ul>
        <?php
            while($service = mysqli_fetch_assoc($result)){
                //output data from each row
                // echo $row["id"] . " ";
                // echo $row["service_type"] . " ";
                // echo $row["service_name"] . "";
                // echo "<br />";
        ?>
        <li><?php if($service["service_type"] == 0){
            echo 'External';
        } else {
            echo 'Internal';
        }
        ; ?> : <?php
                    echo $service["service_name"];
                ?>
                :
                <?php
                    if($service["status"] == 1){
                        echo "Up";
                    } else {
                        echo "Down";
                    }
                ?> </li>
        <?php
            }
        ?>
        </ul>
    </span>
    <script src="./script/main.js"></script>
    <?php
    //release returned data
    mysqli_free_result($result);
    ?>
</body>
</html>

<?php
    // Close the connection
    mysqli_close($connection);
?>
