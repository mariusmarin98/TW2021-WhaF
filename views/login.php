<!DOCTYPE html>
<HTML lang="ro">
    <head>
        <meta charset="utf-8">
        <title>What the Food - Logare</title>
        <link href="../WhaFstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<div class="Container" style="text-align: center;">
<?php
		if($_GET["succes"]){
			$succes = $_GET["succes"];
			echo "<div id='good'>
					<p style='vertical-align: middle; display: inline-block;'>".$succes."
				</div>";
		}
		if($_GET["err"]){
			$err_login = $_GET['err'];
			echo "<div id='bad'>
					<p style='vertical-align: middle; display: inline-block;'>".$err_login."
				</div>";
		}
?>
			<h1 style="margin:50px 0 50px 0;" class="Heading2">Pagina de logare</h1>    
				<form action="../model/login.php" method="POST">    
					<label class="descriere_inputs">E-mail:</label><br>
					<input type="text" class="inputs" name="email_login" placeholder="Introdu email:"><br> 
					<label class="descriere_inputs">Parola:</label><br>
					<input type="password" class="inputs" name="parola_login" placeholder="Introdu parola:"><br><br>
					<input style="margin-top:25px;" type="submit" class="Button" value="Intra in cont"> 
				</form> 
			<br><br>
			<p class="Heading2">Nu aveti cont? Creati-va unul.</p> 
			<form action="../index.php?m=signup" method="POST"> 
				<input class="Button" type="submit" value="Creaza cont">
			</form>
			<br><br>
			<form action="../index.php?m=delogheaza" method="POST"> 
				<input class="Button" type="submit" value="Continua ca neautentificat">
			</form>
			<br><br>
			<form action="../admin_login.php" method="POST"> 
				<input class="Button" type="submit" value="Administrare">
			</form>
		</div>
    </body>
</HTML>