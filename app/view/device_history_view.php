<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/historyDevice.css">
    <title>Lịch sử mượn thiết bị</title>
</head>

<body>
<?php
        require '../controller/device_history_controller.php';
?>
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

                 <!-- thu khac ds gvien    -->
                 <?php 
                    foreach ($list_teacher as $key => $value) {
                       echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';  
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
            <table class="table" >
                    <tr>
                        <th class = "title-col"> No </th>
                        <th> Tên thiết bị</th>
                        <th> Thời gian dự kiến muộn</th>
                        <th> Thời điểm trả </th>
                        <th> Giáo viên mượn</th>
                    </tr>
                    <?php
                            for ($i = 0; $i <=  count($result) - 1; $i++){  
                            $result[$i]['start_time_plan'] = formatDate($result[$i]['start_time_plan']);
                            $result[$i]['end_time_plan'] = formatDate($result[$i]['end_time_plan']);
                            $result[$i]['returned_date'] = formatDate($result[$i]['returned_date']);

                            echo '
                                <tr>
                                    <td>'.($i+1).'</td>
                                    <td>'.$result[$i]['devices_name'].'</td>
                                    <td>'.$result[$i]['start_time_plan'].' ~ '.$result[$i]['end_time_plan'].'</td>
                                    <td>'.$result[$i]['returned_date'].'</td>
                                    <td>'.$result[$i]['teachers_name'].'</td>
                                </tr>';
                        
                            }
                    ?>
                    
                    
            </table>
        </form> 
    </body>
</html>