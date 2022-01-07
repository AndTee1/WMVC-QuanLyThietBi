<?php
<<<<<<< HEAD
    require '../model/classroom.php';
    $id=$_GET['id'];
    $name = $_GET['name'];
    $description = $_GET['description'];
    $avatar = $_GET['avatar'];
    $update = date("Y-m-d h:i:s");
    $avatarPast=$_GET['avatarPast'];
    if(isset($_POST['edit'])){
            $file="../../web/avata/device/$avatar";
            $newfile="../../web/avata/$avatar";
            copy($file, $newfile);
            if($avatar!==$avatarPast){
                unlink("../../web/avata/device/".$avatar);
                unlink("../../web/avata/".$avatarPast);
            }else{
                unlink("../../web/avata/device/".$avatar);
            }
            editDevice($id,$name, $description, $avatar, $update);
=======
    session_start();
    require '../model/device.php';
    $id=$_SESSION['id'];
    $name = $_SESSION['name'];
    $description = $_SESSION['description'];
    $avatar = $_SESSION['avatar'];
    $update = date("Y-m-d h:i:s");
    $avatarPast=$_SESSION['avatarPast'];
    if(isset($_POST['edit'])){
            $file="../../web/avata/deviceTMP/$avatar";
            $newfile="../../web/avata/$avatar";
            copy($file, $newfile);
            if($avatar!==$avatarPast){
                unlink("../../web/avata/deviceTMP/$avatar");
                unlink("../../web/avata/$id/$avatarPast");
            }else{
                unlink("../../web/avata/deviceTMP/$avatar");
            }
            editDevice($id, $name, $description, $avatar, $update);
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
            header("Location: ../view/device_edit_complete_view.php");
    }
?>