<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/room/editRoom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Xác nhận sửa phòng học</title>
</head>
<body>
    <?php
        require '../controller/classroom_edit_confirm_controller.php';
        require '../common/define.php';
       
    ?>
      <button class="custombackhome"><a href="../../home.php"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png"/>Trang chủ</a></button>
    <div class="component container">
        <div class='col-md-12'>
            <form name='classroom-confirm' action='' method='POST'> 
                <div class="col-md-12"> 
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="content">Tên Phòng học</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                            <?php 
                            $nameChange=$_SESSION["name"];
                            echo "<div class='lable-input'>$nameChange</div>"
                            ?>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="content">Tòa nhà</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                            <?php 
                            $buildingChange=$_SESSION["building"];
                            foreach ($listBuilding as $key=>$build){
                                if($key===$buildingChange){
                                    echo "<div class='lable-input'>$build</div>";
                                }
                            }
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
                            $descriptionChange=$_SESSION["description"];
                            echo "<div class='lable-input'>$descriptionChange</div>"
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
                            $avatarChange=$_SESSION["avatar"];
<<<<<<< HEAD
                            echo "<img src='../../web/avata/room/$avatarChange' class='image'>"
=======
                            echo "<img src='../../web/avata/add_classroom/$avatarChange' class='image'>"
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                            ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 accept">
                        <button type="button" id="btn-back" name="back" onclick="history.back()">Sửa lại</button>
                        <button type="submit" id="btn-edit" name="edit">Sửa</button>
                </div>
            </form>
        
        </div>
    </div>
</body>
</html>
