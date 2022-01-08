<?php
session_start();
require 'app/controller/admin_login_controller.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web/css/admin/login.css">
    <title>Login</title>
</head>

<body>
    <form action='' method='POST'>
        <ul>
            <li>
                <label for="userid">Người dùng</label>
                <input name="name" type="text" id="userid" name="user_id" size="30" />
                <div>
                    <span class="error"><?php echo $nameErr; ?></span>
                </div>
            </li>
            <li>
                <label for="password">Password</label>
                <input name="password" type="password" id="password" name="password" size="30" />
                <div>
                    <span class="error"><?php echo $passwordErr; ?></span>
                </div>
            </li>
            <li>
                <div class="ct">
                    <a href="app/view/admin_request_view.php" style="font-style: italic;">Quên password</a>
                </div>
            </li>
            <li>
                <div class="ct">
                    <button type="submit" id="btn-confirm" name="btn-confirm">Đăng nhập</button>
                </div>
            </li>
        </ul>
    </form>
</body>

</html>