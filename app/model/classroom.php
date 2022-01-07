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
    function deleteDataC($id) {
        global $conn;
        $query = $conn->prepare ("DELETE FROM classrooms WHERE id=" . $id);
        $query->execute();
        return 1;
    }
    function searchDataC($keyword, $building) {
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
    
    function get_room($id){
<<<<<<< HEAD
        require '../common/connectDB.php';
        if($id !=""){
=======
        
        require '../common/connectDB.php';
        if($id !=NULL){
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
            $sql = "SELECT * FROM `classrooms` WHERE id=$id ";
            $getData = $conn -> prepare($sql);
            $getData->execute();
            $getData->setFetchMode(PDO::FETCH_ASSOC); 
            $resultUser = $getData->fetchAll();
           return $resultUser;
        };
    }
    function edit_room($id ,$name, $building, $description, $avatar, $update){
        require '../common/connectDB.php';
<<<<<<< HEAD
        if($id !=""){
=======
        if($id !=NULL){
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
            $sql = "UPDATE `classrooms` SET `name`='$name',`avatar`='$avatar',`description`='$description',`building`='$building',`updated`='$update',`created`='' WHERE id=$id";            $update = $conn -> prepare($sql);
            $update->execute();
        };
    }
<<<<<<< HEAD
=======
    function getLastIDR(){
        global $conn;
        $idT=0;
        $query = $conn ->prepare("SELECT * FROM `classrooms` WHERE id=(SELECT max(id) FROM `classrooms`)");
        $query -> execute();
        foreach ($query as $id) {
           $idT= $id['id'];
        }
        return $idT+1;
    }
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
?>