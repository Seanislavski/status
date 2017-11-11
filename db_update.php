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
global $link;
global $b;
global $ftc;
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
};
    $i = 1;
    $b = 1;
        ?><br \><?php
        echo 'mysqli_affected_rows is ' . mysqli_affected_rows($link);


foreach ($_POST as $a => $c) { //start foreach
    global $b;
    ?><hr \><?php
    echo '$a: ' . $a;
        ?> <br \> <?php
    echo '$c: ' . $c;
    ?> <br \> <?php
    echo '$i: ' . $i;
    $ra = str_replace(["-", "–"], '', $a);
    ?><br \><?php //here we go
    $ftc = substr($ra, 0, 2);
    echo '$ftc: ' . $ftc;//Substring first two characters
    // print_r($_POST[$ra]);//looking for ETAOWA (example) in POST
    ?><br \><?php
    if (isset($_POST[$ra])) {
        $test = $_POST[$ra];
        if($test === ''){
            echo 'test is nuffin';
        }
        echo 'test: ' . $test;
        ?><br \><?php
        echo '$ra' . ': ';
        echo $ra;
        $query = "";
        $query .=  "UPDATE status SET ";
        if ($ftc == 'ET'){
            $query .=  "ETA = '$_POST[$ra]' ";
            ?><br \><div class="gray"><?php
            echo 'ETA';
            ?></div><?php
        } elseif($ftc == 'NU') {
            $query .= "next_update = '$_POST[$ra]' ";
            ?><br \><?php
            echo 'NEXT_UPDATE';
        } elseif($ftc == 'st') {
            ?><br \><?php
            echo 'STATUS';
            if($_POST[$ra] === 'on'){
                $statProxy = 1;
            } else {
                $statProxy = 0;
            }
            $query .= "status = $statProxy ";
        } else {
            echo 'WE ARE HERE NOW';
            // $query .= "status = '$_POST[$ra]' ";
            //
        }
        $query .=  "WHERE id=$b;";
        $result = mysqli_query($link, $query);
        ?><br \><?php
        echo 'QUERY: ' . $query;
        ?><br \><?php
        echo '$statProxy ' . $statProxy;
        $query = '';
    } else {
        echo $a . ' ELSE';
        $ra = $_POST[$a];
        $ra = '';
    }//end
    ?><br \><?php
    if (!$result) {
    die("Database query failed. " . mysqli_error($link) . $link->connect_error);
    } else { //end if, start else
        if ($query != ''){
            $result = mysqli_query($link, $query);
            echo "Successfully Submitted Query";
        } //end if
        if($ftc == 'NU'){
            $b++;
        } //end if
    } //end else
    // if ($i % 3 === 0){
        // $b++;
    // } // end if
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
    if($result != ''){
        mysqli_free_result($result);
    }
 ?>
</html>
<?php require_once("./db_close.php"); //5 ?>
