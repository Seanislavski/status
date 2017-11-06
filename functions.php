<?php
    global $connection;

function string_length($string){
    $maxlength = 130;
    if (strlen($string) > $maxlength) {
        echo "Over character limit of 130 characters";
    }
}

function get_status() {
    global $service;
    global $connection;
    global $b;
    echo $b;
    $quer = "SELECT status FROM status WHERE id = {$b}";
    $sql = mysqli_real_escape_string($connection, $quer);
        $result = mysqli_query($connection, $sql);
        $service = mysqli_fetch_assoc($sql);

    if($connection->connect_errno) {
        $firstPart = "<input type=\"checkbox\" ";
        $lastPart = "data-toggle=\"toggle\" name=\"status$b\">";

        if($service["status"] != 0){ //if on
            echo $firstPart . "checked " . $lastPart;

        } else { //if off
            echo $firstPart . $lastPart;
        };
    } else {
        //?? somehow let me know
        echo 'HERE LIES THINE PROBLEM';
        ?><br \><?php
        print_r($connection);
        ?><br \><?php
        echo $queryTest;
        ?><br \><?php

    }
    // print_r($result);


}

function get_eta() {
    global $service;
    global $connection;
    $value_one = trim($service["ETA"]);
    $value = mysqli_real_escape_string($connection, $value_one);
    if(
        !isset($value) || empty($value)) {
        echo "N/A";
    } else {
        echo $value;
    };
}

function get_next_update() {
    global $service;
    global $connection;
    $value_one = trim($service["next_update"]);
    $value = mysqli_real_escape_string($connection, $value_one);
    if(
        !isset($value) || empty($value)) {
        echo "N/A";
    } else {
        echo $value;
    };
}


?>
