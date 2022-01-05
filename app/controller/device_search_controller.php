<?php
	require '../common/connectDB.php';
    require '../model/device.php';
	
	if(isset($_GET['delete']) && isset($_GET['id'])){
		deleteDevice($_GET['id']);
		header('location:../view/device_search_view.php');
	}

	$resultSearch = searchDevice();

	
?>