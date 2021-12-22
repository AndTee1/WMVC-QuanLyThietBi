<!DOCTYPE html>
<html>
<head>
    <title>Trả sách</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/WMVC-QuanLyThietBi/web/css/device/givebackDevice.css" />
   
</head>
<body>
<form method="post">
        
        <!-- Thiết bị -->
        <div>
            <label>Thiết bị</label>
            <input class="input" type="text" name="Equipment">
        </div>

        <!-- Validate thiết bị -->
        <div>
            <label></label>
            <label class="validate">Hãy nhập tên thiết bị</label>
            
        </div>

        <!-- Giáo viên -->
        <div class="css">
            <label>Giáo viên</label>
            <select class="selectbox" name="teacher">
                <option> </option>
                <option> Phạm Ngọc Sơn </option>
                <option> Phạm Thế Anh</option>
                <option> Phạm Thái Duy </option>     
            </select>
        </div>

        <!-- Validate giáo viên  -->
        <div>
            <label></label>
            <label class="validate">Hãy chọn giáo viên</label>
        </div>

        <!-- Lớp học -->
        <div>
            <label>Lớp học</label>
            <select class="selectbox" name="class">
                <option> </option>
                <option> Máy tính và Khoa học thông tin </option>
                <option> Toán tin</option>
                <option> Khoa học vật liệu </option>     
                
            </select>
        </div>

        <!-- Validate Lớp học  -->
        <div>
            <label></label>
            <label class="validate">Hãy chọn lớp học</label>            
        </div>

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