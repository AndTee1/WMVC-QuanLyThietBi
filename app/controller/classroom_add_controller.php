<?php
    require '../model/classroom.php';
    $nameErr = $buildingErr = $descriptionErr = $avatarErr = "";
    $name = $building = $description = $avatar = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên phòng học *";
        } else {
            $name = ($_POST["name"]);
        }
                    
        if($_POST['building'] == "none") {
            $buildingErr = "Hãy chọn tòa nhà *";
        } else {
            $building = ($_POST["building"]);
        }

        if (trim($_POST["description"]) == "") {
            $descriptionErr = "Hãy nhập mô tả *";
        } else {
            $description = ($_POST["description"]);
        }

        if (empty( $_FILES['upload']['name'])) {
            $avatarErr = "Hãy chọn avatar*";
        } else {
            $avatar =  $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], '../../web/avata/'.$avatar);
        }
    }
?>