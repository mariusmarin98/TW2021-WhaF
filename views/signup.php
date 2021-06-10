<!DOCTYPE html>
<HTML lang="ro">
    <head>
        <meta charset="utf-8">
        <title>What the Food - Creare cont</title>
        <link href="../WhaFstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<div class="Container" style="text-align: center;">
<?php
		if($_GET["err"]){
			$err = $_GET['err'];
			echo "<div id='bad'>
					<p style='vertical-align: middle; display: inline-block;'>".$err."
				</div>";
		}
?>

			<h2 style="margin:10px 0 10px 0;" class="Heading2">Creati-va un cont</h2>     <!-- Text de dimensiunea h2    Un text in html poate avea dimensiunea de la h1 la h7. h1 >h7 -->
				<form action="../model/date_login.php" method="POST">    <!-- Crearea unui formular -->
					<label class="descriere_inputs">Nume</label><br>
					<input type="text" class="inputs" name="nume" placeholder="Introdu nume:" minlength="3" maxlength="25" required><br> 
					<label class="descriere_inputs">Prenume</label><br>
					<input type="text" class="inputs" name="prenume" placeholder="Introdu prenume:" minlength="3" maxlength="40" required><br>
					<label class="descriere_inputs">E-mail</label><br>
					<input type="email" class="inputs" name="email" placeholder="Introdu email:" minlength="6" maxlength="40" required><br>
					<label class="descriere_inputs">Parola</label><br>
					<input type="password" class="inputs" name="parola" placeholder="Minim 8 caractere si sa contina o litera mare" minlength="8" required><br>
					<label class="descriere_inputs">Confirma parola</label><br>
					<input type="password" class="inputs" name="con_parola" placeholder="Confirma parola:" minlength="8" required><br>
					<label class="descriere_inputs" >Sex</label><br>
					<label>
						<input type="radio" name="sex" value="M" checked>M
					</label>
					<label>
						<input type="radio" name="sex" value="F">F
					</label><br>
					<label class="descriere_inputs" >Data nasterii</label><br>
					<input type="text" class="inputs" name="data_nasterii" placeholder="Introdu data nasterii:" required><br>
					<input type="reset" class="Button">
					<input type="submit" class="Button" value="Creaza cont"> 
				</form> 
			<br><br>
			<p class="Heading2">Aveti cont? Logati-va aici</p>
			<form action="../index.php">
				<input class="Button" type="submit" value="Logheaza-te">
			</form>
		</div>
    </body>
</HTML>