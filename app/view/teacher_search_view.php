<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm giáo viên</title>
    <link rel="stylesheet" href="../../web/css/teacher/listTeacher.css">
</head>

<body>
    <?php
    session_start();
    require '../controller/teacher_search_controller.php';
    require '../common/define.php';
    checkLogin();
    ?>
    <button class="backHome">
        <a href="../../home.php">
            <img src="https://img.icons8.com/material-outlined/24/FFFFFF/home--v2.png" />
            <p>Trang chủ</p>
        </a>
    </button>
    <!-- Form search teacher -->
    <div class="container">
        <form action="" method="GET">
            <div class="search">
                <div class="search__specialized">
                    <label class="specialized__label">Chuyên ngành</label>
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
                    <label class="keyword__label">Từ khóa</label>
                    <input type="text" name="keyword" class="keyword__input" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
                </div>
                <div class="search__btn">
                    <input type="submit" name="search" value="Tìm kiếm" class="btn__submit">
                </div>
            </div>
        </form>
        <!-- count number teacher -->
        <div class="count">
            <label class="count__teacher">Số giáo viên tìm thấy : <?php echo count($rowAll); ?></label>
        </div>
        <!-- table data teacher -->
        <table>
            <tr class="tr__label">
                <th class="th__id">No</th>
                <th class="th__username">Tên Giáo Viên</th>
                <th class="th__specialized">Chuyên ngành</th>
                <th class="th__description">Mô tả chi tiết</th>
                <th class="th__action">Action</th>
            </tr>
            <?php if (isset($_GET['search'])) {
                foreach ($rowAll as $k => $v) {
                    $valid = true;
            ?>
                    <tr>
                        <td><label><?php print_r($k + 1) ?></label></td>
                        <td><label><?php print_r($v['name']) ?></label></td>
                        <td>
                            <label><?php
                                    foreach ($listSpecialized as $key => $value) {
                                        if ($key == $v['specialized']) {
                                            echo $value;
                                        }
                                    }
                                    ?></label>
                        </td>
                        <td><label><?php print_r($v['description']) ?></label></td>
                        <?php
                        foreach ($r as $key => $value) {
                            if ($value['teacher_id'] == $v['id']) {
                                $valid = false;
                            }
                        }
                        ?>
                        <td>
                            <?php if ($valid) { ?>
                                <button id="<?php print_r($v['id']); ?>" onclick="confirmDelete(this)" class="delete" data-confirm="Bạn chắc chắn muốn xóa giáo viên <?php print_r($v['name']); ?> ?">Xóa</button>
                                <button>
                                    <a href="../view/teacher_edit_input_view.php<?php echo '?id=' . $v['id']; ?>">Sửa</a>
                                </button>
                            <?php   } ?>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
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
</body>

</html>