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
?>

<form method="post">
        
        <!-- Thiết bị -->
        <div>
            <label>Thiết bị</label>
            <input class="input" type="text" name="equipment">
        </div>

        <!-- Validate thiết bị -->
        <div><span class="error"><?php echo $equipmentErr;?></span></div>

        <!-- Giáo viên -->
        <div class="css">
            <label>Giáo viên</label>
            <select class="selectbox" name="teacher">
                <option> </option>
                <?php while ($row = $listTeacher->fetch()) { ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                <?php } ?>  
            </select>
        </div>

        <!-- Validate giáo viên  -->
        <div><span class="error"><?php echo $teacherErr;?></span></div>

        <!-- Lớp học -->
        <div class="css">
            <label>Lớp học</label>
            <select class="selectbox" name="classroom">
                <option> </option>
                <?php while ($row = $listRoom->fetch()) { ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                <?php } ?>  
            </select>
        </div>

        <!-- Validate Lớp học  -->
        <div><span class="error"><?php echo $classroomErr;?></span></div>

        <!-- Nút tìm kiếm -->
        <input type="submit" name="login" value="Tìm kiếm" style="cursor:pointer" class="search"> 

        <!-- Đếm số thiết bị -->
        <div class="count">
            Số thiết bị tìm thấy: XXX
        </div>
        
        <!-- Bảng hiển thị -->
        <table class="tbl" >
                <tr>
                    <th style="width: 40px"> No</td>
                    <th> Tên hiển thị</td>
                    <th> Trạng thái</td>
                    <th> Action </td>
                </tr>
                
                <tr>
                    <td style="width: 40px"> 1</td>
                    <td> Máy chiếu</td>
                    <td> Đang mượn</td>
                    <td> <input type="submit" name="login" value="Trả" style="cursor:pointer" class="pay"> </td>
                </tr>
                
                <tr>
                    <td style="width: 40px"> 2</td>
                    <td> Laptop1</td>
                    <td> Đang mượn</td>
                    <td> <input type="submit" name="login" value="Trả" style="cursor:pointer" class="pay"> </td>
                </tr>
                
                <tr>
                    <td style="width: 40px"> 3</td>
                    <td> Laptop2</td>
                    <td> Đang rảnh</td>
                    <td> <input type="submit" name="login" value="" style="cursor:pointer" class="pay-non"> </td>
                </tr>
                
            </table>

        </form> 
           
        
    
</body>
</html>