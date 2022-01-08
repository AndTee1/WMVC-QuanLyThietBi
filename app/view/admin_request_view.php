<?php
    require "../controller/admin_request_controller.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8" />
        <link rel="stylesheet" href="../../web/css/admin/request.css">
    </head>
    <body>
        <div class="container">
            <form class="form" action="" method="POST">
                <div class="form-control">
                    <span>Người dùng</span>
                    <input type="text" name="login_id" id="login_id" autofocus
                            value="<?php echo $login_id;?>">
                </div>
                <p class="error"><?php echo $error; ?></p>
                <button>Gửi yêu cầu reset password</button>
            </form>
        </div>
    </body>
</html>