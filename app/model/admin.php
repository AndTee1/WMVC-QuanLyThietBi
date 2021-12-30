<?php

	// function return query get login_id
	function getLoginId($login_id){

		// require file connect database
		require '../common/connectDB.php';

		// query
		$sql = $conn->prepare("SELECT login_id FROM `admins` WHERE login_id = '" . $login_id . "' ");
        $sql ->execute();

		return $sql;
	}

	// function update reset_password_token
	function updateResetPasswordToken($login_id, $token){

		// require file connect database
		require '../common/connectDB.php';

		// query
		$sql = $conn->prepare("UPDATE `admins` SET `reset_password_token` = '" . $token . "' WHERE login_id = '" . $login_id . "' ");
        $sql ->execute();

		return $sql;

	}

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

?>
