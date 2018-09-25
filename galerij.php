<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Galerij</title>
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
					<li class="hover"><a href="cursus_inschrijf.php">Inschrijven</a></li>
					<li class="hover"><a href="cursus_uitlees.php">Cursussen</a></li>
					<li class="hover"><a href="inlog.php">INLOGGEN!</a></li>
				</ul>
			</nav>
		</div>
	<?php
		}
	?>
	
<div id="landing2">	
	<table id="Galerij">
		<tr>
			<td colspan="3"><strong><font color="black" style="font-size: 25px;">Voorbeeld aan foto's die zijn gemaakt en/of bewerkt via onze Curssusen!</font></strong></td>
		</tr>
		
		<tr>
			<td class="galerijTD"><img src="Afbeeldingen/foto1.jpg" alt="Foto1" class="GalerijIMG"></td>
			<td class="galerijTD"><img src="Afbeeldingen/foto2.jpg" alt="Foto2" class="GalerijIMG"></td>
			<td class="galerijTD"><img src="Afbeeldingen/foto3.jpg" alt="Foto3" class="GalerijIMG"></td>
		</tr>
		<tr>
			<td class="galerijTD"><img src="Afbeeldingen/foto4.jpg" alt="Foto4" class="GalerijIMG"></td>
			<td class="galerijTD"><img src="Afbeeldingen/foto5.jpg" alt="Foto5" class="GalerijIMG"></td>
			<td class="galerijTD"><img src="Afbeeldingen/foto6.jpg" alt="Foto6" class="GalerijIMG"></td>
		</tr>
		<tr>
			<td class="galerijTD"><img src="Afbeeldingen/foto7.jpg" alt="Foto7" class="GalerijIMG"></td>
			<td class="galerijTD"><img src="Afbeeldingen/foto8.JPG" alt="Foto8" class="GalerijIMG"></td>
			<td class="galerijTD"><img src="Afbeeldingen/foto9.jpg" alt="Foto9" class="GalerijIMG"></td>
		</tr>
	</table>
</div>
	
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
