<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/teacher/editTeacher.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Sửa thông tin giáo viên</title>
</head>
<body>
    <?php
        require '../controller/teacher_edit_controller.php';
        require '../common/define.php';
        if($_GET['status'] != 'true'){
            header("Location: ../view/teacher_edit_input_view.php");
        }
    ?>
    <div class="content-complete container">
        <div class='col-md-12' style="text-align: center;">
            <p>Bạn đã đăng kí thành công giáo viên.</p>
            <a href="../../home.php">Trở về trang chủ</p>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>