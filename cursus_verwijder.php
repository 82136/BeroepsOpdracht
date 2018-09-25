<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>cursus verwijder</title>
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
	<?php
			require('config.php');

			$id = $_GET['id'];
			$query = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen WHERE ID =" . $id;
			$resultaat = mysqli_query($mysqli, $query);

			if (mysqli_num_rows($resultaat) == 0)
			{
				echo "<p>Er is nog geen cursus met de ID:" . $id. "</p>";
			}
			else
			{
				$rij = mysqli_fetch_array($resultaat);
	?>

			<p>Wilt u het volgende lid verwijderen?</p>

			<form method="post" action="cursus_verwijder_verwerk.php" id="verwijder">
				<input type="text" name="ID" value="<?php echo $rij['ID'];?>" hidden>
				<table>
					<tr>
						<td>Title:</td>
						<td><input type="text" name="Title" value="<?php echo $rij['Title']?>" readonly></td>
					</tr>
					<tr>
						<td>Date:</td>
						<td><input type="text" name="Date" value="<?php echo $rij['Date'] ?>" readonly></td>
					</tr>
					<tr>
						<td>Time:</td>
						<td><input type="time" name="Time" value="<?php echo $rij['Time']?>" readonly></td>
					</tr>
					<tr>
						<td>Text:</td>
						<td><textarea form="verwijder" name="Text" readonly><?php echo $rij['Text']?></textarea></td>
					</tr>
					<tr>
						<td></td><!-- LEEG -->
						<td><input type="submit" name="submit" value="Verwijder"></td>
					</tr>
				</table>
			</form>
		</div>
	<?php
			}
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
		<p>Oeps er is fout gegaan! U hoort hier niet te zijn, klik <a href='index.php'>hier</a></p>
	</div>
	<?php
		}
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>	
</body>
</html>