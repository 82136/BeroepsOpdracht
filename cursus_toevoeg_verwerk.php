<?php
	session_start();
?>
<!DOCTYPE>
<html>
<head>
<title>Toevoeg melding</title>
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
					<li class="hover"><a href="cursus_inchrijf.php">Inschrijven</a></li>
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
					<li class="hover"><a href="cursus_toevoeg.php">Cursus toevoegen</a></li>
					<li class="hover"><a href="alle_leden_cursus_uitlees.php">Inschrijvingen</a></li>
					<li class="hover"><a href='uitlog.php'>UITLOGGEN</a></li>
				</ul>
			</nav>
		</div>
	<?php
	if (isset($_POST['submit']))
		{
			require('config.php');
			// zodat je in database kan komen

			$Title = $_POST['Title'];
			$Date = $_POST['Date'];
			$Text = $_POST['Text'];
			$Time = $_POST['Time'];

			$query = "INSERT INTO BEROEPS1_P5_Tele_Lens_Cursussen VALUES (NUll, '$Title', '$Date', '$Time', '$Text')";

			if (mysqli_query($mysqli, $query))
			{
				echo "<div id='landing2'><p>$Title is toegevoegd!</p></div>";
			}
			// als het goed gaat

			else
			{
				echo "<div id='landing2'><p>Fout bij toevoegen $Title!</p></div>";
			}// als het niet goed gaat
		}// als je submit hebt gekregen
		else
		{
			echo "<div id='landing2'><p>Geen gevens ontvangen...</p></div>";
		}// als je helemaal geen sumit hebt gekregen
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