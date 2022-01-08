<?php
    session_start();
    require '../model/classroom.php';
    $id=$_GET['id'];
    $name = $_GET['name'];
    $building = $_GET['building'];
    $description = $_GET['description'];
    $avatar =  $_GET['avatar'];
    $avatarPast=$_GET['avatarPast'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $update = date("Y-m-d h:i:s");
    if(isset($_POST['edit'])){
            $file="../../web/avata/add_classroom/$avatar";
            $newfile="../../web/avata/$id/$avatar";
            copy($file, $newfile);
            if($avatar!==$avatarPast){
                unlink("../../web/avata/add_classroom/$avatar");
                unlink("../../web/avata/$id/$avatarPast");
            }else{
                unlink("../../web/avata/add_classroom/$avatar");
            }
            edit_room($id,$name, $building, $description, $avatar, $update);
            header("Location: ../view/classroom_edit_complete_view.php?accuracy='true'");
    }
?>