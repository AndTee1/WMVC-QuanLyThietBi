<?php
    require '../model/device.php';
    require '../model/teacher.php';
    require '../model/classroom.php';
    
    $equipment = $teacher = $classroom = "";
    $idgive=$idgive2=$timegive="";
    $count = 0;
    $i = 1;
    // error_reporting(0);
    session_start();
    if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
        echo "<script> window.location.assign('../../login.php'); </script>";
    }
    require '../../app/common/define.php';
    checkLogin();
    if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logoutAction'])) {
        $_SESSION['loggedin'] = false;
        $_SESSION['name'] = '';
        $_SESSION['time'] = '';
        echo "<script> window.location.assign('login.php'); </script>";
    } 
    
    if (isset($_POST["search"])) {
        // error_reporting(0);
        $equipment = ($_POST["equipment"]);
        $teacher = ($_POST["teacher"]);
        $classroom = ($_POST["classroom"]);
          
    }

   
    for($i = 0; $i < 10000000; $i++){
        if(isset($_POST["giveback".$i])){
            $idgive2 = $_POST["idgiveback".$i];
            $timegive = $_POST["timegiveback"];
            givebackbook($idgive2,$timegive);
           
        } 
    }
    
?>