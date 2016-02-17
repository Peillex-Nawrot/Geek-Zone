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
			 		<div class="display"> 	<!-- Affiche les infos de (span.info) quand passage de la souris -->
					<div class="infoAlbertvilleFleche"></div>					
				</div>
					<span class="info"><span class="infoPhoto"> ALBERTVILLE </span><hr class="info"/>
					<p class="descPhoto"> Lundi au samedi <br> 8h30 a 12 et 14h a 19h <br><br>
					32 rue Gambetta, 73200 <br> 
					Appelez-nous :<br> 04 56 10 36 89 </p>
				</span>	
			</div>
						
			
			<div class="annecy">
				<div class="display"> 	<!-- Affiche les infos de (span.info) quand passage de la souris -->
				<div class="infoAlbertvilleFleche"></div>
			</div>
				<span class="info"><span class="infoPhoto"> ANNECY </span><hr class="info"/>	
					<p class="descPhoto"> Mardi au samedi <br> 9h a 12h30 et 14h30 a 19h30 <br> 
					Dimanche de 9h a 12h30<br>46 av Geneve, 74000 <br>
					Appelez-nous :<br> 04 50 57 01 13  </p>
				</span>
			</div>
				
			
			<div class="chambery">
				<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoAlbertvilleFleche"></div>
			</div>
				<span class="info"><span class="infoPhoto"> CHAMBERY </span><hr class="info"/>
					<p class="descPhoto"> Mardi au samedi <br> 8h30 a 19h30 <br> 
					Dimanche de 9h a 12h30 <br> 35 rue Jean Pierre Veyrat <br> 73000 <br>
					Appelez-nous :<br> 04 79 85 19 96  </p>				
				</span>	
			</div>
								
			
			<div class="clermont">	
			<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoAlbertvilleFleche"></div>
				</div>
				<span class="info"><span class="infoPhoto"> CLERMONT </span><hr class="info"/>
					<p class="descPhoto"> Mardi au samedi <br> 10h a 12h30 et 13h30 a 19h00 <br>
					Dimanche de 9h a 12h30<br>11 rue Saint-Esprit, 63000<br>
					Appelez-nous :<br> 09 83 70 11 98 </p>				
				</span>	
			</div>
									
			
			<div class="grenoble">
			<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoAlbertvilleFleche"></div>
				</div>
				<span class="info"><span class="infoPhoto"> GRENOBLE </span><hr class="info"/>
					<p class="descPhoto"> Mardi au samedi <br> de 8h30 a 19h30 <br> 
					Dimanche de 9h a 12h30<br>2 Bis av St Roch, 38000<br> 
					Appelez-nous :<br> 04 76 54 33 47   </p>			
				</span>	
			</div>
									
			
			<div class="lyon">
			<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoAlbertvilleFleche"></div>
				</div>
				<span class="info"><span class="infoPhoto"> LYON </span><hr class="info"/>
					<p class="descPhoto"> Ouvert 7 jours sur 7 <br> 8h30 a 20h30 <br> 
					Dimanche 8h30 a 19h00 <br> 7 Quai Celestins, 69002 <br> 
					Appelez-nous :<br> 04 72 19 68 68 </p>
				</span>
			</div>
									
			
			<div class="valence">
			<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoAlbertvilleFleche"></div>
				</div>
				<span class="info"><span class="infoPhoto"> VALENCE </span><hr class="info"/>
					<p class="descPhoto"> Lundi au samedi <br> 8h30 a 12h et 14h a 19h <br><br>
					84 rte Beauvallon, 26000<br> 
					Appelez-nous :<br> 04 75 56 27 77  </p>
				</span>	
			</div>
		</div>
	</div>
	
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->

</body>
</html>