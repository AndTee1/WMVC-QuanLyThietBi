<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm nâng cao</title>
    <link rel="stylesheet" href="../../web/css/device/searchAdvancedDevice.css">
</head>

<body>
    <button class="custombackhome"><a href="../../home.php"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png"/>Trang chủ</a></button>
    <div class="content container">
        <form action="" method="GET">
            <div class="search">
                <div class="search_keyword">
                    <label >Từ khóa</label>
                    <input type="text" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword'] ?>" name="keyword">
                </div>
                <div class="search_status">
                    <label>Trạng thái</label>
                    <select id="status" name="status">
                        <option value=''></option>
                        <option value="1" <?php if(isset($_GET['status']) && $_GET['status'] == 1) echo 'selected' ?> >Đang rảnh</option>
                        <option value="2"  <?php if(isset($_GET['status']) && $_GET['status'] == 2) echo 'selected' ?>>Đang mượn</option>
                    </select>
                </div>          
                <div>
                    <button type="submit" id="btn_search" name="search">Tìm kiếm</button>
                </div>
            </div>
        </form>
            <?php require '../controller/device_search_advaned_controller.php'; ?>
        <div class="count_device">
            <p>Số thiết bị tìm thấy: <?php echo count($result) ?></p>
        </div>

        <table>
            <tr>
                <th id="th_no">No</th>
                <th id="th_name">Tên thiết bị</th>
                <th id="th_status">Trạng thái</th>
                <th id="th_action">Action</th>
            </tr>
            <?php 
           
           for ($i = 0; $i <  count($result); $i++){  ?>
                <tr>
                    <td><?php echo $i+1 ?></td>
                    <td><?php echo $result[$i]['name'] ?></td>
                    <td>
                        <?php
                        if (isset($result[$i]['status']) && $result[$i]['status'] == 2 ) {
                            echo "Đang mượn";
                        } else {
                            echo "Đang rảnh";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($result[$i]['status']) && $result[$i]['status'] == 1) {
                            echo $action='<button id="btn_borrow"><a href="device_borrow_view.php">Mượn</a></button>';
                        } 
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
