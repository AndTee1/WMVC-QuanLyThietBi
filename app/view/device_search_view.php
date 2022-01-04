<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÌm kiếm thiết bị</title>
    <link rel="stylesheet" href="../../web/css/device/searchDevice.css">
</head>

<body>
    <div class="content container">
        <form action="" method="GET">
            <div class="search">
                <div class="search_keyword">
                    <label>Từ khóa</label>
                    <input type="text" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword'] ?>" name="keyword">
                </div>
                <div class="search_status">
                    <label>Tình trạng</label>
                    <select id="status" name="status">
                        <option value=''>Tất cả</option>
                        <option value="1" <?php if(isset($_GET['status']) && $_GET['status'] == 1) echo 'selected' ?> >Đang rảnh</option>
                        <option value="2"  <?php if(isset($_GET['status']) && $_GET['status'] == 2) echo 'selected' ?>>Đang mượn</option>
                    </select>
                </div>
                <div>
                    <button type="submit" id="btn_search">Tìm kiếm</button>
                </div>
            </div>
        </form>
        <?php require '../controller/device_search_controller.php'; ?>
        <div class="count_device">
            <p>Số thiết bị tìm thấy: <?php echo count($resultSearch) ?></p>
            
        </div>
        <table>
            <tr>
                <th id="th_no">No</th>
                <th id="th_name">Tên thiết bị</th>
                <th id="th_status">Trạng thái</th>
                <th id="th_action">Action</th>
            </tr>
            <?php 
           
            foreach ($resultSearch as $row) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td>
                        <?php
                        if (isset($row['status']) && $row['status'] == 2 ) {
                            echo "Đang mượn";
                        } else {
                            echo "Đang rảnh";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($row['status']) && $row['status'] == 1) {
                            
                           //$b = '<button class="btn_delete"><a href="device_delete_view.php?id=' .  $row['id'] . '">Xóa</a></button> <button class="btn_delete"><a href="device_edit_view.php?id=' .  $row['id'] . '">Sửa</a></button>';
                           
                          $b = '<a href="../controller/device_search_controller.php?delete=true&id=' . $row['id'] .'" class="btn_delete" onclick="return confirm(`Bạn chắc chắn muốn xóa thiết bị?`)">Xóa</a>';
                            echo $b;
                        } else {
                            
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