<?php
    require "../controller/admin_reset_controller.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8" />
        <link rel="stylesheet" href="../../web/css/admin/reset.css">
    </head>
    <body>
        <div class="container">
        
                <table>
                    <tr>
                        <td class="NO">NO</td>
                        <td class="empty"></td>
                        <td class="username">Tên người dùng</td>
                        <td class="password" >Mật khẩu mới</td>
                        <td class="action">Action</td>
                    </tr>
                    <?php
                        $i = 1;
                        foreach($sql as $row){
                    ?>
            <form class="form" action="" method="POST">
                        <tr>
                            <td class="no"><?php echo $i; ?></td>
                            <td class="empty"></td>
                            <td class="username"><?php echo $row[0]; ?></td>
                            <td class="password">
                                <input type="password" name="<?php echo $row[0] ; ?>"
                                        value ="<?php echo $new_password[$row[0]];?>"
                                        <?php 
                                            if($error[$row[0]] != ""){
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
                            <td class="error"><span><?php echo $error[$row[0]] ?></span></td>
                            <td class="action"></td>
                        </tr>
            </form>
                    <?php
                            $i++;
                        }
                        $n = $i;
                    ?>
                    
                </table>
        </div>
    </body>
</html>