<?php
<<<<<<< HEAD
=======
    require "../common/define.php";

>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
    // load file model
    require "../model/admin.php";

    //show data to table
    $sql = getLoginIdArray();

    //define array and set to empty array, count variable
    $username = array();
    $error = array();
    $new_password = array();
    $index = 0;
<<<<<<< HEAD
=======
    $flag = -1;
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294

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
                    updatePassword($username[$j], $new_password, $current_time);
<<<<<<< HEAD
                    $index--;
=======
                    $flag = $j;
>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
                }
            }
        }
    }
<<<<<<< HEAD
=======

>>>>>>> 306d3ca1b6cfcf46ba0b3b269ca8979e9d48d294
    