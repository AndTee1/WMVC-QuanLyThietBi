<?php
    // $name = $specialized = $degree = $avatar = $description=$upload="";
    require '../model/teacher.php';
    $name=$_GET['name'];
    $specialized=$_GET['specialized'];
    $degree=$_GET['degree'];
    $avata=$_GET['avata'];
    $description=$_GET['description'];
    $created=date("Y-m-d h:i:s");
    if(isset($_POST['btnAdd'])){
        add( $name,$specialized,$degree,$avata,$description,$created);
        router();
    }
    function router(){
        header("Location: ../view/teacher_add_complete_view.php");
    }

?>