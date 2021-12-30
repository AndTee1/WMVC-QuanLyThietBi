<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÌm kiếm nâng cao</title>
    <link rel="stylesheet" href="../../web/css/device/searchAdvancedDevice.css">
</head>

<body>
    <div class="content container">
        <form action="" method="GET">
            <div class="search">
                <div class="search_keyword">
                    <label >Từ khóa</label>
                    <input type="text" name="keyword">
                </div>
                <div class="search_status">
                    <label >Tình trạng</label>
                    <select id="status"  name="status">
                        <option value=''></option>
                        <option>Đang rảnh</option>
                        <option>Đang mượn</option>
                    </select>
                </div>          
                <div>
                    <button type="submit" id="btn_search" name="search">Tìm kiếm</button>
                </div>
            </div>
        </form>
        <div class="count_device">
            <p>Số thiết bị tìm thấy:</p>
        </div>

        <table>
            <tr>
                <th id="th_no">No</th>
                <th id="th_name">Tên thiết bị</th>
                <th id="th_status">Trạng thái</th>
                <th id="th_action">Action</th>
            </tr>
            <?php require '../controller/device_search_advaned_controller.php';?>
            <?php
            foreach ($r as $row) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td>
                        <?php                             
                            if($row['returned_date'] === null and $row['device_id'] !== null){
                                echo "Đang mượn";
                            }
                            else{
                                echo "Đang rảnh";
                            }
                        ?>
                    </td>
                    <td>
                        <?php  
                            if($row['returned_date'] === null and $row['device_id'] !== null){            
                            }else{                           
                                $b='<button id="btn_borrow"><a href="device_borrow_view.php">Mượn</a></button>';
                                echo $b;
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
