<?php
require '../common/define.php';
require '../model/teacher.php';
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
        <?php require '../controller/teacher_search_controller.php' ?>
        <?php
        while ($row = $listTeacher->fetch()) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td>
                    <?php
                    foreach ($listSpecialized as $key => $value) {
                        if ($key == $row['specialized']) {
                            echo $value;
                        }
                    }
                    ?>
                </td>
                <td><?php echo $row['description'] ?></td>
                <td>

                    <button id="<?php echo $row['id'] ?>" class="delete" data-confirm="Bạn chắc chắn muốn xóa <?php echo $row['name'] ?> ?">Xóa</button>
                    <button>
                        Sửa
                        <a href="teacher_edit_input_view.php<?php echo '?id=' . $row['id']; ?>"></a>
                    </button>
                </td>
            </tr>
        <?php
        }

        ?>
    </table>

</body>

</html>