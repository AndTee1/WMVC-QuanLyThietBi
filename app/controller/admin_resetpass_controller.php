<?php
    require "../model/admin.php";

    // require "../view/admin_request_view.php" ;

    if(isset($_POST['login_id'])){
        $login_id = $_POST['login_id'];
        echo "hi";
        $count = getLoginId($login_id) ->rowCount();

        if($count == 1){
            require "../view/admin_reset_view.php" ;
        }else{
            $error = "Login id không tồn tại trong hệ thống";
        }
    }

?>