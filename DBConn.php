<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Database Connection</title>
</head>
	<body>

<?php
function connDB()
{
	global $mysqli;
	//connect to the database
	$mysqli = mysqli_connect("localhost", "root", "", "foodTruckDB");
	//if failed
	if(mysqli_connect_errno())
	{
		printf("Connection failed: %s\n ", mysqli_connect_error());
		exit();
	}
}

?>
</body>
</html>