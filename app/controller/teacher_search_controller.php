<?php
require '../model/teacher.php';
require '../model/transaction.php';
$rowAll = array();
if (isset($_GET['search'])) {
    $keyword = trim($_GET['keyword']);
    $specialized = $_GET['specialized'];
    $rowAll = searchData($keyword, $specialized);
    $r = $listDevices_transactions->fetchAll(); ?>
    <?php
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