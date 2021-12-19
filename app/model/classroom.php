<?php
	require '../common/connectDB.php';
	// search
	$sqlRoom = 'SELECT * FROM `classrooms`';
    $listRoom = $conn ->query($sqlRoom);
    $listRoom -> execute();
?>