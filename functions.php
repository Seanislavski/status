<?php
    global $conn, $b;

function getDynamicData($column, $id){
    global $conn, $row, $get_data;
    $query = "SELECT $column FROM server_status WHERE id = $id";
    $get_data = mysqli_query($conn, $query);
    if (!$get_data) {
        echo 'MySQL Error: ' . mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_assoc($get_data);
    // print_r($row[$column]);
    return $row[$column];
}

function get_status($id){
    global $conn;
    $dyndat = getDynamicData('status', $id);
    // print_r(getDynamicData('status', $id));
    $fp = "<input type=\"radio\" ";
    $lp = " data-toggle=\"toggle\" name=\"status$id\" data-on-color=\"success\" data-off-color=\"danger\"> ";
    $fp2 = "<input type=\"radio\" ";
    $lp2 = " data-toggle=\"toggle\" name=\"status$id\">";
    if ($dyndat == 'up'){
        // getDynamicData('status', $id) == 'up'){
        echo $fp . "checked value=\"on\"" . $lp . $fp2 . $lp2;
    } elseif ($dyndat == 'down') {//if down
        echo $fp . $lp . $fp2 . "checked value=\"off\"" . $lp2;
    } else {
        echo 'ERROR';
    };
}

    function updateStatus($input_name, $conn) {
        $status = $_POST[$input_name];
        if (substr($status, -2, -1) == 's'){
            $lastchars = substr($status, -1);
        } else {
            $lastchars = substr($status, -2);
        }
        mysqli_query($conn, "UPDATE server_status SET status = \'$status\' WHERE id = $lastchars");
    }

function get_eta($id) {
    global $conn, $row, $get_data;
    $ETA = getDynamicData('ETA', $id);
    if ($ETA){
        $trimmed = trim($ETA);
        $escaped = mysqli_real_escape_string($conn, $trimmed);
        echo $escaped;
    } else {
        echo 'N/A';
    }
}

    function updateETA($id, $conn) {
        $eta = get_eta($id);
        mysqli_query($conn, "UPDATE server_status SET ETA = $eta WHERE id = $id");
    }

function string_length($string){
    $maxlength = 130;
    if (strlen($string) > $maxlength) {
        echo "Over character limit of 130 characters";
    }
}





function loopstatus($conn) {
    $get_data = mysqli_query($conn, "SELECT * FROM server_status");
    while ($data = mysqli_fetch_array($get_data)) {
        echo '

        ';
    }
}



function get_next_update($id) {
    global $conn, $row, $get_data;
    $NU = getDynamicData('next_update', $id);
    if ($NU){
        $trimmed = trim($NU);
        $escaped = mysqli_real_escape_string($conn, $trimmed);
        echo $escaped;
    } else {
        echo 'N/A';
    }

    // global $service, $conn;
    // if(isset($service["next_update"])){
        // $value_one = trim($service["next_update"]);
        // $value = mysqli_real_escape_string($conn, $value_one);
        // if(
            // !isset($value) || empty($value)) {
            // echo "N/A";
        // } else {
            // echo $value;
        // };
    // } else {
        // echo "unset NU";
    // }
}

?>
