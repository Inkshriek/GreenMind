<?php
	session_start();

	if (!isset($_SESSION["loggedin"])) {
		$_SESSION["loggedin"] = false;
	}
	if (!isset($_SESSION["user"])) {
		$_SESSION["user"] = "";
	}
	if (!isset($_SESSION["email"])) {
		$_SESSION["email"] = "";
	}
	if (!isset($_SESSION["location"])) {
		$_SESSION["location"] = "";
	}
	if (!isset($_SESSION["emailupdates"])) {
		$_SESSION["emailupdates"] = 0;
	}
	if (!isset($_SESSION["id"])) {
		$_SESSION["id"] = 0;
	}

	$connection = mysqli_connect("localhost", "root", "", "userdata");
	if (!$connection) {
		echo "<script type='text/javascript'>console.log('The database connection could not be established. Account features may not work.');</script>";
		$_SESSION["loggedin"] = false;
		$_SESSION["user"] = "";
		$_SESSION["id"] = 0;
	}

	function goback() {
		header("Location: {$_SERVER['HTTP_REFERER']}");
		exit;
	}

?>
