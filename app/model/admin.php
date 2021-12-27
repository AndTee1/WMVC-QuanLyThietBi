<?php
	require '../common/connectDB.php';

	function getLoginId($login_id){
		$sql = $conn->prepare("SELECT `admins.login_id` FROM `admins` WHERE BINARY 
			". $login_id . " = `admins.login_id`");
        $sql ->execute();
		return $sql;
	}

?>