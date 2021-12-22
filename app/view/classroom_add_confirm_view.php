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
       
    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formadd' action='../controller/classroom_add_controller.php' method='POST'> 
                <div class="col-md-12"> 
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tên Phòng học</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <div class="lable-input">.</div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tòa nhà</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <div class="lable-input">.</div>
                            </label>                  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Mô tả chi tiết</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:100%'>
                                <div class="lable-input description"></div>
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
                    <!-- <div class="col-sm-6"> -->
                        <button type="button" id="btn-edit" name="edit">Sửa lại</button>
                    <!-- </div> -->
                    <!-- <div class="col-sm-2"> -->
                        <button type="button" id="btn-add" name="add">Đăng kí</button>
                    <!-- </div> -->
                </div>
            </form>
        
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>