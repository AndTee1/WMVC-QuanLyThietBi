<?php
    // load file model
    require "../model/admin.php";

    // define array and set to empty array
    $error = array("admin001"=>"", "admin002"=>"", "admin003"=>"", "adminweb63"=>"");
    $new_password = array("admin001"=>"", "admin002"=>"", "admin003"=>"", "adminweb63"=>"");

    // show data to table
    $sql = getLoginIdArray();

    // validate 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['admin001'])){
            $new_password['admin001'] = $_POST['admin001'];

            if(strlen($_POST['admin001']) == 0){
                $error['admin001'] = "Hãy nhập mật khẩu mới";
            }else if(strlen($_POST['admin001']) < 6){
                $error['admin001'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else {
                date_default_timezone_set('Asia/Bangkok');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin001', $new_password, $current_time);
                $sql = getLoginIdArray();
            }
        }

        if(isset($_POST['admin002'])){
            $new_password['admin002'] = $_POST['admin002'];

            if(strlen($_POST['admin002']) == 0){
                $error['admin002'] = "Hãy nhập mật khẩu mới";
            }else if(strlen($_POST['admin002']) < 6){
                $error['admin002'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else{
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin002', $new_password, $current_time);
                $sql = getLoginIdArray();
            }
        }

        if(isset($_POST['admin003'])){
            $new_password['admin003'] = $_POST['admin003'];

            if(strlen($_POST['admin003']) == 0){
                $error['admin003'] = "Hãy nhập mật khẩu mới";
            }else if(strlen($_POST['admin003']) < 6){
                $error['admin003'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else{
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('admin003', $new_password, $current_time);
                $sql = getLoginIdArray();
            }
        }

        if(isset($_POST['adminweb63'])){
            $new_password['adminweb63'] = $_POST['adminweb63'];

            if(strlen($_POST['adminweb63']) == 0){
                $error['adminweb63'] = "Hãy nhập mật khẩu mới";
            }else if(strlen($_POST['adminweb63']) < 6){
                $error['adminweb63'] = "Hãy nhập mật khẩu có tối thiểu 6 ký tự";
            }else{
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $current_time = date("Y-m-d h:i:s");
                updatePassword('adminweb63', $new_password, $current_time);
                $sql = getLoginIdArray();
            }
        }
            


        
    }

?>