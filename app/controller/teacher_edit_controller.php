<?php
    require '../model/teacher.php';   
    $nameErr = $specializedErr = $degreeErr = $avatarErr = $descriptionErr="";
    $nameQ = $specializedQ = $degreeQ = $avatarQ = $descriptionQ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên giáo viên.";
        } else {
            $nameQ = ($_POST["name"]);
        }
                    
        if($_POST['specialized'] == "none") {
            $specializedErr = "Hãy chọn chuyên ngành.";
        } else {
            $specializedQ = ($_POST["specialized"]);
        }
        if($_POST['degree'] == "none") {
            $degreeErr = "Hãy chọn bằng cấp.";
        } else {
            $degreeQ = ($_POST["degree"]);
        }

        if ($_POST["description"]) {
            $descriptionErr = "Hãy nhập mô tả chi tiết.";
        } else {
            $descriptionQ = ($_POST["description"]);
        }

        if (empty($_POST["avatar"])) {
            $avatarErr = "Hãy chọn avatar.";
        } else {
            $avatarQ = ($_POST["avatar"]);
        }
    }    

?>