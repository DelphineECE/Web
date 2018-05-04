<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="vous1.css" />
		<title>vous</title>
		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<ul>
			<li><a class="active" href="accueil.php">ACCUEIL</a></li>
			<li><a href="vous.php">VOUS</a></li>
			<li><a href="monreseau1.php">MON RESEAU</a></li>
			<li><a href="#about">NOTIFICATIONS</a></li>
			<li><a href="emplois.php">EMPLOIS</a></li>
		</ul>
		
		<p><br>
			<div id="Layer1" style="position:absolute; left:200px; top:100px; width:136px; height:132px; z-index:1">
			<img name="couv" src="couvide.png" width="900" height="250" alt=""></div>
			<div id="Layer2" style="position:absolute; left:570px; top:255px; width:64px; height:58px; z-index:2">
			<img name="prof" src="photovide.png" width="150" height="150" alt=""></div>
		
		</p>
		<p id="cvf"> Formation </p>
		<div style="position:absolute; bottom:5px; left:50px;"><form>
		<textarea name="formation" rows="8" cols="45">
		</textarea>
		<input type="submit" value=Valider class="valider">
		</form></div>
		
		<p id="cve"> Expérience </p>
		<div style="position:absolute; bottom:5px; left:500px;"><form>
		<textarea name="experience" rows="8" cols="45">
		</textarea>
		<input type="submit" value=Valider class="valider">
		</form></div>
		
		<p id="cvci">Centre d'intérêt</p>
		<div style="position:absolute; bottom:5px; left:950px;"><form>
		<textarea name="interet" rows="8" cols="45">
		</textarea>
		<input type="submit" value=Valider class="valider">
		</form></div>

		

	</body>
</html>

