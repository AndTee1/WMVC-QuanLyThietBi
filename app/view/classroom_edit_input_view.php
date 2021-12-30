
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/room/editRoom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Sửa phòng học</title>
</head>
<body>
  <?php
          require '../controller/classroom_edit_controller.php';
          require '../common/define.php'; 
  ?>
    <div class="component container">
    <form name='classroom_input' action='' method='POST' class="col-sm-12">  
    <div class="col-md-12">  
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="content">Tên Phòng học</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="" style='width: 100%'>
                            <input type="text" class="name-input" id="name" name="name">
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
                        <div class="content">Tòa nhà</div>
                    </div>
                    <div class="col-sm-7">
                    <select name="building" id="building" class="building-input">
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
                        <div class="content">Mô tả chi tiết</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="">
                        <textarea type="input" rows="5" cols="60" name="description" id="description" style="border: 1px solid #385d8a; background-color: #e1eaf4">
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
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                      <img src="../../web/avata/demo.jpg" class="image">
                    </div>
                </div>                                
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <div class="content">Avatar</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="" class="col-sm-8">
                            <input type="input" name="avatar" id="avatar">
                        </label>
                        <button type="button" name="btnAvatar" class="col-sm-3">Browse</button>
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
</body>
</html>
