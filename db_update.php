<?php require_once("./db_connect.php"); ?>
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
        $query = "";
        $query .=  "UPDATE status SET ";
        $i = 1;
            ;
        // if (isset($_POST['status']) && $_POST['status'] == 'true') {
        // echo "HALALOO";// Then insert something into the database as normal
        // } else {
        //     echo "HUBUBUB";
        // };

foreach ($_POST as $a => $c) {
    echo 'a: ' . $a;
    ?><br \><?php
    echo 'c: ' . $c;
    ?><br \><?php //here we go
    foreach($_POST as $q => $w){
    if ($w == "on"){
        $query .= " status = 1";
    } else {
        $query .= " status = 0";
    }
    $query .= " WHERE id = {$i};";
    $result = mysqli_query($connection, $query);
    if ($result) {
    echo "Success!";
    } else {
        die("Database query failed. " . mysqli_error($connection) . $connection->connect_error);
        }
    }}
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
<?php require_once("./db_close.php"); ?>
</html>
