<?php
session_start();
function check_login($UserMail,$UserPassword) {
	if(isset($_SESSION['UserMail']) && isset($_SESSION['UserPassword'])) {
		return true;
	}
	else
		return false;
}

function get_UserMail() {
	return $_SESSION['UserMail'];
}

function get_UserPassword() {
	return $_SESSION['UserPassword'];
}



if(!check_login())
	header('location: ../index.php');
else {
	$username = get_UserMail();
	$enroll = get_UserPassword();
	header('location: Home.php');
}
?>