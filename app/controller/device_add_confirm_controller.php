<?php
    require '../model/device.php';
    $name = $_GET['name'];
    $description = $_GET['description'];
    $avatar = $_GET['avatar'];
    $created = date("Y-m-d h:i:s");
    $loading = 0;

    if(isset($_POST['btn-add'])){
        $loading+=1; 
        if($loading==1){
            addDevice($name,$description,$avatar,$created);
            deleteImgTmp($avatar);
            router();
        }
    }
    
    function router(){
        $status='true';
        header("Location: ../view/device_add_complete_view.php?status=$status");
    }

    function deleteImgTmp($avatarT){
        $file="../../web/avata/deviceTMP/$avatarT";
        $newfile="../../web/avata/$avatarT";
        copy($file, $newfile);
        unlink("../../web/avata/deviceTMP/".$avatarT);
    } 
?>