<?php
          require '../controller/device_add_controller.php';
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
    <title>Thêm thiết bị</title>
</head>
<body>
    <button class="custombackHome">
            <a style="text-decoration: none" href="../../home.php">
                <img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" />
                <p>Trang chủ</p>
            </a>
    </button>
    <div class="content container">
    <form name='formconfirm' action='' method='POST' enctype="multipart/form-data" class="col-sm-12">  
    <div class="col-md-12">  
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="word">Tên thiết bị</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="" style='width: 100%'>
                        <?php 
                        echo "<div><input type='text' class='filter' id='name' name='name' value='$addName'></div>"
                        ?>
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"><?php 
                        echo $nameErr;
                        ?></span></div>
                    </div>
                </div>                                                
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="word">Mô tả chi tiết</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="">
                        <?php 
                        echo "<textarea type='text' rows='5' cols='60' name='description' class='description'>$addDescription</textarea>"
                        ?>
                        </label>                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"><?php 
                        echo $descriptionErr;
                        ?></span></div>
                    </div>
                </div>                                
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <div class="word">Avatar</div>
                    </div>
                    <div class="col-sm-7" style="display:flex">
                        <label for="" class="col-sm-8" style="display:flex">
                            <input type="text" name="avatarUpload" id="addAvatar">
                        </label>
                        <div class="col-sm-2" style="padding-left: 0px;">
                            <input type="file" id="upload" name="avatarUpload" onchange="addAvatarDevice(this)"/>
                            <label for="upload" class="labelupload" id="labelup">Browse</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error">
                          <?php 
                           echo $avatarErr;
                          ?>
                        </span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 confirm">
                <button type="submit" id="btn-add" name="btn-add">Xác nhận</button>
            </div>
    </div>
    </form>
    <div>
    <script type="text/javascript" src="../../web/js/addDevice.js"></script>
</body>
</html>
