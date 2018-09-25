<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cursus inschrijven</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
	<?php
	if ($_SESSION['Level'] == 2)
		{
		require('config.php');
		echo "<div class='inlog'><label class='inlog'>Welkom, " . $_SESSION['Gebruikersnaam'] . "</label></div>";
		$Gebruikersnaam = $_SESSION['Gebruikersnaam'];
		$Voornaam = $_SESSION['Voornaam'];
		$Achternaam = $_SESSION['Achternaam'];
		$Geboortedatum = $_SESSION['Geboortedatum'];
		$Mail = $_SESSION['Mail'];
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
		<form method="post" action="cursus_inschrijf_verwerk.php" id='inschrijf'>
			<input type="text" name="Gebruikersnaam" value="<?php echo $Gebruikersnaam ?>" hidden>
			<table>
				<tr>
					<td><label for="Voornaam">Voornaam:</label></td>
					<td><input type="text" id="Voornaam" name="Voornaam" value="<?php echo $Voornaam ?>"></td>
				</tr>
				<tr>
					<td><label for="Achternaam">Achternaam:</label></td>
					<td><input type="text" id="Achternaam" name="Achternaam" value="<?php echo $Achternaam ?>"></td>
				</tr>
				<tr>
					<td><label for="Geboortedatum">GeboorteDatum:</label></td>
					<td><input type="date" id="Geboortedatum" name="Geboortedatum" value="<?php echo $Geboortedatum ?>"></td>
				</tr>
				<tr>
					<td><label for="Mail">E-Mail:</label></td>
					<td><input type="text" id="Mail" name="Mail" value="<?php echo $Mail ?>"></td>
				</tr>
				<tr>
					<td><label>Cursus</label></td>
					<td><select name="ID" form="inschrijf">
							<?php
							require('config.php');
							$opdracht = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen";
							$resultaat = mysqli_query($mysqli, $opdracht);

							while ($Cursus = mysqli_fetch_array($resultaat))
							{
								echo "<option value='" . $Cursus['ID'] . "'>";
								echo $Cursus['Title'];
								echo "</option>";

							}
						?></select></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="schrijf me in"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php
		}
	if ($_SESSION['Level'] == 1)
		{
		require('config.php');
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
	<?php
		}
		if ($_SESSION['Level'] == 0)
		{
			require('config.php');
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
		<form method="post" action="cursus_inschrijf_verwerk.php" id="inschrijf">
			<table>
				<tr>
					<td><label for="Voornaam">Voornaam:</label></td>
					<td><input type="text" id="Voornaam" name="Voornaam"></td>
				</tr>

				<tr>
					<td><label for="Achternaam">Achternaam:</label></td>
					<td><input type="text" id="Achternaam" name="Achternaam"></td>
				</tr>

				<tr>
					<td><label for="Geboortedatum">GeboorteDatum:</label></td>
					<td><input type="date" id="Geboortedatum" name="Geboortedatum"></td>
				</tr>

				<tr>
					<td><label for="Mail">E-Mail:</label></td>
					<td><input type="text" id="Mail" name="Email"></td>
				</tr>

				<tr>
					<td><label>Cursus</label></td>
					<td><select name="ID" form="inschrijf">
							<?php
							require('config.php');
							$opdracht = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen";
							$resultaat = mysqli_query($mysqli, $opdracht);
							while ($Cursus = mysqli_fetch_array($resultaat))
							{
								echo "<option value='" . $Cursus['ID'] . "'>";
								echo $Cursus['Title'];
								echo "</option>";
							}
						?></select></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="schrijf me in"></td>
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