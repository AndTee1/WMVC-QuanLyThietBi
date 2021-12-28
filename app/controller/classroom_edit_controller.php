<?php
    // require '../model/classroom.php';
    $nameErr = $buildingErr = $descriptionErr = $avatarErr = "";
    $name = $building = $description = $avatar = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên phòng học *";
        } else if(strlen($_POST["name"])>100){
            $nameErr = "Tên phòng học bé hơn 100 ký tự";
        }else {
            $name = ($_POST["name"]);
        }
          
        if($_POST['building'] == "none") {
            $buildingErr = "Hãy chọn tòa nhà *";
        } else {
            $building = ($_POST["building"]);
        }

        if (empty($_POST["description"])) {
            $descriptionErr = "Hãy nhập mô tả *";
        }else if(strlen($_POST["description"])>1000){
            $nameErr = "Mô tả chi tiết bé hơn 1000 ký tự";
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