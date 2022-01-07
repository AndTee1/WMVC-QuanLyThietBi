<?php
require '../model/teacher.php';
require '../model/transaction.php';

if (isset($_GET['search'])) {
    $keyword = trim($_GET['keyword']);
    $specialized = $_GET['specialized'];
    $rowAll = searchData($keyword, $specialized);
    $r = $listDevices_transactions->fetchAll(); ?>
    <script>
        document.getElementById('count').innerHTML = <?php echo count($rowAll); ?>
    </script>
    <?php
    foreach ($rowAll as $k => $v) {
        $valid = true;
    ?>
        <tr>
            <td><?php print_r($v['id']) ?></td>
            <td><?php print_r($v['name']) ?></td>
            <td>
                <?php
                foreach ($listSpecialized as $key => $value) {
                    if ($key == $v['specialized']) {
                        echo $value;
                    }
                }
                ?>
            </td>
            <td><?php print_r($v['description']) ?></td>
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
    if (isset($_POST['id'])) {
        deleteData($_POST['id']);
        $url = '../view/teacher_search_view.php?specialized=' . $specialized . "&keyword=" . $keyword . "&search=" . $_GET["search"];
    ?>
        <script>
            window.location.href = "<?php $url ?>";
        </script>
<?php
    }
}
?>