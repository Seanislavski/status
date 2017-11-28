<?php
    global $conn, $b;

function getDynamicData($column, $id){
    global $conn, $get_data;
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

function make_buttons($id){
    global $dyndat;
    // echo $dyndat;
        $name = "status" . $id;
    $fp = "<input type=\"radio\" ";
    $lp = "value=\"up\" data-toggle=\"toggle\" name=\"$name\" data-on-color=\"success\" data-off-color=\"danger\" class=\"bootstrap-switch, bootstrap-switch-handle-on\"> ";
    $fp2 = "<input type=\"radio\" ";
    $lp2 = "value=\"down\" data-toggle=\"toggle\" name=\"$name\">";
    if ($dyndat == 'up'){
        // getDynamicData('status', $id) == 'up'){
        $fpb = ` <?php (value == 'up')?'checked':''; ?> `;
        // echo $fp . $fpb . $lp . $fp2 . $fpb . $lp2;
        echo $fp . "checked " . $lp . $fp2 . $lp2;
    } elseif ($dyndat == 'down') {//if down
        echo $fp . $lp . $fp2 . "checked " . $lp2;
    } else {
        echo 'ERROR';
    };
}

function get_status($id){
    global $conn, $dyndat;
    $dyndat = getDynamicData('status', $id);
    // print_r(getDynamicData('status', $id));
    make_buttons($id);
}

    function updateStatus($input_name, $conn) {
        $status = "$_POST[$input_name]";
        $subby = substr($input_name, -2, -1);
        if ($subby == 's'){
            $lastchars = substr($input_name, -1);
        } else {
            $lastchars = substr($input_name, -2);
        }
        // echo 'post status: ' . $status . '<br>';
        $query = "UPDATE server_status SET status = '$status' WHERE id = $lastchars; ";
        mysqli_query($conn, $query);
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
        mysqli_query($conn, "UPDATE server_status SET ETA = \'$eta\' WHERE id = $id");
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
}

    function updateNU($id, $conn) {
        $nu = get_next_update($id);
        mysqli_query($conn, "UPDATE server_status SET NU = \'$nu\' WHERE id = $id");
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
?>
