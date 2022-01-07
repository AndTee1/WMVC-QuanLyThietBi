<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logoutAction'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['name'] = '';
    $_SESSION['time'] = '';
    header("Locaiton:login.php");

}