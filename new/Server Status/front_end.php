<?php
	require_once '../../db_connect.php';

	# Get server status from DB
    function getStatus($id, $link) {
        $query = "SELECT status FROM server_status WHERE id = $id";
        $get_status = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($get_status);
        return $row['status'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Server Status</title>
</head>
<body>
	<h1>
	   Status is: <?php
        echo getStatus(1, $link);
       ?>
	</h1>
</body>
</html>
