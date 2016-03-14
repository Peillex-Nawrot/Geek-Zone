<html>
<head>
<meta charset="ISO-8859-1">
<title>Cuisine</title>
<link rel="stylesheet" type="text/css" href="css/Cuisine.css" />
<link rel="stylesheet" type="text/css" href="css/css-geek.css" />
</head>
<body>
	<?php $nav_en_cours = 'Cuisine'; ?> 	<!-- Pour savoir la page en cour -->
	<?php include 'include/barre-menu.inc.php' ?> 	<!-- Background + titre + rectangle avec le menu -->
	<div class = "photoOpacity"></div>
	<div class="photoCadre">
		<div class=titrePhoto> Nos <span class="espace"> Article <span class="espace"> de <span class="espace"> Cuisine <span class="espace"> ! </span></span></span></span></div>
		<div class = "cuisine1">
			<a href="descCuisine1.php" title="Cuisine1"><img class = "imgCuisine1 articleS" src = "img/cuisine/fridgebook-magnet-reseau-social-frigo (1).jpg" /></a>
		</div>
		<div class = "cuisine2">
			<a href="descCuisine2.php" title="Cuisine2"><img class = "imgCuisine2 articleS" src = "img/cuisine/glacons-tetris (1).jpg" /></a>
		</div>
		<div class = "cuisine3">
			<a href="descCuisine3.php" title="Cuisine3"><img class = "imgCuisine3 articleS" src = "img/cuisine/mug-pac-man-chaud-froid.jpg" /></a>
		</div>
	</div>
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->
</body>
</html>