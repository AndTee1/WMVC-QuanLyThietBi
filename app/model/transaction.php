<?php
	require '../common/connectDB.php';

	$sqlDevices_transactions = 'SELECT * FROM `device_transactions`';
	$listDevices_transactions = $conn ->prepare($sqlDevices_transactions);
	$listDevices_transactions -> execute();
?>