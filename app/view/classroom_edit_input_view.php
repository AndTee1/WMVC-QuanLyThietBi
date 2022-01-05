<?php
          require '../controller/classroom_edit_controller.php';
          require '../common/define.php'; 
?>
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
    <div class="component container">
    <form name='classroom_input' action='' method='POST' enctype="multipart/form-data" class="col-sm-12">  
    <div class="col-md-12">  
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <div class="content">Tên Phòng học</div>
                    </div>
                    <div class="col-sm-7">
                        <label for="" style='width: 100%'>
                        <?php 
                        echo "<div><input type='text' class='name-input' id='name' name='name' value='$name'></div>"
                        ?>
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
                        <?php 
                        foreach ($listBuilding as $key=>$build){
                            if($building===$key){
                                echo "<option value=$key selected='true'>$build</option>";
                            }else{
                                echo "<option value=$key>$build</option>";
                            }
                        } 
                        ?>
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
                        <?php 
                        echo "<textarea type='input' rows='5' cols='60' name='description' id='description' >$description</textarea>"
                        ?>
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
                            <input type="file" id="upload" name="upload" onchange="preview(this)"/>
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
    <script type="text/javascript" src="../../web/js/editRoom.js"></script>
</body>
</html>
