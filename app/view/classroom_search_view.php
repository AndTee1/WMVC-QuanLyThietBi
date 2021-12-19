<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/room/listRoom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Tìm kiếm phòng học</title>
</head>
<body>
    <?php
        require '../model/classroom.php';

    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formsearch' action='../controller/classroom_search_controller.php' method='GETs'>
                <div class="col-md-12 filterbuilding">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Tòa nhà</div>
                    </div>
                    <div class="col-sm-6">
                    <select name="building" id="building" class="filter">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-12 seacrch">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Từ Khóa</div>
                    </div>
                    <div class="col-sm-6">
                        <label for="" style='width:100%'>
                            <input type="text" class="filter" id="filter" name="filter">
                        </label>
                    </div>
                </div>
                <div class="col-md-12" style='text-align: center;margin-top:20px'>
                        <button  type="button" class="filtervalue"  id="btn-search" name="search" >Tìm Kiếm</button>
                </div>
            </form>
        
            <div class="col-md-12">
                <table id="admin">
                    <tr class="header">
                        <th style="width:5%;">No</th>
                        <th style="width:20%;">Tên phòng học</th>
                        <th style="width:10%;">Tòa nhà</th>
                        <th style="width:40%;">Mô tả chi tiết</th>
                        <th style="width:20%;"> Action</th>
                    </tr>
                    <?php foreach ($listRoom as $room) : ?>
                        <tr>
                            <td><?php echo $room['id']?></td>
                            <td><?php echo $room['name']?></td>
                            <td><?php echo $room['building']?></td>
                            <td><?php echo $room['description']?></td>
                            <td><button type='submit' name='btnDelete'>Xóa</button>
                                <button type='submit' name='btnEdit' >Sửa</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                        
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>