<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/room/listRoom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Thêm phòng học</title>
</head>
<body>
    <?php
        require '../controller/classroom_add_controller.php';
        require '../common/define.php';
       
    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formconfirm' action='../controller/classroom_add_controller.php' method='POST'>  
                <div class="col-md-12">
                    <div class="col-md-4"></div>
                    <div class="col-sm-6">
                        <div><span class="error"><?php echo $nameErr;?></span></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Tên Phòng học</div>
                    </div>
                    <div class="col-sm-6">
                        <label for="" style='width:50%'>
                            <input type="text" class="filter" id="name" name="name">
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4"></div>
                    <div class="col-sm-6">
                        <div><span class="error"><?php echo $buildingErr;?></span></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Tòa nhà</div>
                    </div>
                    <div class="col-sm-6">
                    <select name="building" id="building" class="filter" style='width:43%'>
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
                    <div class="col-md-4"></div>
                    <div class="col-sm-6">
                        <div><span class="error"><?php echo $descriptionErr;?></span></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Mô tả chi tiết</div>
                    </div>
                    <div class="col-sm-6">
                        <label for="" style='width:100%'>
                            <input type="text" class="description" id="description" name="description">
                        </label>                        
                    </div>
                </div>
                <!-- <div class="col-md-12 seacrch">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Avatar</div>
                    </div>
                    <div class="col-sm-6">
                        <label for="" style='width:50%'>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </label>
                    </div>
                </div> -->
                <div class="col-md-12" style='text-align: center; margin-top:20px'>
                        <button type="button" class="filtervalue" id="btn-confirm" name="confirm">Xác nhận</button>
                </div>
            </form>
        
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>