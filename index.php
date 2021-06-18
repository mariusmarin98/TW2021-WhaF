<?php
	

	$m = $_GET['m'];
	

	switch ($m) {
    case "signup":
        header( "Location: model/signup.php");
        break;
    case "homepage":
		session_start();
		if($_GET['sort']){
			header("Location: model/homepage.php?sort=".$_GET['sort']."");
			break;
		}
		if($_SESSION['prenume']){
			header("Location: model/homepage.php?prenume=". $_SESSION['prenume']."");
			break;
		}
		if($_GET['add']){
			$add = $_GET['add'];
			header("Location: model/homepage.php?add=".$add."");
			break;
		}
		header("Location: model/homepage.php");
		break;
    case "date_login":
        header("Location: model/date_login.php?");
		break;
	case "delogheaza":
		session_unset();
		session_destroy();
		unset($_SESSION['prenume']);
		header("Location: model/homepage.php");
        break;
	case "retete":
		header("Location: model/retete.php?");
        break;
	default:
		if($_GET['succes'])
			$succes = $_GET['succes'];
		header("Location: model/login.php?succes=".$succes."");

}



?>
	