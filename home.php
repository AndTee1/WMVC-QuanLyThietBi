<?php
session_start();
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    echo "<script> window.location.assign('login.php'); </script>";
}
//require 'app/controller/home_controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web/css/admin/home.css">
    <title>Trang chủ</title>
</head>

<body>

    <p> <?php echo "Tên login: " . $_SESSION['name']; ?></p>
    <p> <?php date_default_timezone_set('Asia/Bangkok');
        echo "Thời gian login: " . $_SESSION['time']; ?> </p>

    <div class="row">
        <div class="column">
            <h2>Phòng học</h2>
            <div>
                <a href="app/view/classroom_search_view.php">Tìm kiếm</a>
            </div>
            <div>
                <a href="app/view/classroom_add_input_view.php">Thêm mới</a>
            </div>
        </div>
        <div class="column">
            <h2>Giáo viên</h2>
            <div>
                <a href="app/view/teacher_search_view.php">Tìm kiếm</a>
            </div>
            <div>
                <a href="app/view/teacher_add_input_view.php">Thêm mới</a>
            </div>
        </div>
        <div class="column">
            <h2>Thiết bị</h2>
            <div>
                <a href="app/view/device_search_view.php">Tìm kiếm</a>
            </div>
            <div>
                <a href="app/view/device_add_input_view.php">Thêm mới</a>
            </div>
        </div>
        <div class="column">
            <h2>Mượn/trả thiết bị</h2>
            <div>
                <a href="app/view/device_borrow_view.php">Tìm kiếm</a>
            </div>
            <div>
                <a href="app/view/device_seach_advaned_view.php">Tìm kiếm nâng cao</a>
            </div>
            <div>
                <a href="app/view/device_giveback_view.php">Trả thiết bị</a>
            </div>
            <div>
                <a href="app/view/device_history_view.php">Lịch sử mượn thiết bị</a>
            </div>
        </div>
    </div>

</body>

</html>