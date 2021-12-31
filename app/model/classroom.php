<?php
	require '../common/connectDB.php';
    
	$sqlRoom = 'SELECT * FROM `classrooms`';
    $listRoom = $conn ->query($sqlRoom);
    $listRoom -> execute();

    function add_room($name, $building, $description, $avatar, $created){
        require '../common/connectDB.php';
        if($name !="" && $building !="" && $description !="" && $avatar !=""){

            $sql = "INSERT IGNORE INTO `classrooms` (`name`,`avatar`,`description`,`building`, `updated`, `created`) 
                     VALUES ('$name','$avatar','$description','$building','','$created')";
            $insert = $conn -> prepare($sql);
            $insert->execute();
        };
    }
?>