<!DOCTYPE html>
<HTML lang="ro">
    <head>
        <meta charset="utf-8">
        <title>WhaF</title>
        <link href="../WhaFstyle.css" rel="stylesheet" type="text/css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	<body>
		
		<div style="float:right;" class='ListItem'>
				<a href='../index.php' class='Button Register MainButton'>Delogheaza</a>
		</div>
		<h1 style="margin:50px 0 50px 0;" class="Heading2">Editare reteta</h1> 
	
		<div class="div-table"> 
<?php
	include_once "../model/db.php";

	$select = mysqli_query($conn, "SELECT * FROM `retete` ORDER BY id DESC") or exit(mysqli_error($conn));
	$n = mysqli_num_rows($select);				
	while($row = mysqli_fetch_assoc($select)){
	$id = $row['id'];
	echo"
	<form action='../model/admin.php?id=".$id."' method='POST'>
		
		<div class='div-table-row'>
		<div class='div-table-col'><input type='text' name='titlu_nou' value='".$row['titlu']."'/></div>
		<div class='div-table-col'><textarea cols=30 rows=4 name='ingrediente_noi'>".$row['ingrediente']."</textarea></div>
		<div class='div-table-col'><textarea cols=30 rows=4 name='pasi_preparare_noi'>".$row['pasi_preparare']."</textarea></div>
		<div class='div-table-col'><input type='text' name='dificultate_noua' value='".$row['dificultate']."'/></div>
		<div class='div-table-col'><input type='text' name='durata_noua' value='".$row['durata']."'/></div>
		</div>
		<div class='div-table-col'><input type='submit' name='submit_nou' value='Salveaza'/></div> 
		<div class='div-table-col'><input type='submit' name='submit_sterge' value='Sterge'/></div>
		<br>
	</form>";
	}
?>
	</div>

	<h1 style="margin:50px 0 50px 0;" class="Heading2">Editare utilizatori</h1> 
	<div class="div-table"> 

<?php

	$select = mysqli_query($conn, "SELECT * FROM `utilizatori` ORDER BY id DESC") or exit(mysqli_error($conn));
	$n = mysqli_num_rows($select);				
	while($row = mysqli_fetch_assoc($select)){
	$id = $row['id'];
	echo"
	<form action='../model/admin.php?id=".$id."' method='POST'>
		
		<div class='div-table-row'>
		<div class='div-table-col'><input type='text' name='nume_nou' value='".$row['nume']."'/></div>
		<div class='div-table-col'><input type='text' name='prenume_nou' value=".$row['prenume']."></div>
		<div class='div-table-col'><input type='text' name='email_nou' value=".$row['email']."></div>
		<div class='div-table-col'><input type='password' name='parola_noua' placeholder='Schimbati parola'/></div>
		<div class='div-table-col'><input type='text' name='sex_nou' value='".$row['sex']."'/></div>
		<div class='div-table-col'><input type='text' name='data_nasterii_noua' value='".$row['data_nasterii']."'/></div>
		</div>
		<div class='div-table-col'><input type='submit' name='submit_nou2' value='Salveaza'/></div> 
		<div class='div-table-col'><input type='submit' name='submit_sterge2' value='Sterge'/></div>
		<br>
	</form>";
	}
?>
	</div>

	</body>
</HTML>