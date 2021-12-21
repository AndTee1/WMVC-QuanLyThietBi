<?php
	require '../common/connectDB.php';
	$sqlRoom = 'SELECT * FROM `classrooms`';
    $listRoom = $conn ->query($sqlRoom);
    $listRoom -> execute();
?>