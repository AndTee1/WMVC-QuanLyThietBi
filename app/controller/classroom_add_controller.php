<?php
    //require '../model/classroom.php';
    $nameErr = $buildingErr = $descriptionErr = $avatarErr = "";
    $nameR = $buildingR = $descriptionR = $avatarR = "";

    if (isset($_POST['btn-add'])) {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên phòng học *";
        } else {
            $nameR = ($_POST["name"]);
        }
                    
        if($_POST['building'] == "none") {
            $buildingErr = "Hãy chọn tòa nhà *";
        } else {
            $buildingR = ($_POST["building"]);
        }

        if (trim($_POST["description"]) == "") {
            $descriptionErr = "Hãy nhập mô tả *";
        } else {
            $descriptionR = ($_POST["description"]);
        }

        if (empty( $_FILES['upload']['name'])) {
            $avatarErr = "Hãy chọn avatar*";
        } else {
            $avatarR =  $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], '../../web/avata/'.$avatarR);
        }

        $uploadR = $_POST['upload'];
        if($nameR !="" && $buildingR !="" && $descriptionR !="" && $uploadR !=""){
            header("Location: ../view/classroom_add_confirm_view.php?name=$nameR&building=$buildingR&description=$descriptionR&avatar=$uploadR");
       }
    }
?>