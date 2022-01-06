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

	function searchDevice()
	{
		require '../common/connectDB.php';
		$keyword = '';
		$status = '';
		if(isset($_GET['keyword'])){
			$keyword = $_GET['keyword'];
		}
		if(isset($_GET['status'])){
			$status = $_GET['status'];
		}
		$sqlSearchString = '';
		if ($status == '') {
			$sqlSearchString = "select
			IF((dt.device_id IS NULL OR (dt.returned_date IS NOT NULL AND dt.device_id IS NOT NULL)),1,2) as status,
			 d.id, d.name, dt.returned_date, 
			dt.device_id FROM devices d
			LEFT JOIN device_transactions dt ON d.id = dt.device_id
			where name like '%$keyword%'";
		}
		 else if ($status == 1) {
			$sqlSearchString = "select 1 as status, d.id, d.name, dt.returned_date, 
			dt.device_id FROM devices d
			LEFT JOIN device_transactions dt ON d.id = dt.device_id where 
			(dt.device_id IS NULL OR (dt.returned_date IS NOT NULL AND dt.device_id IS NOT NULL)) AND
			d.name like '%$keyword%' ";
		} 
		else if ($status == 2) {
			$sqlSearchString = "select 2 as status, d.id, d.name, dt.returned_date, 
			dt.device_id FROM devices d
			LEFT JOIN device_transactions dt ON d.id = dt.device_id where 
			dt.device_id IS NOT NULL AND dt.returned_date IS NULL AND
			d.name like '%$keyword%' ";
		}
		$sqlDeviceSearch = $conn->prepare($sqlSearchString);
		$sqlDeviceSearch->execute();
		$resultSearch = $sqlDeviceSearch->fetchAll() ;
		return $resultSearch;
	}

	function deleteDevice($id){
		global $conn;
        $query = $conn->prepare ("DELETE FROM devices WHERE id=" . $id . ";DELETE FROM device_transactions WHERE device_id=" . $id);
        $query->execute();
        return 1;
	}


	function addDevice($name, $description, $avatar, $created){
		global $conn;
        if($name !="" && $description !="" && $avatar !=""){

            $sql = "INSERT INTO `devices` (`name`,`avatar`,`description`, `created`) VALUES ('$name','$avatar','$description','$created')";
            $add = $conn -> prepare($sql);
            $add->execute();
        };
    }
	
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
                                    ";
        if($equipment == '' && $teacher == '' && $classroom == ''){
            $sqlDevicesGiveBackBook1 = "";
        } else if($equipment != '' && $teacher == '' && $classroom == ''){
            $sqlDevicesGiveBackBook1 = "WHERE devices.name = '$equipment'";
        } else if($equipment == '' && $teacher != '' && $classroom == ''){
            $sqlDevicesGiveBackBook1 = "WHERE teachers.name = '$teacher'";
        } else if($equipment == '' && $teacher == '' && $classroom != ''){
            $sqlDevicesGiveBackBook1 = "WHERE classrooms.name = '$classroom'";
        } else if($equipment != '' && $teacher != '' && $classroom == ''){
            $sqlDevicesGiveBackBook1 = "WHERE devices.name = '$equipment' AND teachers.name = '$teacher'";
        }else if($equipment != '' && $teacher == '' && $classroom != ''){
            $sqlDevicesGiveBackBook1 = "WHERE devices.name = '$equipment' AND classrooms.name = '$classroom'";
        }else if($equipment == '' && $teacher != '' && $classroom != ''){
            $sqlDevicesGiveBackBook1 = "WHERE teachers.name = '$teacher' AND classrooms.name = '$classroom'";
        } else {
            $sqlDevicesGiveBackBook1 = "WHERE devices.name = '$equipment' AND teachers.name = '$teacher' AND classrooms.name = '$classroom'";
        }
        
        $sqlDevicesGiveBackBook .= $sqlDevicesGiveBackBook1;                                
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

	function findDevice($id){
        require '../common/connectDB.php';
        if($id !=""){
            $sql = "SELECT * FROM `device` WHERE id=$id ";
            $ata = $conn -> prepare($sql);
            $data->execute();
            $data->setFetchMode(PDO::FETCH_ASSOC); 
            $result = $data->fetchAll();
           return $result;
        };
    }
    function editDevice($id ,$name, $description, $avatar, $update){
        require '../common/connectDB.php';
        if($id !=""){
            $sql = "UPDATE `device` SET `name`='$name',`avatar`='$avatar',`description`='$description',`updated`='$update',`created`='' WHERE id=$id";  
			$edit = $conn -> prepare($sql);
            $edit->execute();
        };
    }
?>

