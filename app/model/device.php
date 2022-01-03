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


	function searchGiveBackBook($equipment, $teacher, $classroom){  
        require '../common/connectDB.php';
        $sqlDevicesGiveBackBook = "SELECT device_transactions.id, devices.name AS deviceName, teachers.name AS teacherName, classrooms.name AS classroomName,device_transactions.returned_date 
                                    FROM device_transactions 
                                    CROSS JOIN devices ON device_transactions.device_id = devices.id 
                                    CROSS JOIN teachers ON device_transactions.teacher_id = teachers.id 
                                    CROSS JOIN classrooms ON device_transactions.classroom_id = classrooms.id
                                    WHERE devices.name = '$equipment' AND teachers.name = '$teacher' AND classrooms.name = '$classroom'";
        $listDeviceGiveBack = $conn ->prepare($sqlDevicesGiveBackBook);     
        $listDeviceGiveBack->execute(); 
        $result = $listDeviceGiveBack->fetchAll(PDO::FETCH_OBJ);
        
        return $result;
    }                       
      
    function givebackbook($id, $time){
        require '../common/connectDB.php';
        $sql = "UPDATE `device_transactions` SET `returned_date`='$time' WHERE id = '$id'";
        $deviceName = $conn -> prepare($sql);
        $deviceName -> execute();
    }

?>

