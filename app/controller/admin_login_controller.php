<?php
//require_once $_SERVER['DOCUMENT_ROOT'] . "/app/model/admin.php";
require 'app/model/admin.php';
$nameErr = $passwordErr = "";
$name = $password = "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Hãy nhập login id";
        $valid = false;
    } else if (strlen($_POST["name"]) < 4) {
        $nameErr = "Hãy nhập login id tối thiểu 4 ký tự";
        $valid = false;
    } else {
        $name = ($_POST["name"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Hãy nhập password";
        $valid = false;
    } else if (strlen($_POST["password"]) < 6) {
        $passwordErr = "Hãy nhập password tối thiểu 6 ký tự";
        $valid = false;
    } else {
        $password = ($_POST["password"]);
    }

    if ($valid) {
        if (checkAdmin($name, $password)) {
            echo "<script> window.location.assign('home.php'); </script>";
        } else {
            $passwordErr = "login id và password không đúng";
        }
    }
}
