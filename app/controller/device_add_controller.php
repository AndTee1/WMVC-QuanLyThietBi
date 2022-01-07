<?php
    $addName = $addDescription = $avatarUpload ='';
    $nameErr = $descriptionErr = $avatarErr ="";
    $avatarT="";
    $name = $description = $avatar = '';

    if (isset($_POST['btn-add'])) {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên thiết bị *";
        } else {
            $addName = $_POST['name'];
        }

        if (trim($_POST["description"])  == "") {
            $descriptionErr = "Hãy nhập mô tả *";
        } else if(strlen(trim($_POST["description"]))>1000){
            $nameErr = "Mô tả chi tiết nhỏ hơn 1000 ký tự";
        } else {
            $addDescription = trim($_POST['description']);
        }     

        if (empty( $_FILES['avatarUpload']['name'])) {
            $avatarErr = "Hãy chọn avatar";
        } else if(preg_match("/\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/",$_POST['avatarUpload'])){
            $avatarT =  $_FILES['avatarUpload']['name'];
            move_uploaded_file($_FILES['avatarUpload']['tmp_name'], '../../web/avata/deviceTMP/'.$avatarT); 
        }
        else {
            $avatarErr= "Đây không phải file ảnh";
        }

        $avatarUpload = $_POST['avatarUpload'];

        if($addName !="" && $addDescription !="" && $avatarUpload !=""){
            header("Location: ../view/device_add_confirm_view.php?name=$addName&description=$addDescription&avatar=$avatarUpload");
       }
       
    } 
?>

