<?php
    require '../model/classroom.php';
    $id=$_GET['id'];
    $name = $_GET['name'];
    $building = $_GET['building'];
    $description = $_GET['description'];
    $avatar = $_GET['avatar'];
    $update = date("Y-m-d h:i:s");
    $avatarPast=$_GET['avatarPast'];
    if(isset($_POST['edit'])){
            $file="../../web/avata/room/$avatar";
            $newfile="../../web/avata/$avatar";
            copy($file, $newfile);
            if($avatar!==$avatarPast){
                unlink("../../web/avata/room/".$avatar);
                unlink("../../web/avata/".$avatarPast);
            }else{
                unlink("../../web/avata/room/".$avatar);
            }
            edit_room($id,$name, $building, $description, $avatar, $update);
            header("Location: ../view/classroom_edit_complete_view.php");
    }
?>