<?php
session_start();
include('connection.php');
echo '<br>Home.php<br>';
echo $_SESSION['Nafn'];
echo '<br>';
echo $_SESSION['Netfang'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<br><a href="logout.php">Logout</a>
</body>
</html>