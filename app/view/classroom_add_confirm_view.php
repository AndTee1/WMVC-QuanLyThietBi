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
    <?php
        require '../controller/classroom_add_controller.php';
        require '../common/define.php';

        $room_name = isset($_POST['name']) ? $_POST['name'] : '';
        $room_building = isset($_POST['building']) ? $_POST['building'] : '';
        $room_description = isset($_POST['description']) ? $_POST['description'] : '';
        $room_avatar = isset($_POST['avatar']) ? $_POST['avatar'] : '';

        if ($room_name == '' || $room_building == '' || $room_description == '' || $room_avatar == '') {
            header('Location: ../view/classroom_add_input_view.php');
        }

    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formadd' action='../model/classroom.php' method='POST'> 
                <div class="col-md-12"> 
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tên Phòng học</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <div class="lable-input">
                                <input type="hidden" value="<?php echo $room_name?>" name="name_out">
                                <p>
                                    <?php echo $room_name ?>
                                </p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tòa nhà</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <div class="lable-input">
                                <input type="hidden" value="<?php echo $room_building?>" name="building_out">
                                <p>
                                    <?php echo $room_building ?>
                                </p>
                                </div>
                            </label>                  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Mô tả chi tiết</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="">
                                <textarea type="input" rows="5" cols="60" name="description" disabled="true" id="description" style="border: 1px solid #385d8a; background-color: #e1eaf4">
                                <input type="hidden" value="<?php echo $room_description?>" name="description_out">
                                    <p>
                                        <?php echo $room_description ?>
                                    </p>
                                </textarea>
                            </label>                        
                        </div>
                    </div>
                    <div class="col-md-12 seacrch">
                        <div class="col-sm-2">
                            <div class="word">Avatar</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:30%'>
                                <div class="lable-input avatar">IMAGE</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 confirm">
                    <button type="button" id="btn-edit" name="edit">Sửa lại</button>
                    <button type="button" id="btn-add" name="add">Đăng kí</button>
                </div>
            </form>
        
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>