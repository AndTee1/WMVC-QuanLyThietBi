<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$myDB = 'device_transacts';
try {
	$conn = new PDO("mysql:host=$serverName;dbname=$myDB", $userName, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection Failed" . $e->getMessage();
}
