<?php
	try {

			$bdd=new PDO("mysql:host=localhost;dbname=chat","root","");
		
	} catch (PDOException $e) {
		die("ERROR : ".$e->getMessage());
	}
?>