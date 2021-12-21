<?php
    require '../model/classroom.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $id=$_POST['id'];
         echo $id;
     }
    
    $nameErr = $buildingErr = $descriptionErr = $avatarErr = "";
    $name = $building = $description = $avatar = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên phòng học";
        } else {
            $name = ($_POST["name"]);
        }
                    
        if($_POST['building'] == "none") {
            $buildingErr = "Hãy chọn tòa nhà";
        } else {
            $building = ($_POST["building"]);
        }

        if (empty($_POST["description"])) {
            $descriptionErr = "Hãy nhập mô tả";
        } else {
            $description = ($_POST["description"]);
        }

        if (empty($_POST["gender"])) {
            $avatarErr = "Hãy chọn avatar";
        } else {
            $avatar = ($_POST["avatar"]);
        }
    }
?>