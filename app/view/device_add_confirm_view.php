<?php
        require '../controller/device_add_confirm_controller.php';
        require '../common/define.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/addDevice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Xác nhận thêm thiết bị</title>
</head>
<body>
    <button class="custombackHome">
            <a style="text-decoration: none" href="../../home.php">
                <img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" />
                <p>Trang chủ</p>
            </a>
    </button>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formadd' action='' method='POST' id="formadd"> 
                <div class="col-md-12"> 
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tên thiết bị</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <input type="text" name="name" disabled="true" value="<?php echo $name;?>">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Mô tả chi tiết</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="">                
                                <textarea type="input" rows="5" cols="60" name="description" class="description" disabled="true"> 
                                    <?php echo $description?>
                                </textarea>
                            </label>                        
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Avatar</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:30%'>
                                <img src="../../web/avata/deviceTMP/<?php echo $avatar?>" alt="" class='image'>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 confirm">
                    <button type="button" id="btn-edit" name="btn-edit" onclick="history.back()">Sửa lại</button>
                    <button type="submit" id="btn-add" name="btn-add">Đăng kí</button>
                </div>
            </form>
        
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>