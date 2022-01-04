<?php
        require '../controller/teacher_add_controller.php';
        require '../common/define.php';
        if($_GET['status'] != 'true'){
            header("Location: ../view/teacher_add_input_view.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/teacher/addTeacher.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Thêm giáo viên</title>
</head>
<body>
   
    <div class="content-complete container">
        <div class='col-md-12' style="text-align: center;padding:30px 20px">
            <p>Bạn đã đăng kí thành công giáo viên.</p>
            <a href="../../home.php">Trở về trang chủ</p>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>