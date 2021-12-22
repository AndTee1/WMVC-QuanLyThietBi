<?php 
  require '../common/define.php';
  require '../controller/teacher_add_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../web/css/teacher/addTeacher.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Đăng ký giáo viên</title>
</head>
<body>
    <div class="main container">
        <form action="" method='POST' name='addform' class="col-sm-12">
            <div class="content col-md-12">
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Họ và Tên</p>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" name="name">
                        <div><span><?php echo $nameErr;?></span></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Chuyên ngành</p>
                    </div>
                    <div class="col-sm-7">
                        <select name="specialized" id="specialized" class="specialized" >
                            <option value="none"></option>
                            <?php foreach ($listSpecialized as $key=>$specialized) : ?>
                                        <option value='<?php echo $key ?>'>
                                                    <?php echo $specialized ?>
                                        </option>
                            <?php endforeach; ?>
                        </select>
                        <div><span><?php echo $specializedErr;?></span></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Học vị</p>
                    </div>
                    <div class="col-sm-7">
                        <select name="degree" id="degree" class="degree" >
                            <option value="none"></option>
                            <?php foreach ($listDegree as $key=>$degree) : ?>
                                        <option value='<?php echo $key ?>'>
                                                    <?php echo $degree ?>
                                        </option>
                            <?php endforeach; ?>
                        </select>
                        <div><span><?php echo $degreeErr;?></span></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Avatar</p>
                    </div>
                    <div class="col-sm-7">
                        <label for="" class="col-sm-8">
                            <input type="text" name="avata" id="avata">
                            <div><span><?php echo $avatarErr;?></span></div>
                        </label>
                        <button type="button" name="btnAvata" class="col-sm-3">Browse</button>
                        
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Mô tả thêm</p>
                    </div>
                    <div class="col-sm-7">
                        <label for="" class="col-sm-6">
                        <textarea type="input" rows="5" cols="70" name="description" id="description">  
                        </textarea>  
                        <div><span><?php echo $descriptionErr;?></span></div>
                        </label>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-12 btnadd">
                <button type='submit' name='btnAdd'>Xác nhận</button>
            </div>
        </form>
    </div>
</body>
</html>