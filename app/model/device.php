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
?>

