<?php 
  require '../common/define.php';
  require '../controller/teacher_add_controller.php';
//   if(isset($_POST['btnAvata'])){
    
//       echo '<img src="../../web/avata/'+$file_part+'.jpg" width="100%"/>';
//   }
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
    <style>
    .lableupload{
    display: inline-block;
    background-color: #4f81bd;
    color: black;
    border: none;
    cursor: pointer;
    text-align: center;
    line-height: 45px;
    margin-bottom: 0px;
    }
    #upload{
        display: none !important;
    }
    input,select{
        min-height: 40px !important;
    }
    .custombackhome{
        margin:10px 5px;
        display: flex;
        border-radius:8px;
    }
    .custombackhome>a{
        color:white !important;

    }
   
    </style>
</head>
<body>
<button class="custombackhome"><a href="../../home.php"><img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png"/>Trang chủ</a></button>
    <div class="main container">
        <form action="" method='POST' name='addform' class="col-sm-12" enctype="multipart/form-data">
            <div class="content col-md-12">
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Họ và Tên</p>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" name="name" >
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
                    <div class="col-sm-7" style="display:flex">
                        <label for="" class="col-sm-10" style="display:flex">
                            <input type="text" name="upload" id="avata" >
                            
                        </label>
                        <div class="col-sm-3">
                        <input type="file" id="upload" name="upload" onchange="myFunction(this)"/>
                        <label for="upload" class="lableupload" id="labelup" style="width:120%!important"> Browse</label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-7" style="padding-left: 6px;">
                            <span><?php echo $avatarErr;?></span></div>
                        </div>
                       
                   
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Mô tả thêm</p>
                    </div>
                    <div class="col-sm-7">
                        <label for="" class="col-sm-6">
                        <textarea type="text" rows="5" cols="70" name="description" id="description">  
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
    <script>
        if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
 
        function myFunction(target) {
            document.getElementById("avata").value = target.files[0].name;
            // document.getElementById("avata").value =fileVal;
            // console.log(fileVal);
        }
        
        
        
    </script>
</body>
</html>