<?php
require '../common/define.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm giáo viên</title>
    <link rel="stylesheet" href="../../web/css/teacher/listTeacher.css">
</head>

<body>

    <div class="container">
        <form action="" method="GET">
            <div class="search">
                <div class="search__specialized">
                    <label for="">Chuyên ngành</label>
                    <select id="specialized" class="specialized__select" name="specialized">
                        <option value=''></option>
                        <?php
                        foreach ($listSpecialized as $key => $value) {
                            echo "<option value='$key'>$value</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="search__keyword">
                    <label for="">Từ khóa</label>
                    <input type="search" name="keyword" class="keyword__input" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
                </div>
                <div class="search__btn">
                    <input type="submit" name="search" value="Tìm kiếm" class="btn__submit">
                </div>
            </div>
        </form>
        <?php require '../controller/teacher_search_controller.php'; ?>
    </div>
    <script src=""></script>
</body>

</html>