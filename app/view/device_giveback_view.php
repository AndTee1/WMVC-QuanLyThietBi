<!DOCTYPE html>
<html>
<head>
    <title>Trả sách</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../web/css/device/givebackDevice.css" />
   
</head>
<body>

<?php
        require '../controller/device_giveback_controller.php';
        date_default_timezone_set("Asia/Ho_Chi_Minh");
?>


<button class="custombackhome"><a href="../../home.php"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png"/>  Trang chủ  </a></button>

<form method="post">
       
        

        <!-- Thiết bị -->
        <div>
            <label>Thiết bị</label>
            <input class="input" type="text" name="equipment">
        </div>

        <!-- Giáo viên -->
        <div class="css">
            <label>Giáo viên</label>
            <select class="selectbox" name="teacher">
                <option> </option>
                <?php while ($row = $listTeacher->fetch()) { ?>
                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                <?php } ?>  
            </select>
        </div>


        <!-- Lớp học -->
        <div class="css">
            <label>Lớp học</label>
            <select class="selectbox" name="classroom">
                <option> </option>
                <?php while ($row = $listRoom->fetch()) { ?>
                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                <?php } ?>  
            </select>
        </div>

        <!-- Nút tìm kiếm -->
        <input type="submit" name="search" value="Tìm kiếm" style="cursor:pointer" class="search"> 

        <?php $result2 = searchGiveBackBook($equipment, $teacher, $classroom);
              $time = date('Y-m-d H:i:s');
              ?>
        <!-- Đếm số thiết bị -->
        <div class="count">
            Số thiết bị tìm thấy: <?php echo count($result2); ?>
            
        </div>
        
        <!-- Bảng hiển thị -->
        <table class="tbl" >
                <tr>
                    <th style="width: 40px"> No</td>
                    <th> Tên hiển thị</td>
                    <th> Trạng thái</td>
                    <th> Action </td>
                </tr>
                <?php
                        for ($i = 0; $i <  count($result2); $i++){  
                     ?>
                <tr>
                    <td style="width: 40px"> <?php echo $i+1; ?></td>
                    <td> <?php echo $result2[$i]->deviceName; ?> </td>
                    <td><?php if($result2[$i]->returned_date == ""){
                                    echo "Đang mượn";
                                } else {
                                    echo "Đang rảnh";
                                } ?></td>
                    <td> <?php if($result2[$i]->returned_date != ""){ ?>
                                   <label class="pay-non"> .</label>
                                <?php } else { ?>
                                   <input type="submit" name="giveback<?php echo $result2[$i]->id ?>" value="Trả" class="pay">
                                   <input class="inputClean" type="text" name="idgiveback<?php echo $result2[$i]->id ?>" value="<?php echo $result2[$i]->id ?>">
                                   <input class="inputClean" type="text" name="timegiveback" value="<?php echo $time ?>">
                                   
                                <?php } ?>
                    </td>
                </tr>
                <?php 
                        }      
                ?>    
            </table>

        </form> 
           
        
    
</body>
</html>

