<?php
    include '../common/define.php';
    require '../common/connectDB.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÌm kiếm giáo viên</title>
    <link rel="stylesheet" href="../../web/css/teacher/listTeacher.css">
</head>
<body>
    
    <form action="" method="GET">
            <div class="search">
                <div class="search__specialized">
                    <label for="">Chuyên ngành</label>
                    <select id="specialized" class="specialized__select" name="specialized">
                        <option value=''></option>
                            <?php
                                foreach( $listSpecialized as $key => $value ) {
                                    echo "<option value='$key'>$value</option>";
                                }
                             ?>
                    </select>
                </div>
                <div class="search__keyword">
                    <label for="">Từ khóa</label>
                    <input type="search" name="keyword" class="keyword__input" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>" >
                </div>
                <div class="search__btn">
                    <input type="submit" name="search" value="Tìm kiếm" class="btn__submit">
                </div>
            </div>
    </form>
    <div class="count__teacher">
        <p>Số giáo viên tìm thấy:</p>
    </div>
    <table>
            <tr class="tr__label">
				<th class="th__id">No</th>
                <th class="th__username">Tên Giáo Viên</th>
                <th class="th__specialized">Chuyên ngành</th>
                <th class="th__description">Mô tả chi tiết</th>
                <th class="th__action">Action</th>
            </tr>
            <?php include '../../app/controller/teacher_search_controller.php'?>
    </table>
    <script>
        let deleteLinks = document.querySelectorAll('.delete');
        for (let i = 0; i < deleteLinks.length; i++) {
            deleteLinks[i].addEventListener('click', function(event) {
                event.preventDefault();
                let id_teacher=this.getAttribute('id');
                let url = "../controller/teacher_delete_controller.php?id="+id_teacher;
                if (confirm(this.getAttribute('data-confirm'))) {
                    const xhttp = new XMLHttpRequest();
                    xhttp.open("GET",url);
                    xhttp.send();
                }
            });
            
        }
    </script>
   
</body>
</html>