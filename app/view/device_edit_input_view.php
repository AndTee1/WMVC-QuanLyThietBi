<?php
<<<<<<< HEAD
          require '../controller/device_edit_controller.php';
=======
          require '../controller/device_edit_controller.php'; 
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/editDevice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Sửa thiết bị</title>
</head>
<body>
<<<<<<< HEAD
    <div class="component container">
    <form name='classroom_input' action='' method='POST' class="col-sm-12">  
=======
<button class="custombackhome"><a href="../../home.php"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png"/>Trang chủ</a></button>
    <div class="component container">
    <form name='classroom_input' action='' method='POST' enctype="multipart/form-data" class="col-sm-12">  
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
    <div class="col-md-12">  
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="content">Tên thiết bị</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="" style='width: 100%'>
<<<<<<< HEAD
                        <input type="text" class="filter" id="name" name="name" value= "<?php echo $name; ?>">
=======
                        <?php 
                        echo "<div><input type='text' class='name-input' id='name' name='name' value='$namePast'></div>"
                        ?>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"><?php echo $nameErr;?></span></div>
                    </div>
                </div>                                
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="content">Mô tả chi tiết</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="">
<<<<<<< HEAD
                            <textarea type="input" rows="5" cols="60" name="description" id="description"  style="border: 1px solid #385d8a; background-color: #e1eaf4">
                            <?php echo $description ;?>
                            </textarea>
=======
                        <?php 
                        echo "<textarea type='input' rows='5' cols='60' name='description' id='description' >$descriptionPast</textarea>"
                        ?>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                        </label>                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"><?php echo $descriptionErr;?></span></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                    <?php 
                        echo "<img src='../../web/avata/$avatarPast' class='image' id='image'>"
                    ?>
                    </div>
                </div>                                
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <div class="content">Avatar</div>
                    </div>
                    <div class="col-sm-7" style="display:flex">
                        <label for="" class="col-sm-8" style="display:flex">
                            <input type="text" name="upload" id="avatar">
                        </label>
                        <div class="col-sm-2" style="padding-left: 0px;">
<<<<<<< HEAD
                            <input type="file" id="upload" name="upload"/>
=======
                            <input type="file" id="upload" name="upload" onchange="preview(this)"/>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                            <label for="upload" class="browse" id="browse">Browse</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"><?php echo $avatarErr;?></span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 accept">
                <button type="submit" id="btn-accept" name="btn-accept">Xác nhận</button>
            </div>
    </div>
    </form>
    <div>
<<<<<<< HEAD
</body>
</html>
=======
    <script type="text/javascript" src="../../web/js/editRoom.js"></script>
</body>
</html>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
