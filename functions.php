<?php
    global $link, $b;

function string_length($string){
    $maxlength = 130;
    if (strlen($string) > $maxlength) {
        echo "Over character limit of 130 characters";
    }
}

function get_status() {
    global $service, $link, $ra, $ftc, $b;
    $db_selected = mysqli_select_db($link, 'acls');
    $t = $GLOBALS['b'];
        $i = 1;
            $b = 1;

    foreach ($_POST as $a => $c){
        $i++;
    }
    $quer = "SELECT status FROM status WHERE id = $i";
    if($quer )
    $sql = mysqli_real_escape_string($link, $quer);
    $safesql = $link->prepare($sql);
    $result = mysqli_query($link , $quer);
    // mysqli::query($sql [$resultmode = MYSQLI_STORE_RESULT ], acls);
    print_r($result);
    if (isset($result)) {
        // echo $result . ' <-HERE IT IS (supposed to be)';
        echo 'Hoo-Rah';
    } else {
        echo '$result: ' . $result;
    }
    $service = mysqli_fetch_assoc($result); //error
    // $row = mysqli_fetch_row($result);
    // $total_records = $row[0];
    // echo '$service = ' . $service;
    // echo 'mysqli_fetch_assoc($sql) = ' . $service;
    // var_dump($sql);
    echo '$sql = ' . $sql;
    ?><br \><?php
    echo '$b = ' . $b;
    ?><br \><?php
    echo '$t = ' . $t;
    ?><br \><?php
    echo '$ra = ' . $ra;
    ?><br \><?php
    echo '$ftc = ' . $ftc;
    mysqli_free_result($result);
    if($link == false){
        echo "Aw shit"
;    }
    if($link->connect_error) {
        echo 'HERE LIES THINE PROBLEM: ';
        echo 'you\'re hitting the else';
        ?><br \><?php
        print_r($link);
    } else {
        $firstPart = "<input type=\"checkbox\" ";
        $lastPart = "data-toggle=\"toggle\" name=\"status$b\">";
        if($service["status"] != 0){ //if on
            echo $firstPart . "checked " . $lastPart;
        } else { //if off
            echo $firstPart . $lastPart;
        };
    }
}

function get_eta() {
    global $service, $link;
    if(isset($service["ETA"])){
        $value_one = trim($service["ETA"]);
        $value = mysqli_real_escape_string($link, $value_one);
        if(
            !isset($value) || empty($value)) {
            echo "N/A";
        } else {
            echo $value;
        };
    } else {
        echo "unset ETA";
    }
}

function get_next_update() {
    global $service, $link;
    if(isset($service["next_update"])){
        $value_one = trim($service["next_update"]);
        $value = mysqli_real_escape_string($link, $value_one);
        if(
            !isset($value) || empty($value)) {
            echo "N/A";
        } else {
            echo $value;
        };
    } else {
        echo "unset NU";
    }
}

?>
