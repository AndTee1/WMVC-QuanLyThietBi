<?php
	require '../common/connectDB.php';
   
	$sqlTeacher = 'SELECT * FROM `teachers`';
    $listTeacher = $conn ->query($sqlTeacher);
    $listTeacher -> execute();
    function add( $name,$specialized,$degree,$avata,$description,$created){
        global $conn;
        if($name!=""&& $specialized !=""&&$degree!=""&&$description!=""&&$avata!=""){
            $sql="INSERT INTO `teachers`(`name`, `avatar`, `description`, `specialized`, `degree`, `updated`, `created`) VALUES ('$name','$avata','$description','$specialized','$degree','','$created')";
            $success = $conn -> prepare($sql);
            $success->execute();

        };
    }
    
    function deleteData($id) {
        global $conn;
        $query = $conn->prepare ("DELETE FROM teachers WHERE id=" . $id);
        $query->execute();
        return 1;
    }
    function searchData($keyword, $specialized) {
        global $conn;
        if( $specialized != "") {
            $query = $conn->prepare("SELECT * FROM `teachers` WHERE (`name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' or `degree` LIKE '%$keyword%') and `specialized` = '$specialized'");
            $query->execute();
        }else {
            $query = $conn->prepare("SELECT * FROM `teachers` WHERE `name` LIKE '%$keyword%' or `description` LIKE '%$keyword%' or `degree` LIKE '%$keyword%'");
            $query->execute();
        }
        $rowAll = $query->fetchAll();
        return $rowAll;
    }
?>