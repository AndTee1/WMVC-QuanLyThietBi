<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/addDevice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Thêm phòng học</title>
</head>
<body>
    <button class="custombackHome">
            <a style="text-decoration: none" href="../../home.php">
                <img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" />
                <p>Trang chủ</p>
            </a>
    </button>
    <?php
        require '../controller/device_add_controller.php';
        require '../common/define.php';
    ?>
    <div class="content container">
        <div class='col-md-12' style="text-align: center;">
            <p>Bạn đã đăng kí thành công thiết  bị.</p>
            <a href="../../home.php">Trở về trang chủ</p>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>