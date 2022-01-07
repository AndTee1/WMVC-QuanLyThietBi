<?php
    require "../model/device.php";
    require "../model/teacher.php";


    $result = [];
    $list_teacher = deTeacher();
    if($_SERVER['REQUEST_METHOD'] == "GET"){

        if (isset($_GET["search"])) {
                if(isset($_GET['devices_name'])){
                    $device_name = $_GET['devices_name'];
                }
                if(isset($_GET['teachers_id'])){
                    $teacher_id = $_GET['teachers_id'];
                }
                $result = history_transaction($device_name, $teacher_id);
        }
    }

    function formatDate($date)
    {
        $date = date('Y-m-d h:i:s', strtotime($date));
        $new_date = date('h:i d/m/Y', strtotime($date));
        return $new_date;
    }
?>