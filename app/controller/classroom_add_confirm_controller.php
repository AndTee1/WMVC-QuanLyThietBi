<?php
    session_start();
    require '../model/classroom.php';

    $id=getLastIDR();
    $name = $_SESSION['name'];
    $building = $_SESSION['building'];
    $description = $_SESSION['description'];
    $avatar = $_SESSION['avatar'];

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $created = date("Y-m-d h:i:s");

    $check_tmp = 0;
    if(isset($_POST['btn-add'])){
        $check_tmp += 1; 
        if($check_tmp == 1){
            add_room($name, $building, $description, $avatar, $created);
            mkdir("../../web/avata/$id", 0777);
            remove_tmp($avatar, $id);
            router_room();
        }
    }

    function remove_tmp($img_tmp,$id){
        $file="../../web/avata/add_classroom/$img_tmp";
        $newfile="../../web/avata/$id/$img_tmp";
        copy($file, $newfile);
        unlink("../../web/avata/add_classroom/.$img_tmp");
    } 

    function router_room(){
        header("Location: ../view/classroom_add_complete_view.php");
    }
?>