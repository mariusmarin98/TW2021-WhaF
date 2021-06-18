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
	
		<table>
			<tr>
			<th>Titlu</th>
			<th>Ingrediente</th>
			<th>Pasi preparare</th>
			<th>Dificultate</th>
			<th>Durata</th>
			<th>Salveaza</th>
			<th>Sterge</th>
		</tr>
<?php
	include_once "../model/db.php";

	$select = mysqli_query($conn, "SELECT * FROM `retete` ORDER BY id DESC") or exit(mysqli_error($conn));
	$n = mysqli_num_rows($select);				
	while($row = mysqli_fetch_assoc($select)){
	$id = $row['id'];
	echo"
	<form action='../model/admin.php?id=".$id."' method='POST'>
	<tr> 
		<td><input type='text' name='titlu_nou' value='".$row['titlu']."'/></td>
		<td><textarea cols=30 rows=4 name='ingrediente_noi'>".$row['ingrediente']."</textarea></td>
		<td><textarea cols=30 rows=4 name='pasi_preparare_noi'>".$row['pasi_preparare']."</textarea></td>
		<td><input type='text' name='dificultate_noua' value='".$row['dificultate']."'/></td>
		<td><input type='text' name='durata_noua' value='".$row['durata']."'/></td>
		<td><input type='submit' name='submit_nou' value='Salveaza'/></td> 
		<td><input type='submit' name='submit_sterge' value='Sterge'/></td>
	</tr>
	</form>";
	}
?>
	</table>

	<h1 style="margin:50px 0 50px 0;" class="Heading2">Editare utilizatori</h1> 
		<table>
			<tr>
			<th>Nume</th>
			<th>Prenume</th>
			<th>Email</th>
			<th>Parola</th>
			<th>Sex</th>
			<th>Data nasterii</th>
			<th>Salveaza</th>
			<th>Sterge</th>
		</tr>
<?php

	$select = mysqli_query($conn, "SELECT * FROM `utilizatori` ORDER BY id DESC") or exit(mysqli_error($conn));
	$n = mysqli_num_rows($select);				
	while($row = mysqli_fetch_assoc($select)){
	$id = $row['id'];
	echo"
	<form action='../model/admin.php?id=".$id."' method='POST'>
	<tr>
		<td><input type='text' name='nume_nou' value='".$row['nume']."'/></td>
		<td><input type='text' name='prenume_nou' value=".$row['prenume']."></td>
		<td><input type='text' name='email_nou' value=".$row['email']."></td>
		<td><input type='password' name='parola_noua' placeholder='Schimbati parola'/></td>
		<td><input type='text' name='sex_nou' value='".$row['sex']."'/></td>
		<td><input type='text' name='data_nasterii_noua' value='".$row['data_nasterii']."'/></td>
		<td><input type='submit' name='submit_nou' value='Salveaza'/></td> 
		<td><input type='submit' name='submit_sterge2' value='Sterge'/></td>
	</tr>
	</form>";
	}
?>
	</table>


	</body>
</HTML>