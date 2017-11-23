<?
# PHP
	# Enter your DB details
	$server = "localhost";
	$username = "sean_acls";
	$password = "secretpassword";
	$db = "server_status";

	$conn = new mysqli($server, $username, $password, $db);

	# Update function to get code DRY
	function updateStatus($input_name, $service, $conn) {
		$status = $_POST[$input_name];
		mysqli_query($conn, "UPDATE test SET status = '$status' WHERE service_name = '$service'");
	}

	# Update status field in DB
	if (isset($_POST["submit"])) {
		switch(true) {
			case $_POST["owa"]:
				updateStatus('owa', 'OWA', $conn);

			case $_POST["active_sync"]:
				updateStatus('active_sync', 'ActiveSync', $conn);

			# Simply add a case for each service
			# ...  the $_POST is based on the input NAME
		}
	}
?>

<!-- HTML -->
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
	<h1>OWA</h1>
	<label>Yes</label>
	<input type="radio" name="owa" value="yes"><br>
	<label>No</label>
	<input type="radio" name="owa" value="no"><br>

	<h1>ActiveSync</h1>
	<label>Yes</label>
	<input type="radio" name="active_sync" value="yes"><br>
	<label>No</label>
	<input type="radio" name="active_sync" value="no"><br>
	<input type="submit" value="Submit" name="submit">
</form>
