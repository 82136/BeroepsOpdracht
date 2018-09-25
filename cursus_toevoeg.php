<?php
	session_start();
?>
<!DOCTYPE>
<html class="cursus_toevoeg">
<head>
<title>Cursus toevoeg</title>
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
			<p>U heeft geen rechten om deze pagina te bekijken, klik <a href='index.php'>hier</a>.</p>
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
			<form id="Cursus" method="POST" action="cursus_toevoeg_verwerk.php">
					<table>
						<tr>
							<td><label for="Title">Title:</label></td>
							<td><input type="text" name="Title" id="Title"></td>
						</tr><!-- Title veld -->
						<tr>
							<td><label for="Date">Dag:</label></td>
							<td><select from="Cursus" name="Date">
									<option value="maandag">maandag</option>
									<option value="dinsdag">dinsdag</option>
									<option value="woensdag">woensdag</option>
									<option value="donderdag">donderdag</option>
									<option value="vrijdag">vrijdag</option>
									<option value="zaterdag">zaterdag</option>
									<option value="zondag">zondag</option>
								</select></td>
						</tr><!-- Date veld -->
						<tr>
							<td><label for="Time">Tijd:</label></td>
							<td><input type="Time" name="Time" id="Time"></td>
						</tr><!-- Time veld -->
						<tr>
							<td><label for="Text">Cursus beschrijving:</label></td>
							<td><textarea name="Text" form="Cursus" id="Text"></textarea></td>
						</tr><!-- Text veld -->
						<tr>
							<td>&nbsp;</td><!-- Leeg -->
							<td><input type="submit" name="submit" value="Voeg toe"></td>
						</tr><!-- Submit button -->
					</table>
			</form>
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
			<p>U heeft geen rechten om deze pagina te bekijken, klik <a href='index.php'>hier</a>.</p>
		</div>
	<?php
		}
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>	
</body>
</html>