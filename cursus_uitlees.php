<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cursussen</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<script src="JavaScript/jquery-3.3.1.min.js"></script>
<script src="Sortable_Plugin/jquery.tablesorter.js"></script>
</head>

<body>
	<?php
	require 'config.php';
		if ($_SESSION['Level'] == 2)
		{
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
			<div id="landing2">
			<table>
				<tr>
					<th>Title:</th>
					<th>Dag:</th>
					<th>Tijd:</th>
					<th>Beschrijving:</th>
				</tr>
				<?php
				$query = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen";
				$resultaat = mysqli_query($mysqli, $query);

				while ($rij = mysqli_fetch_array($resultaat))
				{	
					echo "<tr>";
					echo "<td>" . $rij['Title'] . "</td>";
					echo "<td>" . $rij['Date'] . "</td>";
					echo "<td>" . $rij['Time'] . "</td>";
					echo "<td>" . $rij['Text'] . "</td>";
					echo "</tr>";
				}
				?>
				</table>
				</div>
			<?php
		}/* level 2*/
		if ($_SESSION['Level'] == 1)
		{
			?>
			<div class="wrapper">
				<nav>
					<ul>
						<li class="hover"><a href="index.php">Home</a></li>
						<li class="hover"><a href="cursus_uitlees.php">Cursussen</a></li>
						<li class="hover"><a href="cursus_toevoeg.php">CursusToevoegen</a></li>
						<li class="hover"><a href="alle_leden_cursus_uitlees.php">Aangemelde leden</a></li>
						<li class="hover"><a href='uitlog.php'>UITLOGGEN</a></li>
					</ul>
				</nav>
			</div>
			<div id="landing2">
			<table>
				<tr>
					<th>Title:</th>
					<th>Dag:</th>
					<th>Tijd:</th>
					<th>Beschrijving:</th>
					<th>Verwijder</th>
				</tr>
			<?php
			$query = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen";
			$resultaat = mysqli_query($mysqli, $query);

			while ($rij = mysqli_fetch_array($resultaat))
			{	
				echo "<tr>";
				echo "<td>" . $rij['Title'] . "</td>";
				echo "<td>" . $rij['Date'] . "</td>";
				echo "<td>" . $rij['Time'] . "</td>";
				echo "<td>" . $rij['Text'] . "</td>";
				echo "<td><a href='cursus_verwijder.php?id=" . $rij['ID'] . "'>verwijder</a></td>";
				echo "</tr>";
			}
			?>
			</table>
			</div>
			<?php
		}/* level 1*/
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
			<table>
				<tr>
					<th>Title:</th>
					<th>Dag:</th>
					<th>Tijd:</th>
					<th>Beschrijving:</th>
				</tr>
			<?php
			$query = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Cursussen";
			$resultaat = mysqli_query($mysqli, $query);

			while ($rij = mysqli_fetch_array($resultaat))
			{	
				echo "<tr>";
				echo "<td>" . $rij['Title'] . "</td>";
				echo "<td>" . $rij['Date'] . "</td>";
				echo "<td>" . $rij['Time'] . "</td>";
				echo "<td>" . $rij['Text'] . "</td>";
				echo "</tr>";
			}
			?>
			</table>
			</div>
			
			<?php
		}/* level 0*//*test*/
	?>
<div id="Footer2">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>
<script src="Opdracht52.js"></script>
</body>
</html>