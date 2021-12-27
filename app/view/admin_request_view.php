<?php
// define variables and set to empty values
$error = "";
$username = "";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8" />
        <link rel="stylesheet" href="/WMVC-QuanLyThietBi/web/css/admin/resetpass.css">
    </head>
    <body>
        <div class="container">
            <form class="form" action="../controller/admin_resetpass_controller.php" method="$_POST">
                <p class="error"><?php $error; ?></p>
                <div class="form-control">
                    <span>Người dùng</span>
                    <input type="text" name="login_id" id="login_id" autofocus>
                </div>
                <button>Gửi yêu cầu reset password</button>
            </form>
        </div>
    </body>
</html>