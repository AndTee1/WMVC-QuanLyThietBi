<?php
	require '../common/connectDB.php';
	$sqlTeacher = 'SELECT * FROM `teachers`';
    $listTeacher = $conn ->query($sqlTeacher);
    $listTeacher -> execute();

?>