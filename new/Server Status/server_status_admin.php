<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Server Status | Admin</title>
</head>
<body>
	<form action="server_status_form_processor.php" method="POST">
	  <input type="radio" name="status" value="Up"> Up<br>
	  <input type="radio" name="status" value="Down"> Down<br>
	  <input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
