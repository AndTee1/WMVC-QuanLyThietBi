<?php
        require '../controller/classroom_add_confirm_controller.php';
        require '../common/define.php';

        $room_name = isset($_GET['name']) ? $_GET['name'] : '';
        if ($room_name == '') {
            header('Location: ../view/classroom_add_input_view.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/room/addRoom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Xác nhận thêm phòng học</title>
</head>
<body>
    <button class="custombackhome"><a href="../../home.php">Trang chủ</a></button>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formadd' action='' method='POST' id="formadd"> 
                <div class="col-md-12"> 
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tên Phòng học</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <input type="text" name="name" disabled="true" value="<?php echo $name;?>">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tòa nhà</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <input type="text" name="building" disabled="true" value="<?php foreach ($listBuilding as $key=>$build) : ?><?php if($building==$key){ echo $build;}?><?php endforeach; ?>">
                            </label>                  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Mô tả chi tiết</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="">                
                                <textarea type="input" rows="5" cols="60" name="description" id="description" disabled="true"> 
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
                                <img src="../../web/avata/add_classroom/<?php echo $avatar?>" alt="" style="width:150px; height:150px;">
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