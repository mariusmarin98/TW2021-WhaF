<!DOCTYPE html>
<HTML lang="ro">
    <head>
        <meta charset="utf-8">
        <title>WhaF</title>
        <link href="../WhaFstyle.css" rel="stylesheet" type="text/css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header id="nav" class="Header">
            <div class = "HeaderForm WForm">
				<form class="example" action="../model/homepage.php" method="POST">
					<input type="text" placeholder="Cautati dupa ingredient:" name="cauta_ing">
					<button name="submit_ing" type="submit"><i class="fa fa-search"></i></button>
				</form>
                <div class="FormDone">
                    <div>Thank you! Your submission has been recevied</div>
                </div>
                <div class="FormFail">
                    <div>Oops! Something went wrong while subitting the form</div>
                </div>
            </div>
            <nav class="HeadingContainer Container">
            </nav>
            <h1 class="Heading"><a style="color: inherit;" href="../model/homepage.php">WhaF</a></h1>
            <ul class="NavList">
				<li id='regb' class='ListItem'>
                    <a href='../index.php?m=homepage&sort=pop' class='Button Register MainButton'>Sortare dupa popularitate</a>
                </li>
<?php
	session_start();
	if ($_SESSION["prenume"]){
		echo "
				<li class='ListItem'>
                    <a href='../index.php?m=retete' class='Button Register MainButton'>Adauga reteta</a>
                </li>
                <li class='ListItem'>
                    <a href='../index.php?m=delogheaza' class='Button Register MainButton'>Delogheaza</a>
                </li>
		";
	}else{
		echo "
				<li class='ListItem'>
                    <a href='../index.php?m=signup' class='Button Register MainButton'>Deveniti membru</a>
                </li>
		";
	}
?>
        </ul>
        </header>
        <section class="MyFeedContainer Container">
<?php
			if($_GET["prenume"]){
			$prenume = $_GET['prenume'];
			echo "
				<div id='good'>
					<p style='vertical-align: middle; display: inline-block;'>Bine ai venit, ".$prenume."</p>
				</div>";
			}
			if($_GET["add"]){
			$add = $_GET['add'];
			echo "<div id='good'>
					<p style='vertical-align: middle; display: inline-block;'>Reteta a fost adaugata!</p>
				</div>";
			}
				

?>
            
<?php
			if($_POST['cauta_ing']){
				$search = $_POST['cauta_ing'];
				
				if(strpos($search,";")){
					
					$comp_search = explode(";",$search);
					
					for ($i = 0; $i < count($comp_search); $i++){
					
						if(is_numeric($comp_search[$i])){
							$new .= " durata LIKE '$comp_search[$i]'";
							if ( $i < count($comp_search) -1 ){
								$new .= " AND";
							}
					
						} else if (strcmp($comp_search[$i],"usor") === 0 || strcmp($comp_search[$i],"mediu") === 0 || strcmp($comp_search[$i],"dificil") === 0){
							$new .= " dificultate LIKE '$comp_search[$i]'";
							if ( $i < count($comp_search) -1 ){
								$new .= " AND";
							}
					
						} else if (strpos($comp_search[$i],"-")) {
							$array = explode("-",$comp_search[$i]);
							$new .= " durata  >= '$array[0]' AND durata <= '$array[1]'";
							if ( $i < count($comp_search) -1 ){
								$new .= " AND";
							}
					
						} else {
							$array = explode(",", $comp_search[$i]);
							$new .= "(";
							for ($j = 0; $j < count($array); $j++ ){
								$new .= " ingrediente LIKE '%{$array[$j]}%'";
								if ( $j < count($array) -1 ){
									$new .= " OR";
								}

							}
							$new .= " )";
							if ( $i < count($comp_search) -1 ){
								$new .= " AND";
							}
						}
					}
					$select = mysqli_query($conn, "SELECT * FROM `retete` WHERE $new") or exit(mysqli_error($conn));

				} else {
					if(is_numeric($search)){
						$select = mysqli_query($conn, "SELECT * FROM `retete` WHERE durata LIKE '$search'") or exit(mysqli_error($conn));
					}else {	
						if (strpos($search,"-")){
							$array = explode("-",$search);
							$select = mysqli_query($conn, "SELECT * FROM `retete` WHERE durata >= '$array[0]' AND durata <= '$array[1]'  ") or exit(mysqli_error($conn));
						}else {
							if (strcmp($search,"usor") === 0 || strcmp($search,"mediu") === 0 || strcmp($search,"dificil") === 0) {
								$select = mysqli_query($conn, "SELECT * FROM `retete` WHERE dificultate LIKE '$search'") or exit(mysqli_error($conn));
							}
							else{
								$array = explode(',', $search);
								
								for ($i = 0; $i < count($array); $i++ ){
									$new .= " LIKE '%{$array[$i]}%'";
									if ( $i < count($array) -1 ){
										$new .= " OR ingrediente";
									}
								}

								$select = mysqli_query($conn, "SELECT * FROM `retete` WHERE ingrediente $new") or exit(mysqli_error($conn));
								
								}
							}
						}
					}
				
			



				$n = mysqli_num_rows($select);
				echo "<h2 class=Heading2>Rezultatele cautarii</h2>";	
				if($n>0){
					while($row = mysqli_fetch_assoc($select)){
						$id = $row["id"];
						mysqli_query($conn,"UPDATE retete SET popularitate = popularitate + 1 WHERE id = '".$id."'");
						echo "
						<div style='margin-left: 5%;'>
							<div style=' float:left; width: 25%;'>
								<img alt = 'poza mancare' style='border-radius: 15px;' src='../images/".$row['nume_poza']."'>
							</div>
							<div style='float:left; margin-left: 10px;'>
								<h2 style=''>".$row['titlu']."</h2>
								<p style='width: 800px; word-wrap: break-word;'><b>Ingrediente:</b> ".$row['ingrediente']."</p>
								<br>
								<p style='width: 800px; word-wrap: break-word;'><b>Mod de preparare:</b>".$row['pasi_preparare']."</p>
							</div>
							<br><br>
							<div style='float:right; margin-right: 3%;'>
								<strong>Dificultate:</strong>
								<br><br>
								<p>".$row['dificultate']."</p>
								<br><br><br><br>
								<strong>Durata de preparare:</strong>
								<br><br>
								<p>".$row['durata']." de min</p>
							</div>
						</div>
						<br style='clear:both;'><br /><br />";
								
								}
							}else
							echo "Nu exista rezultate!";
					}else if($_GET["sort"]){
			
						$select = mysqli_query($conn, "SELECT * FROM `retete` ORDER BY popularitate DESC LIMIT 10") or exit(mysqli_error($conn));
						$n = mysqli_num_rows($select);
						echo "<h2 class=Heading2>Retete populare</h2> 
								<div class='form-group'>
								<button onclick='Export()' class='export-button'>Export CSV File</button>
								</div>
								<script>
									function Export()
									{
										var conf = confirm('Exportati clasamentul in format csv?');
										if(conf == true)
										{
											window.open('./../export.php', '_blank');
										}
									}
								</script>
								<br />";
						if($n>0)
							while($row = mysqli_fetch_assoc($select))
								echo "
								<div style='margin-left: 5%;'>
									<div style=' float:left; width: 25%;'>
										<img alt = 'poza mancare' style='border-radius: 15px;' src='../images/".$row['nume_poza']."'>
									</div>
									<div style='float:left; margin-left: 10px;'>
										<h2 style=''>".$row['titlu']."</h2>
										<p style='width: 800px; word-wrap: break-word;'><b>Ingrediente:</b> ".$row['ingrediente']."</p>
										<br>
										<p style='width: 800px; word-wrap: break-word;'><b>Mod de preparare:</b>".$row['pasi_preparare']."</p>
									</div>
									<br><br>
									<div style='float:right; margin-right: 3%;'>
										<strong>Dificultate:</strong>
										<br><br>
										<p>".$row['dificultate']."</p>
										<br><br><br><br>
										<strong>Durata de preparare:</strong>
										<br><br>
										<p>".$row['durata']." de min</p>
									</div>
								</div>
								<br style='clear:both;'><br /><br />";

						
						}else{
							
							
							$select = mysqli_query($conn, "SELECT * FROM `retete` ORDER BY id DESC LIMIT 7") or exit(mysqli_error($conn));
							$n = mysqli_num_rows($select);
							if($n>0)
							echo "<h2 class=Heading2>Noutati</h2>";							
							while($row = mysqli_fetch_assoc($select))
							
								echo "
								<div style='margin-left: 5%;'>
									<div style=' float:left; width: 25%;'>
										<img alt = 'poza mancare' style='border-radius: 15px;' src='../images/".$row['nume_poza']."'>
									</div>
									<div style='float:left; margin-left: 10px;'>
										<h2 style=''>".$row['titlu']."</h2>
										<p style='width: 800px; word-wrap: break-word;'><b>Ingrediente:</b> ".$row['ingrediente']."</p>
										<br>
										<p style='width: 800px; word-wrap: break-word;'><b>Mod de preparare:</b> ".$row['pasi_preparare']."</p>
									</div>
									<br><br>
									<div style='float:right; margin-right: 3%;'>
										<strong>Dificultate:</strong>
										<br><br>
										<p>".$row['dificultate']."</p>
										<br><br><br><br>
										<strong>Durata de preparare:</strong>
										<br><br>
										<p>".$row['durata']." de min</p>
									</div>
								</div>
								<br style='clear:both;'><br /><br />";
						}
			

?>
        </section>
    </body>
</HTML>
