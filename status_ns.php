<?php
require_once("./db_connect.php");
global $link, $b;

$sql = "SELECT * FROM status";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_array()) {
    //     foreach($row as $a){
    //         $id = $row["id"];
    //         $st = $row["status"];
    //         $eta = $row["ETA"];
    //         $nu = $row["next_update"];
    //     };
    $row = $result->fetch_assoc();
    echo $row['ETA'];
        // echo 'Status ' . $st . ' ';
        // echo "id: " . $row["id"]. " - ETA: " . $row["ETA"]. " NU: " . $row["next_update"]. "<br>";
?><br \><?php
        // echo $id[1];
    }
// } else {
//     echo "0 results";
// }
// print_r($row = $result->fetch_assoc());
?><br \><?php
// print_r($row);
// foreach($row as $a){
            // echo $row["id"];
            // echo $row["status"];
            // echo $row["ETA"];
// };
//         };
// };
$link->close();

foreach ($_POST as $a => $c) { //start foreach
    $ftc = substr($ra, 0, 2);
    if($_POST[$ra] === 'on'){
        $statProxy = 1;
    } else {
        $statProxy = 0;
    }
    echo '$statProxy: ' . $statProxy;
}
?>
