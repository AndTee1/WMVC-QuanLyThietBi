<?php
    require '../model/teacher.php';   
    $nameErr = $specializedErr = $degreeErr = $avatarErr = $descriptionErr="";
    $name = $specialized = $degree = $avatar = $description="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên";
        } else {
            $name = ($_POST["name"]);
        }
                    
        if($_POST['specialized'] == "none") {
            $specializedErr = "Hãy chọn chuyên ngành";
        } else {
            $specialized = ($_POST["specialized"]);
        }
        if($_POST['degree'] == "none") {
            $degreeErr = "Hãy chọn học vị";
        } else {
            $degree = ($_POST["degree"]);
        }

        if ($_POST["description"]) {
            $descriptionErr = "Hãy nhập mô tả";
        } else {
            $description = ($_POST["description"]);
        }

        if (empty($_POST["avatar"])) {
            $avatarErr = "Hãy chọn avatar";
        } else {
            $avatar = ($_POST["avatar"]);
        }
    }    
?>