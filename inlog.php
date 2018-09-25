<?php
session_start();
?>
<!doctype html>
<html class="inlog">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
		<?php
		if (isset($_POST['inlog']))
		{
			require 'config.php';

			$Gebruikersnaam = $_POST['Gebruikersnaam'];
			$Wachtwoord = $_POST['Wachtwoord'];

			$query = "SELECT * FROM BEROEPS1_P5_Tele_Lens_Login
					  WHERE Gebruikersnaam = '$Gebruikersnaam'
					  AND Wachtwoord = '$Wachtwoord'";

			$resultaat = mysqli_query($mysqli, $query);

			if (mysqli_num_rows($resultaat) > 0)
			{
				$user = mysqli_fetch_array($resultaat);
				$_SESSION['Gebruikersnaam'] = $user['Gebruikersnaam'];
				$_SESSION['Level'] = $user['Level'];
				$_SESSION['Voornaam'] = $user['Voornaam'];
				$_SESSION['Achternaam'] = $user['Achternaam'];
				$_SESSION['Geboortedatum'] = $user['Geboortedatum'];
				$_SESSION['Mail'] = $user['Mail'];
				echo "<div id='landing2'>";
				echo "<center><p><font color='black' style='font-weight:bold; font-size: 22px;'>Hallo $Gebruikersnaam, u bent ingelogd!</font></p></center>";
				echo "<center><p><font color='black' style='font-weight:bold; font-size: 22px;'>Naar de <a href='index.php'>HoofdPagina</a>!</font></p></center>";
				echo "</div>";
			}
			else
			{	
				echo "<div id='landing2'>";
				echo "<center><p><font color='black' style='font-weight:bold; font-size: 22px;'>Naam en/of wachtwoord zijn onjuist.</font></p></center>";
				echo "<center><p><font color='black' style='font-weight:bold; font-size: 22px;'><a href='inlog.php'>Probeer Opnieuw</a></font></p></center>";
				echo "</div>";
			}
		}
		else
		{
	?>
			<div id='landing2'>
				<center><h2>Log in!</h2></center>
				<form method="post" action="">
					<table>
						<tr>
							<td><label for="Gebruikersnaam">Gebruikersnaam:</label></td>
							<td><input type="text" name="Gebruikersnaam" id="Gebruikersnaam"></td>
						</tr>
						<tr>
							<td><label for="Wachtwoord">Wachtwoord:</label>	</td>
							<td><input type="password" name="Wachtwoord" id="Wachtwoord"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="inlog" value="LOG IN"></td>
						</tr>
					</table>
				</form>
				<center><label><strong>Heeft U nog geen account? - </strong><a href="aanmeld.php"><strong>Registreren!</strong></a></label></center>
			</div>
	<?php
		}
	?>
</body>
</html>