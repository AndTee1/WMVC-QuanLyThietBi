<?php
	require '../common/connectDB.php';
    
	$sqlRoom = 'SELECT * FROM `classrooms`';
    $listRoom = $conn ->query($sqlRoom);
    $listRoom -> execute();

    $name_r = $_POST['name_out'];
    $avatar_r = $_POST['avatar_out'];
    $description_r = $_POST['description_out'];
    $building_r = $_POST['building_out'];
    $updated_r = date("m/d/Y");
    $created_r = date("m/d/Y");

    $sql = "INSERT INTO `classrooms` (`name`,`avatar`,`description`,`building`, `updated`, `created`) 
            VALUES ('$name_r','$avatar_r','$description_r','$building_r','$updated_r','$created_r')";

    $conn -> exec($sql);
    $conn = null;
    // header('Location: ../view/classroom_add_complete_view.php');
?>