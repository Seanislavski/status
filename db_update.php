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
    $b = 1;
// require_once("./set_vars.php");

        ?><br \><?php

        echo 'mysqli_affected_rows is ' . mysqli_affected_rows($connection);
        ?><br \><?php

foreach ($_POST as $a => $c) { //start foreach
    ?><br \><?php
    echo 'ID: ' . $i;
    ?> <br \> <?php
    echo 'ID group: ' . $b;
    ?> <br \> <?php
    echo 'Row: ' . $a;
    $ra = str_replace(["-", "–"], '', $a);
    ?><br \><?php
    echo 'ra: ' . $ra;
    ?><br \><?php //here we go
    $ftc = substr($ra, 0, 2);
    echo 'Substring first two characters: ' . $ftc;
    ?><br \><?php //here we go
    //Test create | Set-Vars dynamically
    print_r($_POST[$ra]);//looking for ETAOWA (example) in POST
    if (isset($_POST[$ra])) {
        $test = $_POST[$ra];
        echo 'test: ' . $test;
        ?><br \><?php
        echo '$ra' . ': ';
        echo $ra;
        ?><br \><?php
        $query = "";
        $query .=  "UPDATE status SET ";
        if ($ftc == 'ET'){
            $query .=  "ETA = '$_POST[$ra]' ";
        } elseif($ftc == 'NU') {
            $query .= "next_update = '$_POST[$ra]' ";
        } elseif($ftc == 'st') {
            if($_POST[$ra] === 'on'){
                $statProxy = 1;
            } else {
                $statProxy = 0;
            }
            $query .= "status = $statProxy ";//coming out as 'on' needs to be 1
        } else {
            $query .= "status = '$_POST[$ra]' ";
            //
        }
        $query .=  "WHERE id=$b;";
        $result = mysqli_query($connection, $query);
        echo 'QUERY: ' . $query;
        $query = '';
    } else {
        echo $a . ' ELSE';
        $ra = $_POST[$a];
        $ra = '';
    }//end
    ?><br \><?php
    echo 'QUERY: ' . $query;
    ?><br \><?php
    echo 'ra: ' . $ra;
    ?><br \><?php
    echo "Result: ";
    print_r($result);
    ?><br \><?php
    if (!$result) {
    die("Database query failed. " . mysqli_error($connection) . $connection->connect_error);
    } else { //end if, start else
        $result = mysqli_query($connection, $query);
        echo "Successfully Submitted Query";
        ?> <br \> <?php
        } //end else
    if (3 % ($i - 1 //this only fixes the first query change
        //stop 'division by 0' error here with if statement?
        ) !=0){
        $b++;
    }
    $i++;
} //end foreach

    ?> <br \> <?php
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
