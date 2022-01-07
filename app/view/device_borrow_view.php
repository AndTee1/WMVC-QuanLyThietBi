
<!DOCTYPE html>
<html>

<head>
  <title>Mượn thiết bị</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../web/css/device/borrowDevice.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
</head>

<body>
<?php
    require '../controller/device_borrow_controller.php';
    
?>

<?php
session_start();
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    echo "<script> window.location.assign('../../login.php'); </script>";
}
require '../../app/common/define.php';
checkLogin();
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logoutAction'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['name'] = '';
    $_SESSION['time'] = '';
    echo "<script> window.location.assign('login.php'); </script>";
} 
?>
<button class="custombackHome">
        <a style="text-decoration: none" href="../../home.php">
            <img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" />
            <p>Trang chủ</p>
        </a>
    </button>
  <form action='' method='POST'>
    <!-- Tên thiết bị -->
    <div>
      <label>Tên thiết bị</label>&ensp;
      <input class="input" type="text" name="name">
      
    </div>
    <div class="validate"><?php  echo $nameErr;?></div>
    <!-- Giáo viên -->
    <div class="css">
      <label>Giáo viên</label>&ensp;
      <select class="combobox" name="teacher">
      <option> </option>
        <?php while ($row = $listTeacher->fetch()) { ?>
          <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
        <?php } ?>  
      </select>
      
    </div>  
    <div class="validate"><?php  echo $teacherErr;?></div>
  

    <!-- Lớp học -->
    <div >
      <label>Lớp học</label>&ensp;
      <select class="combobox" name="classroom">
        <option> </option>
        <?php while ($row = $listRoom->fetch()) { ?>
          <option value="<?php echo $row['id']?> "><?php echo $row['name'] ?></option>
        <?php } ?>

      </select>
      
    </div>
    <div class="validate"><?php  echo $classroomErr;?></div>
    

    <!-- Thời gian bắt đầu  -->
    <div class="group-date">&emsp; &ensp;
      <label>Thời gian bắt đầu</label>&ensp;
      <input type="text" id="datetimepicker1" name ="start_transaction">
      <i class="fas fa-calendar-alt" id="icon-calendar1"></i>
    </div>
    <div class="validate"><?php  echo $start_transactionErr;?></div>
    <!-- Thời gian bắt đầu  -->
    <div class="group-date">&emsp; &ensp;
      <label>Thời gian kết thúc</label>&ensp;
      <input type="text" id="datetimepicker2" name = "end_transaction">
      <i class="fas fa-calendar-alt" id="icon-calendar2" ></i>
    </div>
    <div class="validate"><?php  echo $end_transactionErr;?></div>
    <input type="submit" name="login" value="Mượn"  class="borrow">
  </form>
  <script>
    $('#datetimepicker1').datetimepicker();
    $('#icon-calendar1').on('click', function() {
      $('#datetimepicker1').datetimepicker('show');
    });
    $('#datetimepicker2').datetimepicker();
    $('#icon-calendar2').on('click', function() {
      $('#datetimepicker2').datetimepicker('show');
    });
  </script>
</body>

</html>