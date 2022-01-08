<?php
    session_start();
    $nameErr = $buildingErr = $descriptionErr = $avatarErr = "";
    $name = $building = $description = $avatarCorrect = "";
        require '../model/classroom.php';
        $id=$_GET["id"];
        $result=get_room($id);
        foreach ($result as $item) {
        $namePast=$item["name"];
        $descriptionPast=$item["description"];
        $avatarPast=$item["avatar"];
        $buildingPast=$item["building"];
        }
        $_SESSION['avatarCorrect']=" ";   
    if (isset($_POST['btn-accept'])) {
        if (empty($_POST["name"]) ) {
            $nameErr = "Hãy nhập tên phòng học *";
        }else if(preg_replace('/\s+/', ' ', $_POST["name"])===" "){
            $nameErr = "Phòng học không được chỉ có khoảng trắng  *";
        } else if(strlen($_POST["name"])>100){
            $nameErr = "Tên phòng học bé hơn 100 ký tự *";
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
        }else if(preg_replace('/\s+/', ' ', $_POST["description"])===" "){
            $descriptionErr = "Mô tả không được chỉ có  khoảng trắng *";
        }else if(strlen($_POST["description"])>1000){
            $descriptionErr = "Mô tả chi tiết bé hơn 1000 ký tự *";
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
        else if (file_exists($_FILES['upload']['name'])){
            $avatarErr = "Tên file đã tồn tại, không được ghi đè *";
        }else {
            $avatarCorrect =  $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], "../../web/avata/add_classroom/$avatarCorrect");
        }
        if($name !="" && $building !="" && $description !="" && $avatarCorrect !=""){
            $name=preg_replace('/\s+/', ' ', $name);
            $description=preg_replace('/\s+/', ' ', $description);
            session_start();
            $_SESSION['avatarCorrect']=$avatarCorrect;            
            header("Location: ../view/classroom_edit_confirm_view.php?id=$id&name=$name&description=$description&building=$building&avatar=$avatarCorrect&avatarPast=$avatarPast");

        }
    }
?>