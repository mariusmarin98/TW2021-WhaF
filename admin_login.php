<?php

	session_start();
	session_unset();
	session_destroy();
	if(isset($_POST['submit_login'])){
		if($_POST['nume_login']=="adminEu" && $_POST['parola_login']=="Parolaadmin1234"){
			session_start();
			$_SESSION['admin']="on";
			header("Location: model/admin.php");
		}
	}
	require 'views/admin_login.php';
?>