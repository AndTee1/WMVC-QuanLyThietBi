<?php
    // require '../model/teacher.php';   
    $nameErr = $specializedErr = $degreeErr = $avatarErr = $descriptionErr="";
    $nameT = $specializedT = $degreeT = $avatarT = $descriptionT=$uploadT="";

    if (isset($_POST['btnAdd'])) {

        if (empty($_POST["name"])) {
            $nameErr = "Hãy nhập tên";
        } else {
            $nameT = ($_POST["name"]);
        }
                    
        if($_POST['specialized'] == "none") {
            $specializedErr = "Hãy chọn chuyên ngành";
        } else {
            $specializedT = ($_POST["specialized"]);
        }
        if($_POST['degree'] == "none") {
            $degreeErr = "Hãy chọn học vị";
        } else {
            $degreeT = ($_POST["degree"]);
        }

        if (trim($_POST['description']) == "") {
            $descriptionErr = "Hãy nhập mô tả";
        } else if (strlen(trim($_POST['description'])) > 1000) {
            $descriptionErr = 'Không nhập quá 1000 ký tự';
        }else {
            $descriptionT = trim($_POST['description']);
        }

        if (empty( $_FILES['upload']['name'])) {
            $avatarErr = "Hãy chọn avatar";
        } else if(preg_match("/\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/",$_POST['upload'])){
            $avatarT =  $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], '../../web/avata/teacherTMP/'.$avatarT); 
        }
        else {
            $avatarErr= "Đây không phải file ảnh";
        }
        $uploadT = $_POST['upload'];
        if($nameT!=""&& $specializedT !=""&&$degreeT!=""&&$descriptionT!=""&&$uploadT!=""){
            header("Location: ../view/teacher_add_confirm_view.php?name=$nameT&specialized=$specializedT&avata=$uploadT&degree=$degreeT&description=$descriptionT");
        } 
       
       
    } 
    
?>