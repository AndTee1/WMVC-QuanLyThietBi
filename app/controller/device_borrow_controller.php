<?php
require '../model/teacher.php';
require '../model/classroom.php';
require '../model/device.php';
// require '../common/connectDB.php';
$count = 0;
$nameErr = $teacherErr = $classroomErr = $start_transactionErr = $end_transactionErr = "";
$name = $teacher = $classroom = $start_transaction = $end_transaction = $device_id = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (($_POST["name"]) == "") {
        $nameErr = "Hãy nhập tên thiết bị *";
    } else {
        if ($listDevices->rowCount() > 0) {
            $result = $listDevices->fetchAll(PDO::FETCH_OBJ);
            for ($i = 0; $i <  count($result); $i++) {
                if ($_POST["name"] != $result[$i]->name) {
                    $count;
                } elseif (($_POST["name"] == $result[$i]->name)) {
                    $device_id = $result[$i]->id;
                    $count++;
                }
            }
            if ($count == 1) {
                $name = ($_POST["name"]);
            } else {
                $nameErr = "Tên thiết bị sai, hãy nhập lại *";
            }
        }
    }

    if ($_POST['teacher'] == "") {
        $teacherErr = "Hãy chọn giáo viên *";
    } else {
        $teacher = ($_POST["teacher"]);
    }

    if (($_POST["classroom"] == "")) {
        $classroomErr = "Hãy chọn lớp học *";
    } else {
        $classroom = ($_POST["classroom"]);
    }

    if (($_POST["start_transaction"]) == "") {
        $start_transactionErr = "Nhập thời gian bắt đầu mượn *";
    } else {
        $start_transaction = ($_POST["start_transaction"]);
    }

    if (($_POST["end_transaction"]) == "") {
        $end_transactionErr = "Nhập thời gian trả thiết bị *";
    } else {
        $end_transaction = ($_POST["end_transaction"]);
    }

    if($device_id != "" && $_POST['teacher'] != "" && $_POST['classroom'] != "" && $_POST['start_transaction'] != "" && $_POST['end_transaction'] != "") {
        $sql = "INSERT INTO  device_transactions (device_id,teacher_id,classroom_id, start_transaction_plan, end_transaction_plan) VALUES ('$device_id','$teacher', ' $classroom ','$start_transaction' ,'$end_transaction')";
        $conn->exec($sql);
    }
}

