<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Aanmeld Melding</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
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
						<li class="hover"><a href="lid_cursussen.php">Mijn cursussen</a></li>
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
						<li class="hover"><a href="cursus_toevoeg.php">Cursus toevoegen</a></li>
						<li class="hover"><a href="alle_leden_cursus_uitlees.php">Alle Inschrijvingen</a></li>
						<li class="hover"><a href='uitlog.php'>UITLOGGEN</a></li>
					</ul>
				</nav>
			</div>
			<div id='landing2'>
				<p>Oeps er is fout gegaan! U hoort hier niet te zijn, klik <a href='index.php'>hier</a></p>
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
	<?php
			$Gebruikersnaam = $_POST['Gebruikersnaam'];
			$Wachtwoord = $_POST['Wachtwoord'];
			$Voornaam = $_POST['Voornaam'];
			$Achternaam = $_POST['Achternaam'];
			$Geboortedatum = $_POST['Geboortedatum'];
			$Mail = $_POST['Mail'];

			$query = "INSERT INTO BEROEPS1_P5_Tele_Lens_Login VALUES (NULL, '$Gebruikersnaam', '$Wachtwoord', '$Voornaam' ,'$Achternaam' ,'$Geboortedatum', '$Mail', '2')";

			if (isset($_POST['submit']))
			{
				require('config.php');

				if (mysqli_query($mysqli, $query))
				{
					echo "<div id='landing2'>";
					echo "$Gebruikersnaam is toegevoegd.<br>";
					echo "<p><a href='inlog.php'>Log in</a>!</p>";
					echo "</div>";
				}
				else
				{
					echo "<div id='landing2'>";
					echo "<p>Fout bij toevoegen $Gebruikersnaam!<br> Uw gebruikersnaam is al genomen</p>";
					echo "</div>";
				}
			}
		}/*level 0*/
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>	
</body>
</html>