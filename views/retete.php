<!DOCTYPE html>
<HTML lang="ro">
    <head>
        <meta charset="utf-8">
        <title>What the Food - Adauga reteta</title>
        <link href="../WhaFstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<div class="Container2" style="text-align: center;">

			<h1 style="margin:50px 0 50px 0;" class="Heading2">Adaugare reteta</h1>     <!-- Text de dimensiunea h2    Un text in html poate avea dimensiunea de la h1 la h7. h1 >h7 -->
				<form action="../model/retete.php" method="POST" enctype="multipart/form-data">    <!-- Crearea unui formular -->
					<label class="descriere_inputs">Titlul retetei</label><br>
					<input type="text" class="inputs" name="titlu" placeholder="Introdu titlul retetei" minlength="5" maxlength="100" required><br> <!-- Un camp de completat - input -->
					<label class="descriere_inputs">Ingrediente</label><br>
					<textarea rows=6 class="inputs" name="ingrediente" placeholder="Introdu ingredientele:" minlength="50" required></textarea><br><br>
					<label class="descriere_inputs">Mod de preparare</label><br>
					<textarea rows=6 class="inputs" name="preparare" placeholder="Specifica modul de preparare:" minlength="50" required></textarea><br><br>
					<label class="descriere_inputs">Dificultate</label><br>
					<select class="inputs2" name="dificultate" required>
						<option value="">Alege dificultatea</option>
						<option value="usor">usor</option>
						<option value="mediu">mediu</option>
						<option value="dificil">dificil</option>
					</select>
					<label class="descriere_inputs">Durata (minute)</label><br>
					<input type="number" class="inputs" name="durata" min="10" step=5 max="180" required>
					<input type="file" name="poza">
					<input style="margin-top:25px;" type="submit" class="Button" value="Adauga reteta"> <!--Orice formular trebuie sa se termine cu un submit. Orice input are un tip text/ submit-->
				</form> 
			<br><br><br>
			<p>Te-ai razgandit?</p> <!-- paragraf - este un scris de dim mici -->
			<form action="../model/homepage.php"> 
				<input class="Button" type="submit" value="Renuntare">
			</form>
		</div>
    </body>
</HTML>