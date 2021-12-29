<?php
        require '../controller/device_edit_controller.php';
        require '../common/connectDB.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/device/editDevice.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <title>Sửa thiết bị</title>
</head>
<body>
    <div class="content container">
        <form name='formconfirm' action='' method='POST' class="col-sm-12"> 
            <div class="col-md-12">  
                <div class="col-md-12">
                    <div class="col-sm-2">
                    <label class="input-form" for="name">Tên thiết bị</label>
                    </div>
                    <div class="col-sm-7">
                        <label for="" style='width: 100%'>
                            <input type="text" class="filter" id="name" name="name">
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"></span></div>
                    </div>
                </div>                               
                <div class="col-md-12">
                    <div class="col-sm-2">
                    <label class="input-form" for="name">Mô tả chi tiết</label>
                    </div>
                    <div class="col-sm-7">
                        <label for="">
                            <textarea type="input" rows="5" cols="60" name="description" id="description" style="border: 1px solid #385d8a; background-color: #e1eaf4">
                            </textarea>
                        </label>                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"></span></div>
                    </div>
                </div>                                
                <div class="col-sm-12">
                    <div class="col-sm-2">
                    <label class="input-form" for="name">Avatar</label>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <input type="file" name="image" value="" class="form-control">
                </div>
            </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-sm-7">
                        <div><span class="error"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 confirm">
                <button type="submit" class="btn btn-danger">Quay lại</button>
                <button type="submit" id="btn-confirm" name="btn-confirm">Xác nhận sửa</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>