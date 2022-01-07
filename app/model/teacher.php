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
<<<<<<< HEAD
=======

        };
    }
    
    function deleteData($id) {
        global $conn;
        $query = $conn->prepare ("DELETE FROM teachers WHERE id=" . $id);
        $query->execute();
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
    function getLastID(){
        global $conn;
        $idT=0;
        $query = $conn ->prepare("SELECT * FROM `teachers` WHERE id=(SELECT max(id) FROM `teachers`)");
        $query -> execute();
        foreach ($query as $id) {
           $idT= $id['id'];
        }
        return $idT+1;
    }
    function deTeacher(){
        require '../common/connectDB.php';
        
        $sql1 = 'SELECT * FROM `teachers`';
        $listTeacher = $conn->query($sql1);
        $listTeacher->execute();
        return $listTeacher;
        }
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294

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