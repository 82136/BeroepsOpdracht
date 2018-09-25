<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Account aanmaken</title>
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
				<li class="hover"><a href="lid_cursussen.php">MijnCursussen</a></li>
				<li class="hover"><a href='uitlog.php'>UITLOGGEN</a></li>
			</ul>
		</nav>
	</div>
	<div id='landing2'>
		<p>Oeps er is fout gegaan! U hoort hier niet te zijn, klik <a href='index.php'>hier</a></p>
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
	<div id="landing2">
		<form action="aanmeld_verwerk.php" method="post">
			<table>
				<tr>
					<td><label for="Gebruikersnaam">Gebruikersnaam:</label></td>
					<td><input type="text" name="Gebruikersnaam"></td>
				</tr>
				<tr>
					<td><label for="Wachtwoord">Wachtwoord:</label></td>
					<td><input type="password" name="Wachtwoord"></td>
				</tr>
				<tr>
					<td><label for="Naam">Voornaam:</label></td>
					<td><input type="text" name="Voornaam"></td>
				</tr>
				<tr>
					<td><label for="Naam">Achternaam:</label></td>
					<td><input type="text" name="Achternaam"></td>
				</tr>
				<tr>
					<td><label for="text">Geboortedatum:</label></td>
					<td><input type="Date" name="Geboortedatum"></td>
				</tr>
				<tr>
					<td><label for="text">E-Mail:</label></td>
					<td><input type="mail" name="Mail"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="Maak een account"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php
		}
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>	
</body>
</html>