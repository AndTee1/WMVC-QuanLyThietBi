<?php
	require '../common/connectDB.php';
	$sqlDeviceSearchADV = $conn->prepare("SELECT devices.id, devices.name, device_transactions.returned_date, 
        device_transactions.device_id FROM devices
        LEFT JOIN device_transactions ON devices.id = device_transactions.device_id ");
	$sqlDeviceSearchADV->execute();
    	$result = $sqlDeviceSearchADV->setFetchMode(PDO::FETCH_ASSOC);
    	$r = $sqlDeviceSearchADV->fetchAll() ;
<<<<<<< HEAD
=======


	$sqlDevices = 'SELECT * FROM `devices`';
	$listDevices = $conn ->prepare($sqlDevices);
	$listDevices -> execute();
>>>>>>> 622986d (fix add UI Borrow_device)
?>
