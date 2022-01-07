<?php
        require '../controller/classroom_add_controller.php';
        require '../common/define.php'; 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/room/addRoom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Thêm phòng học</title>
</head>
<body>
    <button class="custombackhome"><a href="../../home.php">Trang chủ</a></button>
    <div class="content container">
        <form name='formconfirm' action='' method='POST' class="col-sm-12" enctype="multipart/form-data"> 
            <div class="col-md-12">  
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="word">Tên Phòng học</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="" style='width: 100%'>
                            <input type="text" class="filter" id="name" name="name">
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
                        <div class="word">Tòa nhà</div>
                    </div>
                    <div class="col-sm-7">
                    <select name="building" id="building" class="filter">
                        <option value="none"></option>
                        <?php foreach ($listBuilding as $key=>$building) : ?>
                            <option value='<?php echo $key ?>'>
                                <?php echo $building ?>
                            </option>
                        <?php endforeach; ?>
                    </select>                    
                    </div>
                </div>                
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"><?php echo $buildingErr;?></span></div>
                    </div>
                </div>                                
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="word">Mô tả chi tiết</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="">
<<<<<<< HEAD
                            <textarea type="text" rows="5" cols="60" name="description" id="description" style="border: 1px solid #385d8a; background-color: #e1eaf4">
=======
                            <textarea type="text" rows="5" cols="60" name="description" id="description">
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                            </textarea>
                        </label>                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"><?php echo $descriptionErr;?></span></div>
                    </div>
                </div>                                
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <div class="word">Avatar</div>
                    </div>
                    <div class="col-sm-7" style="display:flex">
                        <label for="" class="col-sm-8" style="display:flex">
<<<<<<< HEAD
                            <input type="text" name="upload" id="avatar">
=======
                            <input type="text" name="upload" id="avatar" disabled="true">
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                        </label>
                        <div class="col-sm-2" style="padding-left: 0px;">
                            <input type="file" id="upload" name="upload" onchange="myFunction(this)"/>
                            <label for="upload" class="labelupload" id="labelup">Browse</label>
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
            <div class="col-md-12 confirm">
                <button type="submit" id="btn-add" name="btn-add">Xác nhận</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="../../web/js/addRoom.js"></script>
</body>
</html>