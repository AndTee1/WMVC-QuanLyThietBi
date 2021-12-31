<?php 
  require '../common/define.php';
  require '../controller/teacher_add_confirm_controller.php';
  if($_GET['name']==""){
      header("Location: ../view/teacher_add_input_view.php");
  }
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
        <form action="" method='POST' name='addform' class="col-sm-12" id="addform">
            <div class="content col-md-12">
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Họ và Tên</p>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" name="name" disabled="true" value="<?php echo $name;?>">
                        
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Chuyên ngành</p>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" name="specialized" disabled="true" value="<?php foreach ($listSpecialized as $key=>$special) : ?><?php if($specialized==$key){ echo $special;}?><?php endforeach; ?>">
                      
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Học vị</p>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" name="degree" disabled="true" value="<?php foreach ($listDegree as $key=>$deg) : ?><?php if($degree==$key) {echo $deg;}?><?php endforeach; ?>">
                        
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Avatar</p>
                    </div>
                    <div class="col-sm-7">
                        <label for="" class="col-sm-8">
                           <img src="../../web/avata/teacherTMP/<?php echo $avata?>" alt="" style="width:35%">
                           
                        </label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-2">
                        <p>Mô tả thêm</p>
                    </div>
                    <div class="col-sm-7">
                        <label for="" class="col-sm-6">
                        <textarea type="input" rows="5" cols="70" name="description" id="description" disabled="true"> <?php echo $description?>
                        </textarea>  
                       
                        </label>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-12 btnadd">
                
                <button type='button' name='btnEdit' onclick="history.back()">Sửa lại</button>
                <button type='submit' name='btnAdd' id="btnAdd">Xác nhận</button>
            </div>
        </form>
    </div>
    <script>
        // document.getElementById('btnAdd').onclick = function () {
        //     document.getElementById("btnAdd").disabled = true;
        //     document.getElementById("addform").submit();
        // }
    </script>
</body>
</html>