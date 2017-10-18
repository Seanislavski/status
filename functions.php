<?php

function string_length($string){
    $maxlength = 130;
    if (strlen($string) > $maxlength) {
        echo "Over character limit of 130 characters";
    }
}

function get_status($id) {
    global $service;
    global $connection;
    $service = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM status WHERE id = {$id}"));
                    $firstPart = "<input type=\"checkbox\" ";
                    $lastPart = "data-toggle=\"toggle\" name=\"status$id\">";
                    if($service["status"] != 0){
                        echo $firstPart . "checked " . $lastPart;
                    } else {
                        echo $firstPart . $lastPart;
                    };
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
