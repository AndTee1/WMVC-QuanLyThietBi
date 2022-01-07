<?php 
    require '../model/device.php';
    if(isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
    }else
        $keyword = '';

    if(isset($_GET['status'])){
        $status = $_GET['status'];
    }else
        $status = '';

    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $result = searchADVDevice($keyword, $status);
    }
?>
