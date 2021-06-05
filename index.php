<?php
	

	$m = $_GET['m'];
	

	switch ($m) {
    case "signup":
        header( "Location: model/signup.php");
        break;
    case "homepage":
		if($_GET['prenume']){
			$prenume = $_GET['prenume'];
			header("Location: model/homepage.php?prenume=".$prenume."");
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
		header("Location: model/login.php?");
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
	