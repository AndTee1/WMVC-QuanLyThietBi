<?php
    $nameErr =  $descriptionErr = $avatarErr = "";
    $name = $description = $avatarCorrect = "";
        require '../model/device.php';
        $id=$_GET["id"];
        $result=findDevice($id);
        foreach ($result as $data) {
        $name=$data["name"];
        $description=$data["description"];
        $avatarPast=$data["avatar"];
        }
    if (isset($_POST['btn-accept'])) {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên thiết bị *";
        } else if(strlen($_POST["name"])>100){
            $nameErr = "Tên bé hơn 100 ký tự";
        }else {
            $name = ($_POST["name"]);
        }

        if (empty($_POST["description"])) {
            $descriptionErr = "Hãy nhập mô tả *";
        }else if(strlen($_POST["description"])>1000){
            $nameErr = "Mô tả chi tiết bé hơn 1000 ký tự";
        } else {
            $description = ($_POST["description"]);
        }
        
        $typeImage= array('jpg', 'png', 'jpeg', 'gif');
        $fileType = pathinfo($_POST['upload'], PATHINFO_EXTENSION);

        if (empty($_FILES['upload']['name'])) {
            $avatarErr = "Hãy chọn avatar*";
        } elseif (!in_array($fileType, $typeImage)){
            $avatarErr = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF *";
        }
        elseif (file_exists($_FILES['upload']['name'])){
            $avatarErr = "Tên file đã tồn tại, không được ghi đè *";
        }
         else {
            $avatarCorrect =  $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], '../../web/avata/device/'.$avatarCorrect);
        }
        $upload = $_POST['upload'];
        if($name !="" && $description !="" && $upload !=""){
            header("Location: ../view/device_edit_confirm_view.php?id=$id&name=$nameg&description=$description&avatar=$upload&avatarPast=$avatarPast");
        }
    }
?>