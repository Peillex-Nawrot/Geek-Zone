<html>
<head>
<meta charset="ISO-8859-1">
<title>Gadget</title>
<link rel="stylesheet" type="text/css" href="css/Gadget.css" />
<link rel="stylesheet" type="text/css" href="css/css-geek.css" />
</head>
<body>
	<?php $nav_en_cours = 'Gadget'; ?> 	<!-- Pour savoir la page en cour -->
	<?php include 'include/barre-menu.inc.php' ?> 	<!-- Background + titre + rectangle avec le menu -->
	<div class = "photoOpacity"></div>
	<div class="photoCadre">
		<div class=titrePhoto> Nos <span class="espace"> Gadgets <span class="espace"> ! </span></span></div>
		<div class = "gadget1">
			<a href="Gadget1.php" title="Gadget1"><img class = "imgGadget1 articleS" src = "img/gadget/powerball.jpg" /></a>
		</div>
		<div class = "gadget2">
			<a href="Gadget2.php" title="Gadget2"><img class = "imgGadget2 articleS" src = "img/gadget/prise-chargeur-usb-robinet-1.jpg" /></a>
		</div>
		<div class = "gadget3">
			<a href="Gadget3.php" title="Gadget3"><img class = "imgGadget3 articleS" src = "img/gadget/souris-optique-pixel.jpg" /></a>
		</div>
		<div class = "gadget4">
			<a href="Gadget4.php" title="Gadget4"><img class = "imgGadget4 articleS" src = "img/gadget/stealth-switch.jpg" /></a>
		</div>
	</div>
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->
</body>
</html>