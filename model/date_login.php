<?php
	
	include_once "db.php";


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nume          = test_input($_POST['nume']);  //INCARCAM FIECARE INPUT DIN HTML IN VARIABILE PHP PRIN METODA POST
		$prenume       = test_input($_POST['prenume']);
		$email         = test_input($_POST['email']);
		$parola        = test_input($_POST['parola']);
		$con_parola    = test_input($_POST['con_parola']);
		$sex           = test_input($_POST['sex']);
		$data_nasterii = test_input($_POST['data_nasterii']);

		if($parola == $con_parola){  
			if(ctype_alpha($nume)){
				if(strlen($nume)>=3){
					if(strlen($nume)<=25){
						if(strlen($prenume)>=3){
							if(strlen($prenume)<=25){
								if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  //FUNCTIA ACEASTA VERIFICA DACA EMAILUL INTRODUS ESTE VALID
									if(strlen($parola)>7){
										if(preg_match('/[A-Z]/', $parola)){ //PAROLA TREBUIE SA CONTINA CEL PUTIN O LITERA MARE
											if(ctype_alpha($prenume)){
											
												$select = mysqli_query($conn, "SELECT `email` FROM `utilizatori` WHERE `email` = '".$email."'") or exit(mysqli_error($conn));
												
												if(!mysqli_num_rows($select)) {
													
													$parola_hash = password_hash($parola, PASSWORD_DEFAULT);
											
													$sql= "INSERT INTO utilizatori (nume, prenume, email, parola, sex, data_nasterii) VALUES ('$nume', '$prenume', '$email', '$parola_hash', '$sex', '$data_nasterii');";
													mysqli_query($conn, $sql);

													$succes = "Contul a fost creat cu succes!";

													header("Location: ../index.php?succes=".$succes."");
												}else{
													$err = "Acestui email ii este deja asociat un cont!";
													header("Location: signup.php?err=".$err."");
												}
											}else{
												$err = "Prenumele nu poate contine decat litere";
												header("Location: signup.php?err=".$err."");
											}
										}else{

											$err = "Parola trebuie sa contina cel putin o litera mare";
											header("Location: signup.php?err=".$err."");
										}
									}else{
										$err = "Parola nu este suficient de lunga";

									}
								}else{
									$err = "Email-ul introdus nu este valid!";
									header("Location: signup.php?err=".$err."");
								}
							}else{
								$err = "Prenumele nu poate avea mai mult de 25 de litere";
								header("Location: signup.php?err=".$err."");
							}
						}else{
							$err = "Prenumele trebuie sa aiba minim 3 litere";
							header("Location: signup.php?err=".$err."");
						}
					}else{
						$err="Numele trebuie sa aiba maxim 25 de litere!";
						header("Location: signup.php?err=".$err."");

					}
				}else{
					$err="Numele trebuie sa contina minim trei litere!";
					header("Location: signup.php?err=".$err."");
				}
			}else{
				$err="Numele trebuie sa contina doar litere!";
				header("Location: signup.php?err=".$err."");
			}
		}else{
			$err = "Parolele nu coincid!";
			header("Location: signup.php?err=".$err."");
		}
	}else{
		$err = "Incercare frauduloasa de introducere a datelor!";
		header("Location: signup.php?err=".$err."");
	}
		



?>