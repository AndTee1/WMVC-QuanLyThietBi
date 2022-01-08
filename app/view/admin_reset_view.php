<?php
    session_start();
    require "../common/define.php";
    checkLogin();

    require "../controller/admin_reset_controller.php";

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="uft-8" />
        <link rel="stylesheet" href="../../web/css/admin/reset.css">
    </head>

    <body>
        <button class="custombackhome">
            <a href="../../home.php">Trang chủ</a>
        </button>
        <div class="container">

            <table>
                <tr>
                    <td class="NO">NO</td>
                    <td class="empty"></td>
                    <td class="username">Tên người dùng</td>
                    <td class="password">Mật khẩu mới</td>
                    <td class="action">Action</td>
                </tr>
                <?php
                for ($i = 0; $i < $index; $i++) {
                    if($flag == $i && $flag < $index - 1){
                        for($j = $i; $j < $index - 1; $j++){
                            $username[$j] = $username[$j+1];
                        }
                        $index--;
                    }else if($flag == $index - 1){
                        $index--;
                    }

                    if($index == 0) break;

                ?>
                    <form class="form" action="" method="POST">
                        <tr>
                            <td class="no"><?php echo $i +1; ?></td>
                            <td class="empty"></td>
                            <td class="username"><?php echo $username[$i]; ?></td>
                            <td class="password">
                                <input type="password" name="<?php echo $username[$i]; ?>"
                                    value="<?php echo $new_password[$username[$i]]; ?>" 
                                    <?php
                                    if ($error[$username[$i]] != "") {
                                        echo " autofocus";
                                    }
                                    ?>>
                            </td>
                            <td class="action"><button>Reset</button></td>
                        </tr>
                        <tr>
                            <td class="no"></td>
                            <td class="empty"></td>
                            <td class="username"></td>
                            <td class="error"><span><?php echo $error[$username[$i]]; ?></span></td>
                            <td class="action"></td>
                        </tr>
                    </form>
                <?php
                }
                ?>

            </table>
        </div>
    </body>

</html>