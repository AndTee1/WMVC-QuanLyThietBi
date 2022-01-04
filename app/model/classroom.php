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
    function deleteData($id) {
        global $conn;
        $query = $conn->prepare ("DELETE FROM classrooms WHERE id=" . $id);
        $query->execute();
        return 1;
    }
    function searchData($keyword, $building) {
        global $conn;
        if( $building != "none") {
            $query = $conn->prepare("SELECT * FROM `classrooms` WHERE (`name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' ) and `building` = '$building'");
            $query->execute();
        }
        else if($keyword != "") {
            $query = $conn->prepare("SELECT * FROM `classrooms` WHERE `name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' ");
            $query->execute();
        }
        if ($keyword == "" && $building == "none" ){
            $sqlRoom = 'SELECT * FROM `classrooms`';
            $query = $conn ->prepare($sqlRoom);
            $query->execute();

        }
        $rowAll = $query->fetchAll();
        return $rowAll;
    }
?>