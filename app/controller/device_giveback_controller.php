<?php
    require '../model/device.php';
    require '../model/teacher.php';
    require '../model/classroom.php';
    
    $equipment = $teacher = $classroom = "";
    $equipmentErr = $teacherErr = $classroomErr = "";
    $idgive=$idgive2=$timegive="";
    $count = 0;
    $i = 1;
    // error_reporting(0);

    if (isset($_POST["search"])) {
        // error_reporting(0);

        if (empty($_POST["equipment"])) {
            $equipmentErr = "Hãy nhập tên thiết bị";
        } 
        else {
            if($listDevices->rowCount()>0) 
            {
                $result=$listDevices->fetchAll(PDO::FETCH_OBJ);
                for ($i = 0; $i <  count($result); $i++)  
                {
                    if($_POST["equipment"] != $result[$i]->name){
                        $count;
                    } else {
                        $count++;
                    }
                }
                if($count == 1){
                    $equipment = ($_POST["equipment"]);
                } else {
                    $equipmentErr = "Tên thiết bị sai *";
                }
                
            }
        }
                    
        if($_POST['teacher'] == "") {
            $teacherErr = "Hãy chọn giáo viên *";
        } else {
            $teacher = ($_POST["teacher"]);
        }

        if($_POST['classroom'] == "") {
            $classroomErr = "Hãy chọn lớp học *";
        } else {
            $classroom = ($_POST["classroom"]);
        }   
    }

   
    for($i = 0; $i < 10000; $i++){
        if(isset($_POST["giveback".$i])){
            $idgive2 = $_POST["idgiveback".$i];
            $timegive = $_POST["timegiveback"];
            givebackbook($idgive2,$timegive);
           
        } 
    }
    
?>