<?php
require '../model/teacher.php';


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
                <a href="teacher_edit_input_view.php<?php echo '?id=' . $row['id']; ?>">Sửa</a>
            </button>
        </td>
    </tr>
<?php
}

?>