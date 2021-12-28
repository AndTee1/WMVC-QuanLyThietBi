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
        <div class='col-md-12' style="text-align: center;">
            <p>Bạn đã đăng kí thành công phòng học.</p>
            <a href="../view/classroom_add_input_view.php">Trở về trang chủ</p>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>