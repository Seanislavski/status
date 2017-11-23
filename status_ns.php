<?php
require_once("./db_connect.php");
global $link, $b, $c;

$sql = "SELECT * FROM status";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_array();
    foreach ($row as $a => $c){
        //output data of each row
        while($row = $result->fetch_assoc()) {
            foreach($row as $a){
                // print_r($row);
                $id = $row["id"];
                $st = $row["status"];
                $eta = $row["ETA"];
                $nu = $row["next_update"];
            };

            echo 'ID: ' . $id . '<br>';
            echo 'Status: ' . $st . '<br>';
            echo 'ETA: ' . $eta . '<br>';
            echo 'Next Update: ' . $nu . '<br>';
        // $row = $result->fetch_assoc();
        // echo '$a: ' . $a;
        // echo '$c: ' . $c;
        // echo 'ID: ' . $row['id'];
        // echo 'Status: ' . $row['status'];
        // echo 'ETA: ' . $row['ETA'];
        // echo 'Next Update: ' . $row['next_update'];
            echo 'variable "row": ';
            print_r($row);
            ?><br \><?php
            ?><br \><?php


            // echo 'Status ' . $st . ' ';
            // echo "id: " . $row["id"]. " - ETA: " . $row["ETA"]. " NU: " . $row["next_update"]. "<br>";
            // echo $id[1];
        }
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
// $link->close();

foreach ($_POST as $a => $c) { //start foreach
    $ftc = substr($ra, 0, 2);
    if($_POST[$ra] === 'on'){
        $statProxy = 1;
    } else {
        $statProxy = 0;
    }
    echo '$statProxy: ' . $statProxy;
};
};
?>
