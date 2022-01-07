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
<<<<<<< HEAD
            $file="../../web/avata/room/$avatar";
            $newfile="../../web/avata/$avatar";
            copy($file, $newfile);
            if($avatar!==$avatarPast){
                unlink("../../web/avata/room/".$avatar);
                unlink("../../web/avata/".$avatarPast);
            }else{
                unlink("../../web/avata/room/".$avatar);
=======
            $file="../../web/avata/add_classroom/$avatar";
            $newfile="../../web/avata/$id/$avatar";
            copy($file, $newfile);
            if($avatar!==$avatarPast){
                unlink("../../web/avata/add_classroom/$avatar");
                unlink("../../web/avata/$id/$avatarPast");
            }else{
                unlink("../../web/avata/add_classroom/$avatar");
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
            }
            edit_room($id,$name, $building, $description, $avatar, $update);
            header("Location: ../view/classroom_edit_complete_view.php");
    }
?>