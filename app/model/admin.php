<?php
function checkAdmin($name, $pass)
{
    //require_once $_SERVER['DOCUMENT_ROOT'] . "/app/common/connectDB.php";
    require 'app/common/connectDB.php';
    $sql = "SELECT * FROM `admins` WHERE `login_id` = '{$name}' AND `password` = '{$pass}'";
    $result = $conn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $name;

        date_default_timezone_set('Asia/Bangkok');
        $_SESSION['time'] = date("Y-m-d H:i");
        return true;
    } else {
        $_SESSION['loggedin'] = false;
        $_SESSION['name'] = '';
        $_SESSION['time'] = '';
        return false;
    }
}