<?php
    require "../common/define.php";
    
    // load file model
    require "../model/admin.php";

    // define variables and set to empty values
    $error = "";
    $login_id = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST['login_id'])){

            $login_id = $_POST['login_id'];

            // min length == 4
            if(strlen($_POST['login_id']) < 4){
                $error = "Hãy nhập login id tối thiểu 4 ký tự" ;
            }else {

                // exist login_id on database
                $count = getLoginId($login_id) ->rowCount();
                if($count == 1){
                    $token = microtime();
                    updateResetPasswordToken($login_id, $token);
                    header("Location: ../../login.php");
                }else{
                    $error = "Login id không tồn tại trong hệ thống";
                }
            }
        }else{
            //require login id
            $error = "Hãy nhập login id" ;
        }
    }

?>