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
<<<<<<< HEAD

=======
    <button class="backHome">
        <a href="../../home.php">
            <img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" />
            <p>Trang chủ</p>
        </a>
    </button>
    <!-- Form search teacher -->
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
    <div class="container">
        <form action="" method="GET">
            <div class="search">
                <div class="search__specialized">
<<<<<<< HEAD
                    <label for="">Chuyên ngành</label>
=======
                    <label class="specialized__label">Chuyên ngành</label>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
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
<<<<<<< HEAD
                    <label for="">Từ khóa</label>
                    <input type="search" name="keyword" class="keyword__input" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
=======
                    <label class="keyword__label">Từ khóa</label>
                    <input type="text" name="keyword" class="keyword__input" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                </div>
                <div class="search__btn">
                    <input type="submit" name="search" value="Tìm kiếm" class="btn__submit">
                </div>
            </div>
        </form>
<<<<<<< HEAD
        <?php require '../controller/teacher_search_controller.php'; ?>
    </div>
    <script src=""></script>
=======
        <div class="count">
            <label class="count__teacher">Số giáo viên tìm thấy : <span id="count">0</span></label>
        </div>
        <table>
            <tr class="tr__label">
                <th class="th__id">No</th>
                <th class="th__username">Tên Giáo Viên</th>
                <th class="th__specialized">Chuyên ngành</th>
                <th class="th__description">Mô tả chi tiết</th>
                <th class="th__action">Action</th>
            </tr>
            <?php require '../controller/teacher_search_controller.php'; ?>
        </table>
        <!-- Popup confirm delete -->
        <div id="myPopup" class="popup">
            <div class="popup__dialog">
                <div class="popup__content">

                    <div class="popup__header">
                        <h4 class="popup__title">Delete Teacher</h4>
                        <button type="button" class="button__close" onclick="closePopup()">x</button>
                    </div>

                    <div class="popup__body">
                        <p id="confirm"></p>
                        <form method="POST" action="" id="form-delete-teacher">
                            <input type="hidden" name="id">
                        </form>
                    </div>

                    <div class="popup__footer">
                        <button type="button" class="button__cancel" onclick="closePopup()">Cancel</button>
                        <button type="submit" form="form-delete-teacher" class="button__confirm">OK</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Link javascript -->
    <script type="text/javascript" src="../../web/js/searchTeacher.js"></script>
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
</body>

</html>