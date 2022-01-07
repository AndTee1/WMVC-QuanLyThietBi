<?php
        require '../controller/device_edit_confirm_controller.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/editDevice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Thêm phòng học</title>
</head>
<body>
    <div class="content container">
        <form name='formconfirm' action='' method='POST' class="col-sm-12"> 
            <div class="col-md-12">  
            <div class="col-md-12">
                <div class="col-sm-2">
                    <div class="content">Tên thiết bị</div>
                    </div>
                        <div class="col-sm-7">
                        <label for="" style='width:50%'>
                        <?php 
                        $name=$_GET["name"];
                        echo "<div class='lable-input'>$name</div>"
                        ?>
                        </label>
                        </div>
                    </div>                            
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="content">Mô tả chi tiết</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:100%'>
                            <?php 
                            $description=$_GET["description"];
                            echo "<div class='lable-input'>$description</div>"
                            ?>
                            </label>                        
                        </div>
                    </div>                              
                    <div class="col-md-12 seacrch">
                        <div class="col-sm-2">
                            <div class="content">Avatar</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:30%'>
                            <?php 
                            $avatarChange=$_GET["avatar"];
                            echo "<img src='../../web/avata/device/$avatar' class='image'>"
                            ?>
                            </label>
                        </div>
                    </div>
            </div>
            <div class="col-md-12 accept">
            <button type="button" id="btn-back" name="back">Quay lại</button>
            <button type="submit" id="btn-edit" name="edit">Xác nhận</button>
            </div>
        </form>
    </div>
</body>
</html>