<?php
	include_once "db.php";
	session_start();
	if(isset($_SESSION['admin'])){
		
		if(isset($_POST['submit_sterge'])){
			$id=$_GET['id'];
			mysqli_query($conn,"DELETE FROM retete WHERE id = '".$id."'");
		}

		if(isset($_POST['submit_sterge2'])){
			$id=$_GET['id'];
			mysqli_query($conn,"DELETE FROM utilizatori WHERE id = '".$id."'");
		}

		if(isset($_POST['submit_nou'])){
			$id=$_GET['id'];
			$titlu_nou = $_POST['titlu_nou'];
			$ingrediente_noi = $_POST['ingrediente_noi'];
			$mod_preparare_nou = $_POST['pasi_preparare_noi'];
			$dificultate_noua = $_POST['dificultate_noua'];
			$durata_noua = $_POST['durata_noua'];
		
			mysqli_query($conn,"UPDATE retete SET titlu = '".$titlu_nou."', ingrediente = '".$ingrediente_noi."', pasi_preparare = '".$mod_preparare_nou."', dificultate = '".$dificultate_noua."', durata = '".$durata_noua."' WHERE id = '".$id."'");
		}
	
		if(isset($_POST['submit_nou2'])){
			$id=$_GET['id'];
			$nume_nou = $_POST['nume_nou'];
			$prenume_nou = $_POST['prenume_nou'];
			$email_nou = $_POST['email_nou'];
			$parola_noua = $_POST['parola_noua'];
			$sex_nou = $_POST['sex_nou'];	
			$data_nasterii_noua = $_POST['data_nasterii_noua'];	
			$parola_hash = password_hash($parola_noua, PASSWORD_DEFAULT);
		
			mysqli_query($conn,"UPDATE utilizatori SET nume = '".$nume_nou."', prenume = '".$prenume_nou."', email = '".$email_nou."', parola = '".$parola_hash."', sex = '".$sex_nou."', data_nasterii = '".$data_nasterii_noua."' WHERE id = '".$id."'");
		}
	
		require '../views/admin.php';
	}else 
		die("Nu aveti acces pe aceasta pagina!");
?>