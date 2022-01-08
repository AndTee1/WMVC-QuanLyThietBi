<?php
    // load file model
    require "../model/admin.php";

    //show data to table
    $sql = getLoginIdArray();

    //define array and set to empty array, count variable
    $username = array();
    $error = array();
    $new_password = array();
    $index = 0;
    $flag = -1;

    foreach($sql as $row){
        $username[$index] = $row[0];
        $error[$row[0]] = '';
        $new_password[$row[0]] = '';
        $index++;
    }

    for($j = 0; $j < $index; $j++){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST[$username[$j]])){

                $new_password[$username[$j]] = $_POST[$username[$j]];
                if(strlen($_POST[$username[$j]]) == 0){
                    $error[$username[$j]] = "Hãy nhập mật khẩu mới";

                }else if(strlen($_POST[$username[$j]]) < 6){
                    $error[$username[$j]] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
                    
                }else {
                    date_default_timezone_set('Asia/Bangkok');
                    $current_time = date("Y-m-d H:i:s");
                    updatePassword($username[$j], $_POST[$username[$j]], $current_time);
                    $flag = $j;
                }
            }
        }
    }

    