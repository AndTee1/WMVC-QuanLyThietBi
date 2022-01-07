<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/room/listRoom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Tìm kiếm phòng học</title>
    <style>
        dialog{
            min-width:200px;
            min-height:250px
        }
        .debai{
            min-height: 100px;
            margin: auto;
            /* width: 80%; */
            text-align: center;
            line-height: 170px;
            font-size: 24px;
        }
        .btn-style{
            background-color:#FF3C33;
            color: black;
            border: none;    
            font-size: 18px;
            padding:12px 5px;
            margin:0px 10px ;
            min-width: 90px;
        }
        .btn1-style{
            background-color: #4f81bd;
            color: black;
            border: none;    
            font-size: 18px; 
            padding:12px 5px;
            margin:0px 10px ;
            min-width: 90px;
        }
    </style>
</head>
<body>
    <?php
        require '../controller/classroom_search_controller.php';
        require '../common/define.php';
       
    ?>
    <div class="content container">
        <div class='col-md-12'>
            <form name='formsearch' method='GET'>
                <div class="col-md-12 filterbuilding">
                    <div class="col-md-2"></div>
                    <div class="col-sm-2">
                        <div class="word">Tòa nhà</div>
                    </div>
                    <div class="col-sm-6">
                        <select name="building" id="building" class="filter" >
                            <option value="none"></option>
                            <?php foreach ($listBuilding as $key=>$building) : ?>
                                        <option value='<?php echo $key ?>'>
                                                    <?php echo $building ?>
                                        </option>
                            <?php endforeach; ?>
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
                        <button  type="submit" class="filtervalue"  id="btn-search" name="search" >Tìm Kiếm</button>
                </div>
            </form>

        
            <div class="col-md-12">
            <div class="count col-md-12">
                 <label class="count__teacher">Số phòng học tìm thấy : <?php echo count($rowAll) ?></label>
            </div>
                <table id="admin">
                    <tr class="header">
                        <th style="width:5%;">No
                        </th>
                        <th style="width:20%;">Tên phòng học
                        </th>
                        <th style="width:10%;">Tòa nhà
                        </th>
                        <th style="width:40%;">Mô tả chi tiết
                        </th>
                        <th style="width:20%;"> Action
                        </th>
                    </tr>
<<<<<<< HEAD
                    <?php foreach ($rowAll as $room) : ?>
=======
                    <?php foreach ($rowAll as $key=>$room) : ?>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                        <tr>
                            <form action="" 
                                  method='POST'>
                                <td>
                                    <?php echo $key+1?>
                                    <input type="hidden" 
                                           name='id' 
                                           value='<?php echo $room['id']?>' >
                                </td>
                                <td>
                                    <?php echo $room['name']?>
                                </td>
                                <td>
                                    <?php foreach ($listBuilding as $key=>$building) : ?>
                                        <?php 
                                            if($room['building'] == $key){
                                                echo $building;
                                            }
                                        ?>
                                    <?php endforeach; ?>
                                </td>
                                <td><?php echo $room['description']?></td>
                                <td>
                                    <!-- <form action="" method="GET"> -->
                                    <button type='button' 
                                            name='btnDelete'
                                            id='dialogshow' 
                                            onclick="document.getElementById('my-dialog-<?php echo $room['id']?>').showModal();" >Xóa</button>
                                            <dialog id="my-dialog-<?php echo $room['id']?>" style="border:1px solid #4da6ff ">
                                                <!-- <form method="GET" name="deleteform"> -->
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-12 debai">
                                                            Bạn chắc chắn xóa phòng học <?php echo $room['name']?>!!!
                                                            <input type="hidden" name="infoID" value="<?php echo $room['id']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="col-sm-8"></div>
                                                        <div class="col-sm-3"style="text-align:right;display:flex">
                                                            <button  type="submit" id="oki5" class="btn1-style" name='delete'>ConFirm</button>
                                                            <button type="button" id="close5"  class="btn-style" 
                                                            onclick="document.getElementById('my-dialog-<?php echo $room['id']?>').close();">Cancle</button>
                                                        </div>
                                                            
                                                    </div>
                                                
                                                <!-- </form> -->
                                            </dialog>
                                    <!-- </form> -->
                                    <button type='button' 
                                            name='btnEdit' 
                                            onclick='window.location.href="classroom_edit_input_view.php?id="+"<?php echo $room['id']?>"'
                                             >Sửa</button>
                                </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="../../web/js/dialogDeleteRoom.js"></script>
   
</body>
</html>