<html>
<head>
<meta charset="ISO-8859-1">
<title>Mode</title>
<link rel="stylesheet" type="text/css" href="css/Mode.css" />
<link rel="stylesheet" type="text/css" href="css/css-geek.css" />
</head>
<body>
<?php $nav_en_cours = 'Mode'; ?> 	<!-- Pour savoir la page en cour -->
	<?php include 'include/barre-menu.inc.php' ?> 	<!-- Background + titre + rectangle avec le menu -->
	<div class = "photoOpacity"></div>
	<div class="photoCadre">
		<div class=titrePhoto> Nos <span class="espace"> Article <span class="espace"> de <span class="espace"> Mode <span class="espace"> ! </span></span></span></span></div>
		<div class = "mode1">
			<a href="Mode1.php" title="Gadget1"><img class = "imgMode1 articleS" src = "img/mode/bonnet-barbe.jpg" /></a>
		</div>
		<div class = "mode2">
			<a href="Mode2.php" title="Gadget2"><img class = "imgMode2 articleS" src = "img/mode/t-shirt-coder.jpg" /></a>
		</div>
		<div class = "mode3">
			<a href="Mode3.php" title="Gadget3"><img class = "imgMode3 articleS" src = "img/mode/t-shirt-detecteur-wifi.jpg" /></a>
		</div>
		<div class = "mode4">
			<a href="Mode4.php" title="Gadget3"><img class = "imgMode4 articleS" src = "img/mode/t-shirt-les-jeux-video-ont-ruine-ma-vie.jpg" /></a>
		</div>
	</div>
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->
</body>
</html>