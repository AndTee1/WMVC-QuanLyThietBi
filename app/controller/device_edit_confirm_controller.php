<?php
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
            editDevice($id,$name, $building, $description, $avatar, $update);
            header("Location: ../view/device_edit_complete_view.php");
    }
?>