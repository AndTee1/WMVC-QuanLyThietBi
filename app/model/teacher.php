<?php
	require '../common/connectDB.php';
   
	$sqlTeacher = 'SELECT * FROM `teachers`';
    $listTeacher = $conn ->query($sqlTeacher);
    $listTeacher -> execute();
    function add( $name,$specialized,$degree,$avata,$description,$created){
        require '../common/connectDB.php';
        if($name!=""&& $specialized !=""&&$degree!=""&&$description!=""&&$avata!=""){
            
            $sql="INSERT INTO `teachers`(`name`, `avatar`, `description`, `specialized`, `degree`, `updated`, `created`) VALUES ('$name','$avata','$description','$specialized','$degree','','$created')";
            $success = $conn -> query($sql);
            $success->execute();

        };
    }
        
?>