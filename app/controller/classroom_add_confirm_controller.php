<?php
    require '../model/classroom.php';
    $name = $_GET['name'];
    $building = $_GET['building'];
    $description = $_GET['description'];
    $avatar = $_GET['avatar'];
    $created = date("Y-m-d h:i:s");

    $check_tmp = 0;
    if(isset($_POST['btn-add'])){
        $check_tmp += 1; 
        if($check_tmp == 1){
            remove_tmp($avatar);
            add_room($name, $building, $description, $avatar, $created);
            router_room();
        }
    }

    function remove_tmp($img_tmp){
        $file="../../web/avata/add_classroom/$img_tmp";
        $newfile="../../web/avata/$img_tmp";
        copy($file, $newfile);
        unlink("../../web/avata/add_classroom/".$img_tmp);
    } 

    function router_room(){
        header("Location: ../view/classroom_add_complete_view.php");
    }
?>