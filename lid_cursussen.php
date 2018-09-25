<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mijn Cursus</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<script src="JavaScript/jquery-3.3.1.min.js"></script>	
</head>
	
<body>
	<?php
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
			<table>
				<tr>
					<th>Cursusnaam:</th>
					<th>Dag:</th>
					<th>Tijd:</th>
					<th>Cursus naam:</th>
				</tr>
				<?php
				require('config.php');
				$Gebruikersnaam = $_SESSION['Gebruikersnaam'];
				$query = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Lid_Cursussen WHERE Gebruikersnaam = '$Gebruikersnaam'";
				$resultaat = mysqli_query($mysqli, $query);
				while ($rij = mysqli_fetch_array($resultaat))
				{
					$query2 = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen WHERE ID=" . $rij['ID_cursus'];
					$resultaat2 = mysqli_query($mysqli, $query2);
					while ($rij2 = mysqli_fetch_array($resultaat2))
					{
						echo "<tr>";
						echo "<td>" . $rij2['Title'] . "</td>";
						echo "<td>" . $rij2['Date'] . "</td>";
						echo "<td>" . $rij2['Time'] . "</td>";
						echo "<td>" . $rij2['Text'] . "</td>";
						echo "<tr>";
					}
				}
				?>
			</table>
		</div>
	<?php
		}
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
			<p>Oeps er is fout gegaan! U hoort hier niet te zijn, klik <a href='index.php'>hier</a></p>
		</div>
	<?php
		}
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
			<p>Oeps U heeft nog geen account maak <a href='index.php'>hier</a> een account aan.</p>
		</div>
	<?php
		}
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>	
</body>
</html>
