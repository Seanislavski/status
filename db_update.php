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
global $status, $link, $b, $ftc, $num, $i;
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
};
    echo '<br> mysqli_affected_rows is ' . mysqli_affected_rows($link);
    $c = '';

// while ($row){
foreach ($_POST as $a => $c) { //start foreach
    global $b, $i;
    ?><hr \><?php
    echo '$num: ' . $num . '<br>';
    echo '$a: ' . $a;
        ?> <br \> <?php
    echo '$c: <pre>' . $c . '</pre>';
    ?> <br \> <?php
    echo '$i: ' . $i;
    $ra = str_replace(["-", "–"], '', $a);
    ?><br \><?php //here we go
    $ftc = substr($ra, 0, 2);
    $substr = (substr($a, 0, 2));
    if ($substr == 'ET'){
        $a = 'ETA';
    } elseif($substr = 'ne'){
        $a = 'next_update';
    } elseif($substr = 'st'){
        $a = 'status';
    } else {
        echo 'ERROR ALERT!';
    }
    echo '$ftc: ' . $ftc . '<br>';//Substring first two characters
    echo '$substr: ' . $substr . '<br>';
    ?><br \><?php
    if (trim($c) != 'N/A'){
        if (isset($_POST[$ra])) {
            $query = "";
            $query .=  "UPDATE server_status SET ";
            $post = mysqli_real_escape_string($link, $_POST[$ra]);
            $safe = trim($post);
            if ($ftc == 'ET'){
                $query .=  "ETA = \"$safe\" ";
                ?><br \><div class="gray"><?php
                echo 'ETA';
            } elseif($ftc == 'NU') {
                $query .= "next_update = '$safe'";
            } elseif($ftc == 'st') {
                if($_POST[$ra] === 'on'){
                    $statProxy = '\'up\'';
                } else {
                    $statProxy = '\'down\'';
                }
                $query .= "status = $statProxy ";
            } else {
                echo 'WE ARE HERE NOW';
            }
            echo '<br>';
            print_r($_POST);
            echo '<br>';
            $query .=  "WHERE id=$i;";
            $result = mysqli_query($link, $query);
            ?><br \><?php
            echo 'QUERY: ' . $query . '<br>';
            ?><br \><?php
            // echo '$statProxy ' . $statProxy;
            $query = '';
        } else {
            echo $a . ' ELSE';
            $ra = $_POST[$a];
            $ra = '';
        }//end
    }//end N/A if
    else {
        $c = trim($c);
        echo "query: " . $query;
        echo '<br> $i: ' . $i;
        $query = "UPDATE server_status SET $a = '$c' WHERE id=$i";
        echo "<br>query: " . $query . ' ELSE <-- <br>';
    }
    if (!$result) {
    die("Database query failed. " . mysqli_error($link) . $link->connect_error);
    } else { //end if, start else
        if ($query != ''){
            $result = mysqli_query($link, $query);
            echo 'Query: ' . $query . '<br>';
            echo "Successfully Submitted Query";
        } //end if
    }//end else
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
    if($result != 'false'){
        mysqli_free_result($result);
    }
 ?>
</html>
<?php require_once("./db_close.php"); //5 ?>
