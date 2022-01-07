<?php
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
            header("Location: ../view/device_edit_complete_view.php");
    }
?>