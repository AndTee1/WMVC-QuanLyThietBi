<?php
    require '../model/classroom.php';
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $id=$_POST['id'];
    //     echo $id;
    // }
    $rowAll=[];
    if(isset($_GET['search'])){
        // echo 'done';
        $word = trim($_GET['filter']);
        $building= $_GET['building'];
        $rowAll = searchData( $word,$building);
        // echo count($rowAll);
    }

    if(isset($_POST['delete'])){
        $id = $_POST['infoID'];
        deleteData($id);
        $word = trim($_GET['filter']);
        $building= $_GET['building'];
        $rowAll = searchData( $word,$building);
    }
                                    

    
    
?>