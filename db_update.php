<?php require_once("./db_connect.php"); //1 ?>
<?php require_once("./functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Processing</title>
</head>
<body>
    <h1>External Services</h1>
<?php
global $status;
global $connection;

if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
};
// print_r($_POST)['id']; //displays a long string
    $i = 1;

// require_once("./set_vars.php");

        ?><br \><?php

        echo 'mysqli_affected_rows is ' . mysqli_affected_rows($connection);
        ?><br \><?php

foreach ($_POST as $a => $c) {

    echo 'ID: ' . $i;
    ?> <br \> <?php
    echo 'Row: ' . $a;
    ?><br \><?php //here we go
    $ra = str_replace(["-", "–"], '', $a);

    //Test create | Set-Vars dynamically
    if (isset($_POST[$a])) {
        $ra = $_POST[$a];
        echo '$ra' . '(IF): ';
        echo $ra;
    } else {
        echo $a . ' ELSE';
        $ra = $_POST[$a];
        $ra = '';}
//end
    ?><br \><?php

    if (!$result) {
    die("Database query failed. " . mysqli_error($connection) . $connection->connect_error);
    } else {
            // $result = mysqli_query($connection, $query);
        echo "Successfully Submitted Query";
        ?> <br \> <?php
        }
    }
    ?> <br \> <?php

            ?><br \><?php


    unset($a);
    unset($b);
    unset($c);

 ?>
<br \>

</body>
<?php  //release return data
    $i = 0;
    mysqli_free_result($result);
 ?>
</html>
<?php require_once("./db_close.php"); //5 ?>
