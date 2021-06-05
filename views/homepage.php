<!DOCTYPE html>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>WhaF</title>
        <link href="../WhaFstyle.css" rel="stylesheet" type="text/css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header id="nav" class="Header">
            <div class = "HeaderForm WForm">
			<!--
                <form id = "formHeaderForm" name = "formHeaderForm" data-name = "HeaderForm" class = "Form">
                    <input type = "text" class = "Search Input" autofocus="true"  name="cauta_ingredient" data-name="Search" placeholder="Cauta dupa ingredient:" id = "search">
					<button "type="submit" id="search"><i class=" Search Input fa fa-search"></i></button>
                </form>
			-->	
				<form class="example" action="../model/homepage.php" method="POST">
					<input type="text" placeholder="Cautati dupa ingredient:" name="cauta_ing" required>
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
<?php
	session_start();
	if (($_SESSION['prenume'])){
		echo "
				<li id='regb' class='ListItem'>
                    <a href='../index.php?m=retete' class='Button Register MainButton'>Adauga reteta</a>
                </li>
                <li id='regb' class='ListItem'>
                    <a href='../index.php?m=delogheaza' class='Button Register MainButton'>Delogheaza</a>
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
			echo "<div id='good'>
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
            <h2 class=Heading2>Noutati</h2>
<?php
			if($_POST['cauta_ing']){
				$search = $_POST['cauta_ing'];
				
				$select = mysqli_query($conn, "SELECT * FROM `retete` WHERE ingrediente LIKE '%$search%' OR dificultate LIKE '%$search%' OR durata LIKE '%$search%'") or exit(mysqli_error($conn));

				$n = mysqli_num_rows($select);
				
				if($n>0){
					while($row = mysqli_fetch_assoc($select))
					
						echo "
			<div style='margin-left: 5%;'>
				<div style=' float:left; width: 25%;'>
					<img style='border-radius: 15px;' src='../images/".$row['nume_poza']."'>
				</div>
				<div style='float:left; margin-left: 10px;'>
					<h2 style=''>".$row['titlu']."</h2>
                    <p style='width: 800px; word-wrap: break-word;'>Ingrediente: ".$row['ingrediente']."</p>
					<br>
					<p style='width: 800px; word-wrap: break-word;'>Mod de preparare: ".$row['pasi_preparare']."</p>
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
			<br style='clear:both;'>";
				}else
					echo "Nu exista rezultate!";
			}else{
				
				
			$select = mysqli_query($conn, "SELECT * FROM `retete`") or exit(mysqli_error($conn));
			$n = mysqli_num_rows($select);
			if($n>0)
			while($row = mysqli_fetch_assoc($select))
			
				echo "
			<div style='margin-left: 5%;'>
				<div style=' float:left; width: 25%;'>
					<img style='border-radius: 15px;' src='../images/".$row['nume_poza']."'>
				</div>
				<div style='float:left; margin-left: 10px;'>
					<h2 style=''>".$row['titlu']."</h2>
                    <p style='width: 800px; word-wrap: break-word;'>Ingrediente: ".$row['ingrediente']."</p>
					<br>
					<p style='width: 800px; word-wrap: break-word;'>Mod de preparare: ".$row['pasi_preparare']."</p>
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
			<br style='clear:both;'>";


			}
			

?>
        </section>
    </body>
</HTML>



<!--
echo "
                <img src='https://savoriurbane.com/wp-content/uploads/2020/03/cele-mai-bune-paste-cu-sos-picant-de-rosii-cu-usturoi-si-ardei-iute-parmezan.jpg' width='347' alt='video item' size='200px' class='Image'>
                <div class='RichTextBlock RichText'>
                    <h3>".$row['titlu']."</h3>
                    <p>".$row['ingrediente']."</p>
                </div>
              ";

-->