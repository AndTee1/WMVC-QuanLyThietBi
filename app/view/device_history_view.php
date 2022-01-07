<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
    <title>Lịch sử mượn thiết bị</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../web/css/device/historyDevice.css" />
   
</head>

<body>
<form method="post">
        
        <!-- Thiết bị -->
        <div>
            <label>Thiết bị</label>
            <input class="input" type="text" name="Equipment">
        </div>
        <!-- Giáo viên -->
        <div class="teach">
            <label>Giáo viên</label>
            <select class="selectbox" name="teacher">
                <option> Nguyễn Văn A </option>
                <option> Trần Văn B</option>
                <option> Phạm Thị C </option>     
            </select>
        </div>
        <!-- button tìm kiếm -->
        <input id="button" type="submit" name="login" value="Tìm kiếm" style="cursor:pointer" class="search"> 
        <!-- Đếm số thiết bị -->
        <div class="count">
            Số lần thiết bị tìm thấy: XXX
        </div>
        
        <!-- Bảng hiển thị -->
        <table class="table" >
                <tr>
                    <th class = "title-col"> No </th>
=======

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/historyDevice.css">
    <title>Lịch sử mượn thiết bị</title>
</head>

<body>
    <button class="custombackhome"><a href="../../home.php"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" /> Trang chủ </a></button>
    <?php
    require '../controller/device_history_controller.php';
    ?>
    <div class="container">
        <form method="get">

            <!-- Thiết bị -->
            <div>
                <label>Thiết bị</label>
                <input class="input" type="text" name="devices_name">
            </div>
            <!-- Giáo viên -->
            <div class="teach">
                <label>Giáo viên</label>
                <select class="selectbox" name="teachers_id">
                    <option> </option>

                    <!--  ds gvien    -->
                    <?php
                    foreach ($list_teacher as $key => $value) {
                        echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                    }
                    ?>

                </select>
            </div>
            <!-- button tìm kiếm -->
            <input id="button" type="submit" name="search" value="Tìm kiếm" style="cursor:pointer" class="search">
            <!--  -->
            <!-- Đếm số thiết bị -->
            <div class="count">
                Số lần thiết bị tìm thấy: <?php echo (count($result)); ?>
            </div>

            <!-- Bảng hiển thị -->
            <table class="table">
                <tr>
                    <th class="title-col"> No </th>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                    <th> Tên thiết bị</th>
                    <th> Thời gian dự kiến muộn</th>
                    <th> Thời điểm trả </th>
                    <th> Giáo viên mượn</th>
                </tr>
<<<<<<< HEAD
                
                <tr>
                    <td class = "title-col"> 1</td>
                    <td> Máy chiếu</td>
                    <td> 13:00 27/11/2021 ~ 14:00 27/11/2021</td>
                    <td> 14:10 27/11/2021</td>
                    <td> Nguyễn Văn A </td>
                </tr>
                
                <tr>
                    <td class = "title-col"> 2</td>
                    <td> laptop001</td>
                    <td> 13:00 27/11/2021 ~ 14:00 27/11/2021</td>
                    <td> 14:10 27/11/2021</td>
                    <td> Nguyễn Văn A </td>
                </tr>
                <tr>
                    <td class = "title-col"> 3</td>
                    <td> laptop001</td>
                    <td> 13:00 28/11/2021 ~ 14:00 28/11/2021</td>
                    <td> 14:10 27/11/2021</td>
                    <td> Nguyễn Văn B </td>
                </tr>
                <tr>
                    <td class = "title-col"> 4</td>
                    <td> Máy tạo độ ẩm</td>
                    <td> 13:00 27/11/2021 ~ 14:00 27/11/2021</td>
                    <td> 14:10 27/11/2021</td>
                    <td> Nguyễn Văn A </td>
                </tr>
                
            </table>
        </form> 

</body>
=======
                <?php
                for ($i = 0; $i <=  count($result) - 1; $i++) {
                    $result[$i]['start_time_plan'] = formatDate($result[$i]['start_time_plan']);
                    $result[$i]['end_time_plan'] = formatDate($result[$i]['end_time_plan']);
                    $result[$i]['returned_date'] = formatDate($result[$i]['returned_date']);

                    echo '
                                <tr>
                                    <td>' . ($i + 1) . '</td>
                                    <td>' . $result[$i]['devices_name'] . '</td>
                                    <td>' . $result[$i]['start_time_plan'] . ' ~ ' . $result[$i]['end_time_plan'] . '</td>
                                    <td>' . $result[$i]['returned_date'] . '</td>
                                    <td>' . $result[$i]['teachers_name'] . '</td>
                                </tr>';
                }
                ?>


            </table>
        </form>
    </div>
</body>

>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
</html>