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

?>