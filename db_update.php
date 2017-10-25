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

require_once("./set_vars.php");



foreach ($_POST as $a => $c) {

    echo 'ID: ' . $i;
    ?> <br \> <?php
    echo 'Row: ' . $a;
    ?><br \><?php //here we go

    echo 'Affected Rows: ';
    echo mysqli_affected_rows($connection);
    ?><br \><?php
    // print_r($connection);
    if (mysqli_affected_rows($connection) >= 0) //if there is a change
    { //execute this query
        $w = "";
        $q = "";
        // foreach($_POST as $q => $w){
            // echo $w;

            // switch($w){
                // case 'on':
                    // echo $query;
                    //do something
                // break;
            // }
            $query = "";
            $query .=  "UPDATE status SET ";
            if ($w != '' && $i <= 12 && $i > 0){
                $query .= " status=1";
echo "HERE ->";
echo ' (ID #' . $i . ')';
            } else {
                $query .= " status=0";
            }
            $query .= " WHERE id={$i};";
            $i++;
    // echo $query;
    // echo '<br>';
            $result = mysqli_query($connection, $query);
            $query='';

    } else {
        echo 'NO CHANGE! ';
    }

    ?><br \><?php

    if (!$result) {
    die("Database query failed. " . mysqli_error($connection) . $connection->connect_error);
    } else {
            // $result = mysqli_query($connection, $query);
        echo "Success!";
        ?> <br \> <?php
        }
    }
    ?> <br \> <?php
    // echo $i;
// echo $_POST['status' . $id];
//         $query =  "UPDATE status SET ";
//         $query .= "status = " . $_POST['status' . $id];
//         $query .= "ETA = " . $_POST['status' . $id];
//         $query .= "next_update = '{$next_update}' ";
//         $query .= "WHERE id = {$id}";
// $result = mysqli_query($connection, $query);
//     if ($result && mysqli_affected_rows($connection) == 1) {
//         // Success
//         // redirect_to("somepage.php");
//         echo "Success!";
//     } else {
//         // Failure
//         // $message = "Subject update failed";
//         die("Database query failed. " . mysqli_error($connection) . $connection->connect_error);
//     }
            ?><br \><?php


    unset($a);
    unset($b);
    unset($c);

// }
// $id = 1;
// while ($id <= 12){
// echo $id;
// get_status($id);
// echo $_POST[$id] . ': ' . $_POST['ETA-OWA'];
// // echo ': '          . $_POST['NU-OWA'];
 ?>
<br \>
<?php
// $id++;
// }

// echo $status["status"];
// if (isset($_POST["status"])){
//     $status = $_POST["status"];
// };
// if (isset($_POST['ETA'])){
//     $ETA = $_POST["ETA"];
// };

// if (isset($_POST['next_update'])){
//     $next_update = $_POST["next_update"];
// };

// if (isset($_POST['id'])){
//     $id = $_POST["id"];
// };

// //query
// if ($_POST['status'] || $_POST['ETA'] || $_POST['next_update'] || $_POST['id'] ){
//         $query =  "UPDATE status SET ";
//         $query .= "status = {
//      $status = $_POST[status];
//         }
//     }, ";
//         $query .= "ETA = '{$ETA}', ";
//         $query .= "next_update = '{$next_update}' ";
//         $query .= "WHERE id = {$id}";
// // $result = mysqli_query($connection, $query);

// echo $result;

// if ($result) {
//     echo "Success!";
// } else {
//     die ("Database query failed. " . mysqli_error($connection));
// }
// }
// while ($status = mysqli_fetch_assoc($result)) {
//     echo $status["ETA"] . " (" . $status["id"] . ")";
// }

 ?>

</body>
<!-- <?php  //release return data
    $i = 0;
    mysqli_free_result($result);
 ?> -->
</html>
<?php require_once("./db_close.php"); //5 ?>
