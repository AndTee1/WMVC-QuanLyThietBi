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

        if (($_POST["description"])) {
            $descriptionErr = "Hãy nhập mô tả *";
        } else {
            $description = ($_POST["description"]);
        }

        if (empty($_POST["avatar"])) {
            $avatarErr = "Hãy chọn avatar *";
        } else {
            $avatar = ($_POST["avatar"]);
        }
    }
?>