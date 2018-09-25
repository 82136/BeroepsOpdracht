<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HomePage</title>
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
					<li class="hover"><a href="galerij.php">Galerij</a></li>
					<li class="hover"><a href="cursus_inschrijf.php">Inschrijven</a></li>
					<li class="hover"><a href="cursus_uitlees.php">Cursussen</a></li>
					<li class="hover"><a href="lid_cursussen.php">MijnCursussen</a></li>
					<li class="hover"><a href='uitlog.php'>UITLOGGEN</a></li>
				</ul>
			</nav>
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
					<li class="hover"><a href="galerij.php">Galerij</a></li>
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
	?>
		<div class="wrapper">
			<nav>
				<ul>
					<li class="hover"><a href="index.php">Home</a></li>
					<li class="hover"><a href="galerij.php">Galerij</a></li>
					<li class="hover"><a href="cursus_inschrijf.php">Inschrijven</a></li>
					<li class="hover"><a href="cursus_uitlees.php">Cursussen</a></li>
					<li class="hover"><a href="inlog.php">INLOGGEN!</a></li>
				</ul>
			</nav>
		</div>
	<?php
		}
	?>
	
<div id="landing">	
	<h1 class="homeh1">Tele-Lens</h1>
	<h1 class="Rnaam">Capture Your Moments Forever!</h1>
	<img src="Afbeeldingen/TeleLensLogo.png" alt="Logo">
</div>
	
<div id="info">
	<div id="banner1">
		<h2> Over Tele-Lens</h2>
	</div>
	
	<article class="article1">
		<h2><strong>Wij zijn Tele-Lens!</strong></h2>
			<p class="nopadding">
				Wij zijn Tele-Lens de nieuwe generatie aan moderne en creative Foto cursussen!<br><br>
				In Augustus 2017 te Rotterdam zijn wij begonnen met het starten van onze cursussen voor fotografie. Fotografie is onze passie en we wouden dit
				overbrengen aan nieuwe generaties en mensen die meer over fotografie willen leren.<br>
				Al onze cursus docenten zijn zeer gedreven en houden van veel inzit geven en krijgen. <br><br>
				in 4 weken tijd leert u zoveel mogelijk over fotografie en andere cursussen!<br>
				elke cursus duurt 1 à 2 uur en krijgt u uitleg en opdrachten over fotografie. Bij het volgen van de cursus<br>
				word natuurlijk veel inzet verwacht.<br><br> U leert onderandere veel over het maken van foto's en het bewerken ervan.<br>
				Bij het volgen van de cursus kunt u een licentie aanschaffen voor een editing software naar keuze<br>
				die u kunt gebruiken tijdens de loop van uw cursus, meer informatie hierover krijgt u op onze locatie zelf!
			</p>
			<h3 class="promotie"><strong>We hopen u snel te zien op onze locatie!!</strong></h3>
	</article>
	<article class="article2">
		<h2 style="text-align:center">Openings Tijden</h2>
		<div class="insideArticle"> 
			<table>
				<tr>
					<th><strong>Dag:</strong></th>
					<th><strong>Tijd:</strong></th>
				</tr>
				<tr>
					<td>Maandag</td>
					<td>8:00 - 17:00</td>
				</tr>
				<tr>
					<td>Dinsdag</td>
					<td>8:00 - 17:00</td>
				</tr>
				<tr>
					<td>Woensdag</td>
					<td>8:00 - 17:00</td>
				</tr>
				<tr>
					<td>Donderdag</td>
					<td>8:00 - 17:00</td>
				</tr>
				<tr>
					<td>Vrijdag</td>
					<td>8:00 - 17:00</td>
				</tr>
				<tr>
					<td>Zaterdag</td>
					<td>8:00 - 17:00</td>
				</tr>
				<tr>
					<td>Zondag</td>
					<td><strong>Gesloten</strong></td>
				</tr>
			</table>
		</div>
	</article>

<div id="Footer">
	<label><strong>Tele-Lens - Snotroggelplein 31 Rotterdam 2451RD - Tele-Lens@outlook.com - 010-12345678</strong></label>
</div>		
<script type="text/javascript">
 // Scrolling Effect
 $(window).on('scroll', function() {
       if($(window).scrollTop()) {
             $('nav').addClass('black');
	   }
       else {
             $('nav').removeClass('black');
       }
 });
</script>
</body>
</html>
