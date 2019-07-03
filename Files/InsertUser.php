<?php 
	
	include "classes.php";
	$user=new user();

	if(isset($_POST['UserName']) && isset($_POST['UserNamel']) && isset($_POST['UserMail']) && isset($_POST['UserPassword']))
	{
		$UserNamef = $_POST['UserName'];
		$UserNamel = $_POST['UserNamel'];
		$UserName = $UserNamef." ".$UserNamel;
		$user->setUserName($UserName);
		$user->setUserMail($_POST['UserMail']);
		$user->setUserPassword(sha1($_POST['UserPassword']));
		$user->InsertUser();
		echo "su";
		header("LOCATION: ../index.php?success=1");
	}
	echo "lol";
 ?>

