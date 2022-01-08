<?php
    session_start();

    $nameErr = $buildingErr = $descriptionErr = $avatarErr = "";
    $nameR = $buildingR = $descriptionR = $avatarR = "";

    if (isset($_POST['btn-add'])) {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên phòng học *";
        } else {
            if (strlen($_POST['name']) > 100){
                $nameErr = "Không nhập quá 100 ký tự *"; 
            }
            else {
                $nameR = ($_POST["name"]);
            }
        }
                    
        if($_POST['building'] == "none") {
            $buildingErr = "Hãy chọn tòa nhà *";
        } else {
            $buildingR = ($_POST["building"]);
        }

        if (trim($_POST["description"]) == "") {
            $descriptionErr = "Hãy nhập mô tả *";
        } else {
            if (strlen($_POST["description"]) > 1000){
                $descriptionErr = "Không nhập quá 1000 ký tự *"; 
            }
            else {
                $descriptionR = ($_POST["description"]);
            }
        }
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
        $imageFileType = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
        
        if (empty($_FILES['upload']['name'])) {
            $avatarErr = "Hãy chọn avatar*";
        } elseif (!in_array($imageFileType, $allowtypes)){
            $avatarErr = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF *";
        }
        elseif (file_exists($_FILES['upload']['name'])){
            $avatarErr = "Tên file đã tồn tại, không được ghi đè *";
        }
         else {
            $avatarR =  $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], '../../web/avata/add_classroom/'.$avatarR);
        }

        $uploadR = $_FILES['upload']['name'];      

        if($nameR !="" && $buildingR !="" && $descriptionR !="" && $uploadR !=""){
            header("Location: ../view/classroom_add_confirm_view.php");
            $_SESSION['name']=$nameR;
            $_SESSION['building']=$buildingR;
            $_SESSION['description']=$descriptionR;
            $_SESSION['avatar']=$uploadR;
        }
    }
?>