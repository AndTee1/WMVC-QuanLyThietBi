<?php
    require '../model/classroom.php';
    $name = $_GET['name'];
    $building = $_GET['building'];
    $description = $_GET['description'];
    $avatar = $_GET['avatar'];
    $updated = date("Y-m-d h:i:s");
    $created = date("Y-m-d h:i:s");

    if(isset($_POST['btn-add'])){
        add_room($name, $building, $description, $avatar, $updated, $created);
        router_room();
    }
    function router_room(){
        header("Location: ../view/classroom_add_complete_view.php");
    }
?>