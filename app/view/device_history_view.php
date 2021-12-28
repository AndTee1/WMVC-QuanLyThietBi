<!DOCTYPE html>
<html>
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
                    <th> Tên thiết bị</th>
                    <th> Thời gian dự kiến muộn</th>
                    <th> Thời điểm trả </th>
                    <th> Giáo viên mượn</th>
                </tr>
                
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
</html>