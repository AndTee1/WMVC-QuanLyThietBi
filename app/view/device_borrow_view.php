<?php
require '../common/define.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mượn sách</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/WMVC-QuanLyThietBi/web/css/device/borrowDevice.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
</head>

<body>
  <form method="post">
    <!-- Tên thiết bị -->
    <div>
      <label>Tên thiết bị</label> &ensp;
      <input class="input" type="text" name="Equipment">
    </div>
    <!-- Validate tên thiết bị -->
    <div>
      <label></label>
      <label class="validate">Hãy nhập tên thiết bị</label>
    </div>

    <!-- Giáo viên -->
    <div class="css">
      <label>Giáo viên</label> &ensp;
      <select class="combobox" name="teacher">
        <option> </option>
        <option> Tokuda Shigeo </option>
        <option> Hoắc Kiến Hoa</option>
        <option> Tachi Abana </option>
      </select>
    </div>

    <!-- Validate giáo viên -->
    <div>
      <label></label>
      <label class="validate">Hãy nhập tên giáo viên</label>
    </div>

    <!-- Lớp học -->
    <div>
      <label>Lớp học</label> &ensp;
      <select class="combobox" name="class">
        <option> </option>
        <option> Máy tính và Khoa học thông tin </option>
        <option> Toán tin</option>
        <option> Khoa học dữ liệu </option>
      </select>
    </div>

    <!-- Validate Lớp học  -->
    <div>
      <label></label>
      <label class="validate">Hãy nhập tên lớp học</label>
    </div>

    <!-- Thời gian bắt đầu  -->
    <div class="group-date">
      &emsp;&ensp;
      <label>Thời gian bắt đầu </label> &ensp;
      <input type="text" id="datetimepicker1" />
      <i class="fas fa-calendar-alt"></i>
    </div>

    <!-- validate thời gian bắt đầu-->
    <div>
      <label></label>
      <label class="validate">Hãy thêm mô tả chi tiết</label>
    </div>

    <!-- Thời gian kết thúc  -->
    <div class="group-date"> &emsp; &ensp;
      <label>Thời gian kết thúc </label> &ensp;
      <input type="text" id="datetimepicker2" />
      <i class="fas fa-calendar-alt"></i>
    </div>

    <!-- validate thời gian bắt đầu-->
    <div>
      <label></label>
      <label class="validate">Hãy thêm mô tả chi tiết</label>
    </div>

    <input type="submit" name="login" value="Mượn" style="cursor:pointer" class="borrow">
  </form>
  <script>
    jQuery('#datetimepicker1').datetimepicker();
    jQuery('#datetimepicker2').datetimepicker();
  </script>
</body>

</html>