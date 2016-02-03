<!DOCTYPE html>
<html>
<head>

	<meta charset="ISO-8859-1">
	<title> GeekZone </title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/css-geek.css"/>
	
</head>
<body>

	<?php $nav_en_cours = 'Accueil'; ?> 	<!-- Pour savoir la page en cour -->
	<?php include 'include/barre-menu.inc.php' ?> 	<!-- Background + titre + rectangle avec le menu -->
	
	<div class="photoOpacity"></div> 	<!-- Bloc des photos transparent en dessous du titre -->
	<div class="photoCadre">
	<div class=titrePhoto> Nos <span class="espace"> Boutiques <span class="espace"> ! </span></span></div>
		<div id="container"> 	<!-- Bloc "parent" des photos -->
			<div class="albertville">
				<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
					<div class="infoAlbertvilleFleche"></div>
				</div>
				<div class="info"><span class="infoPhoto"> ALBERTVILLE </span><hr class="info"/>
				
				
				</div>	
			</div>
			
			<div class="annecy">
			</div>
			
			<div class="chambery">
			</div>
			
			<div class="clermont">	
			</div>
			
			<div class="grenoble">
			</div>
			
			<div class="lyon">
			</div>
			
			<div class="valence">	
			</div>
		</div>
	</div>
	
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->

</body>
</html>