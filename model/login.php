<?php
	include_once "db.php";

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email_login  = test_input($_POST['email_login']);  
		$parola_login = test_input($_POST['parola_login']);

		if (filter_var($email_login, FILTER_VALIDATE_EMAIL)) {  //FUNCTIA ACEASTA VERIFICA DACA EMAILUL INTRODUS ESTE VALID
			if(strlen($parola_login)>7){
				if(preg_match('/[A-Z]/', $parola_login)){  //PAROLA TREBUIE SA CONTINA CEL PUTIN O LITERA MARE
					
					$select = mysqli_query($conn, "SELECT * FROM `utilizatori` WHERE `email` = '".$email_login."'") or exit(mysqli_error($conn));
					if(mysqli_num_rows($select)) {
						$rows = mysqli_fetch_assoc($select);

						if (password_verify($parola_login, $rows['parola'])) {
							session_start();
							$_SESSION["prenume"]=$rows['prenume'];
							$prenume = $rows['prenume'];
							header( "Location: ../index.php?m=homepage&prenume=".$_SESSION['prenume']."");
						}else{
							$err_login = "Parola este incorecta!";
							header("Location: login.php?err=".$err_login."");
						}
					}else{
						$err_login = "Email neasociat niciunui cont!";
						header("Location: login.php?err=".$err_login."");

					}

				}else{
					$err_login = "Parola trebuie sa contina cel putin o litera mare!";
					header("Location: login.php?err=".$err_login."");
				}
			}else{
				$err_login = "Parola trebuie sa aiba minim 8 caractere!";
				header("Location: login.php?err=".$err_login."");
			}
		}else{
			$err_login = "Emailul introdus nu este valid!";
			header("Location: login.php?err=".$err_login."");
		}
	}

	require '../views/login.php';
?>