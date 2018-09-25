<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cursus verwijder verwerk</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<?php
	if(!isset($_SESSION['Gebruikersnaam']))
		{
			header("location:inlog.php");
		}
	if ($_SESSION['Level'] == 2)
		{
			echo "<div class='inlog'><label class='inlog'>Welkom, " . $_SESSION['Gebruikersnaam'] . "</label></div>";
	?>
			<div class="wrapper">
				<nav>
					<ul>
						<li class="hover"><a href="index.php">Home</a></li>
						<li class="hover"><a href="cursus_inschrijf.php">Inschrijven</a></li>
						<li class="hover"><a href="cursus_uitlees.php">Cursussen</a></li>
						<li class="hover"><a href="lid_cursussen.php">MijnCursussen</a></li>
						<li class="hover"><a href='uitlog.php'>UITLOGGEN</a></li>
					</ul>
				</nav>
			</div>
			<div id='landing2'>
				<p>Oeps er is fout gegaan! U hoort hier niet te zijn, klik <a href='index.php'>hier</a></p>
			</div>
	<?php
		}/*level 2*/
	if ($_SESSION['Level'] == 1)
		{
			echo "<div class='inlog'><label class='inlog'>Welkom, " . $_SESSION['Gebruikersnaam'] . "</label></div>";
	?>
			<div class="wrapper">
				<nav>
					<ul>
						<li class="hover"><a href="index.php">Home</a></li>
						<li class="hover"><a href="cursus_uitlees.php">Cursussen</a></li>
						<li class="hover"><a href="cursus_toevoeg.php">CursusToevoegen</a></li>
						<li class="hover"><a href="alle_leden_cursus_uitlees.php">Inschrijvingen</a></li>
						<li class="hover"><a href='uitlog.php'>UITLOGGEN</a></li>
					</ul>
				</nav>
			</div>
			<div id='landing2'>
	<?php
			if (isset($_POST['submit']))
			{
				require 'config.php';
				$ID = $_POST['ID'];
				$Title = $_POST['Title'];
				
				$query = "DELETE FROM BEROEPS1_P5_Tele_Lens_Cursussen WHERE ID = $ID";
				
				if (mysqli_query($mysqli, $query))
				{
					$query2 = "DELETE FROM BEROEPS1_P5_Tele_Lens_Lid_Cursussen WHERE ID_cursus =" . $ID;
					
					if (mysqli_query($mysqli, $query2))
					{
						echo "<p> cursus $Title is verwijderd!</p>";
					}
					else
					{
						echo "<p> $ID is niet verwijderd!</p>";
					}
				}
				
				else
				{
					echo "<p>FOUT bij verwijderen van $Title.</p>";
				}
			}
			else
			{
				echo "<p>Geen gegevens ontvangen...</p>";
				echo "<p><a href='cursus_uitlees.php'>TERUG</a> naar overzicht</p>";
			}
		?>
			</div>
		<?php
			
	}/*level 1*/
	if ($_SESSION['Level'] == 0)
	{
	?>
		<div class="wrapper">
			<nav>
				<ul>
					<li class="hover"><a href="index.php">Home</a></li>
					<li class="hover"><a href="cursus_inschrijf.php">Inschrijven</a></li>
					<li class="hover"><a href="cursus_uitlees.php">Cursussen</a></li>
					<li class="hover"><a href="inlog.php">INLOGGEN!</a></li>
				</ul>
			</nav>
		</div>
		<div id='landing2'>
			<p>Oeps er is fout gegaan! U hoort hier niet te zijn, klik <a href='index.php'>hier</a></p>
		</div>
	<?php
	}/*level 0*/
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>	
</body>
</html>
