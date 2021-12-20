<?php
    require '../model/classroom.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        echo $id;
    }
    
?>