<?php
        require '../controller/device_add_confirm_controller.php';
        require '../common/define.php';
?>

<!DOCTYPE html>
<<<<<<< HEAD
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xác nhận thêm thiết bị</title>
        <link rel="stylesheet" href="../../web/css/device/addConfirmDevice.css">
    </head>
<body class="container">
  <div class="main">
  <section class="section">
    <p>Ten phong hoc</p>
    <input placeholder="Nhap cmn di" />
  </section>
  <section class="section">
    <p>Mo ta chi tiet</p>
    <textarea class="txt"></textarea>
  </section>
  <section class="section">
    <p>Avatar</p>
    <label class="image" for="upload-photo">
      <p>Upload vao day</p>
    </label>
    <input type="file" name="image" accept="image/*" class="upload" id="upload-photo">
  </section>
  <section>
    <button class="btn btn-cancel">quay lai</button>
    <button class="btn btn-submit">Xac nhan</button>
  </section>
</div>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/addDevice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Xác nhận thêm thiết bị</title>
</head>
<body>
    <button class="custombackHome">
            <a style="text-decoration: none" href="../../home.php">
                <img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" />
                <p>Trang chủ</p>
            </a>
    </button>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formadd' action='' method='POST' id="formadd"> 
                <div class="col-md-12"> 
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Tên thiết bị</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="" style='width:50%'>
                                <input type="text" name="name" disabled="true" value="<?php echo $name;?>">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-sm-2">
                            <div class="word">Mô tả chi tiết</div>
                        </div>
                        <div class="col-sm-7">
                            <label for="">                
                                <textarea type="input" rows="5" cols="60" name="description" class="description" disabled="true"> 
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
                                <img src="../../web/avata/deviceTMP/<?php echo $avatar?>" alt="" class='image'>
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
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
</body>
</html>