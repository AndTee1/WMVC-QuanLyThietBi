<?php
	require '../common/connectDB.php';
	$sqlDeviceSearchADV = $conn->prepare("SELECT devices.id, devices.name, device_transactions.returned_date, 
        device_transactions.device_id FROM devices
        LEFT JOIN device_transactions ON devices.id = device_transactions.device_id ");
	$sqlDeviceSearchADV->execute();

    $result = $sqlDeviceSearchADV->setFetchMode(PDO::FETCH_ASSOC);
    $r = $sqlDeviceSearchADV->fetchAll() ;

	$sqlDevices = 'SELECT * FROM `devices`';
	$listDevices = $conn ->prepare($sqlDevices);
	$listDevices -> execute();

	
	
	function borrowDevice($device_id, $teacher, $classroom, $start_transaction, $end_transaction) {
		global $conn;
		$sql = "INSERT INTO  device_transactions (device_id,teacher_id,classroom_id, start_transaction_plan, end_transaction_plan) 
		VALUES ('$device_id','$teacher', ' $classroom ','$start_transaction' ,'$end_transaction')";
        $conn->exec($sql);
	}

?>

