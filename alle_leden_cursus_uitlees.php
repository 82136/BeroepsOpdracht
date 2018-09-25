<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<script src="JavaScript/jquery-3.3.1.min.js"></script>
<script src="Sortable_Plugin/jquery.tablesorter.js"></script>
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
			<table id="Table" class="sort">
				<thead>
					<tr>
						<th>Gebruikersnaam:</th>
						<th>Voornaam:</th>
						<th>Achternaam:</th>
						<th>Geboortedatum:</th>
						<th>Mail:</th>
						<th>ID_cursus</th>
					</tr>
				</thead>
				<tbody>
	<?php
			require('config.php');
			$query = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Lid_Cursussen";
			$resultaat = mysqli_query($mysqli, $query);

			while ($rij = mysqli_fetch_array($resultaat))
			{	
				echo "<tr>";
				echo "<td>" . $rij['Gebruikersnaam'] . "</td>";
				echo "<td>" . $rij['Voornaam'] . "</td>";
				echo "<td>" . $rij['Achternaam'] . "</td>";
				echo "<td>" . $rij['Geboortedatum'] . "</td>";
				echo "<td>" . $rij['Mail'] . "</td>";
				$ID_cursus = $rij['ID_cursus'];
				$query2 = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen WHERE ID=" . $ID_cursus;
				$resultaat2 = mysqli_query($mysqli, $query2);
				$rij2 = mysqli_fetch_array($resultaat2);

				echo "<td>" . $rij2['Title'] . "</td>";
				echo "</tr>";
			}
	?>
				</tbody>
				</table>
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
<script src="Opdracht52.js"></script>
</body>
</html>