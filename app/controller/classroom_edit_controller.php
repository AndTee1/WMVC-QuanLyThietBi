<?php
    $nameErr = $buildingErr = $descriptionErr = $avatarErr = "";
    $name = $building = $description = $avatarCorrect = "";
        require '../model/classroom.php';
        $id=$_GET["id"];
        $result=get_room($id);
        foreach ($result as $item) {
        $name=$item["name"];
        $description=$item["description"];
        $avatarPast=$item["avatar"];
        $building=$item["building"];
        }
    if (isset($_POST['btn-accept'])) {
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
        
        $typeImage= array('jpg', 'png', 'jpeg', 'gif');
        $fileType = pathinfo($_POST['upload'], PATHINFO_EXTENSION);

        if (empty($_FILES['upload']['name'])) {
            $avatarErr = "Hãy chọn avatar*";
        } elseif (!in_array($fileType, $typeImage)){
            $avatarErr = "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF *";
        }
        elseif (file_exists($_FILES['upload']['name'])){
            $avatarErr = "Tên file đã tồn tại, không được ghi đè *";
        }
         else {
            $avatarCorrect =  $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], '../../web/avata/room/'.$avatarCorrect);
        }
        $upload = $_POST['upload'];
        if($name !="" && $building !="" && $description !="" && $upload !=""){
            header("Location: ../view/classroom_edit_confirm_view.php?id=$id&name=$name&building=$building&description=$description&avatar=$upload&avatarPast=$avatarPast");
        }
    }
?>