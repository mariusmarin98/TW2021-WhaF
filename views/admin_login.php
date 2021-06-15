<!DOCTYPE html>
<HTML lang="ro">
    <head>
        <meta charset="utf-8">
        <title>What the Food - Logare admin</title>
        <link href="WhaFstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		<div class="Container" style="text-align: center;">
			<h1 style="margin:50px 0 50px 0;" class="Heading2">Pagina de logare</h1>    
				<form action="admin_login.php" method="POST">    
					<label class="descriere_inputs">Admin:</label><br>
					<input type="text" class="inputs" name="nume_login" placeholder="Introdu username:" required><br> 
					<label class="descriere_inputs">Parola:</label><br>
					<input type="password" class="inputs" name="parola_login" placeholder="Introdu parola:" required minlength="8"><br><br>
					<input style="margin-top:25px;" type="submit" name="submit_login" class="Button" value="Intra in cont"> 
				</form> 
			
		</div>
    </body>
</HTML>