<?php
	require '../common/connectDB.php';
    
	$sqlRoom = 'SELECT * FROM `classrooms`';
    $listRoom = $conn ->query($sqlRoom);
    $listRoom -> execute();

    function add_room($name, $building, $description, $avatar, $updated, $created){
        require '../common/connectDB.php';
        if($name !="" && $building !="" && $description !="" && $avatar !=""){

            $sql = "INSERT INTO `classrooms` (`name`,`avatar`,`description`,`building`, `updated`, `created`) 
                     VALUES ('$name','$avatar','$description','$building','$updated','$created')";
            $succ = $conn -> query($sql);
            $succ->execute();
        };
    }
?>