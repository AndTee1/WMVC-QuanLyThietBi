<?php
    session_start();
    require '../model/classroom.php';
    $id=$_SESSION["id"];
    $name = $_SESSION["name"];
    $building = $_SESSION["building"];
    $description = $_SESSION["description"];
    $avatar =  $_SESSION["avatar"];
    $update = date("Y-m-d h:i:s");
    $avatarPast=$_SESSION["avatarPast"];
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