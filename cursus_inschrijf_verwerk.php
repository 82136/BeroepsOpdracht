<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inschrijf melding</title>
<link rel="stylesheet" type="text/css" href="css/home.css">	
</head>

<body>
	<?php
	if ($_SESSION['Level'] == 2)
	{
		require('config.php');
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
	<?php
		$Voornaam = $_POST['Voornaam'];
		$Achternaam = $_POST['Achternaam'];
		$Geboortedatum = $_POST['Geboortedatum'];
		$email = $_POST['Mail'];
		$Gebruikersnaam = $_POST['Gebruikersnaam'];

		$ID = $_POST['ID'];
		$opdracht = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen WHERE ID = $ID";
		$resultaat = mysqli_query($mysqli, $opdracht);
		$cursus = mysqli_fetch_array($resultaat);
		$Datum = $cursus['Date'];
		$Tijd = $cursus['Time'];
		$Title = $cursus['Title'];

		$to = 'catchall@ict-lab.nl';
		$mailinhoud = "
		Voornaam: $Voornaam
		Achternaam: $Achternaam
		Geboortedatum: $Geboortedatum
		Mail: $email
		Cursus naam: $Title
		Datum: $Datum
		Tijd: $Tijd
		";
		$mailinhoud2 = "Beste , mr $Achteraam

		U heeft u aangemeld voor de cursus $Title. U wordt verwacht op volgende week $Datum om $tijd";
		$opdracht2 = "INSERT INTO BEROEPS1_P5_Tele_Lens_Lid_Cursussen VALUES (NULL, '$Voornaam', '$Achternaam', '$Geboortedatum', '$email', '$Gebruikersnaam', '$ID')";
		if (!empty($_POST))
			{	
				if (mysqli_query($mysqli, $opdracht2))
				{
				mail($to, 'Tele-Lens', $mailinhoud);
				mail($email, 'Tele-lens', $mailinhoud2);
				echo "<div id='landing2'>";
				echo "<h1>Sucsess!</h1>";
				echo "<p>Wij hebben uw aanmelding ontvangen u zou ook een mail als bevesteging krijgen.</p>";
				echo "</div>";
				}
				else 
				{
					echo"<div id='landing2'>niet gelukt</div>";
				}
			}
			var_dump($Datum, $email);
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
	<?php
		$Voornaam = $_POST['Voornaam'];
		$Achternaam = $_POST['Achternaam'];
		$Geboortedatum = $_POST['Geboortedatum'];
		$ID = $_POST['ID'];
		$email = $_POST['Email'];

		$opdracht = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen WHERE ID=" . $ID;
		$resultaat = mysqli_query($mysqli, $opdracht);
		if ($resultaat = mysqli_query($mysqli, $opdracht))
		{
		$cursus = mysqli_fetch_array($resultaat);
		$Cursusnaam = $cursus['Title'];
		$Datum = $cursus['Date'];
		$Tijd = $cursus['Time'];
		$Title = $cursus['Title'];

		$to = 'catchall@ict-lab.nl';
		$mailinhoud = "Voornaam: $Voornaam
		Achternaam: $Achternaam
		Geboortedatum: $Geboortedatum
		Mail: $email
		Cursus naam: $Title
		Datum: $Datum
		Tijd: $Tijd
		";
		$mailinhoud2 = "Beste , mr $Achteraam

		U heeft u aangemeld voor de cursus $Title. U wordt verwacht op volgende week $Datum om $tijd";
		$opdracht2 = "INSERT INTO BEROEPS1_P5_Tele_Lens_Lid_Cursussen VALUES (NULL, '$Voornaam', '$Achternaam', '$Geboortedatum', '$email', 'Niet ingelogt', '$ID')";
		if (!empty($_POST))
			{
				if (mysqli_query($mysqli, $opdracht2))
				{
					mail($to, 'Tele-Lens', $mailinhoud);
					mail($email, 'Tele-lens', $mailinhoud2);
					echo "<div id='landing2'>";
					echo "<h1>Sucsess!</h1>";
					echo "<p>Wij hebben uw aanmelding ontvangen u zou ook een mail als bevesteging krijgen.</p>";
					echo "</div>";
				}
			}
		}
		}
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>	
</body>
</html>