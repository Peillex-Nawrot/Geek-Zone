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
	<?php include_once 'id.php' ?>
	<?php
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host='.$hote.';dbname='.$base, $user, $mdp);
	$bdd->exec('SET NAMES utf16');
	$reponse = $bdd->prepare('SELECT * FROM boutique WHERE ville = ? '); ?>
	
	
	<div class="photoOpacity"></div> 	<!-- Bloc des photos transparent en dessous du titre -->
	<div class="photoCadre">
	<div class=titrePhoto> Nos <span class="espace"> Boutiques <span class="espace"> ! </span></span></div>
		<div id="container"> 	<!-- Bloc "parent" des photos -->
		
			<div class="albertville">
			 	<div class="display"> 	<!-- Affiche les infos de (span.info) quand passage de la souris -->
				<div class="infoFleche"></div>			
			</div>
				<span class="info">
				<span class="infoPhoto">
				<p class="descPhoto">
				<?php
				try {
					$reponse->execute(array('albertville'));
						
					while ($donnees=$reponse->fetch()){
						echo $donnees['ville'] . '</span>';
						echo '<hr class="info"/>';
						echo $donnees['horaires'] . '<br>';
						echo $donnees['rue'] . '<br>';
						echo $donnees['cp'] . '<br>';		
						echo $donnees['telephone'];
						echo '</span>';
					}
				} catch (Exception $e) {
					die ('Erreur :' . $e ->getMessage());
				}					
						?>      
				</p>		 
			</div>

					
			
			<div class="annecy">
				<div class="display"> 	<!-- Affiche les infos de (span.info) quand passage de la souris -->
				<div class="infoFleche"></div>
			</div>
				<span class="info">
				<span class="infoPhoto">
				<p class="descPhoto">
				<?php
				try {
					$reponse->execute(array('annecy'));
						
					while ($donnees=$reponse->fetch()){
						echo $donnees['ville'] . '</span>';
						echo '<hr class="info"/>';
						echo $donnees['horaires'] . '<br>';
						echo $donnees['rue'] . '<br>';
						echo $donnees['cp'] . '<br>';		
						echo $donnees['telephone'];
						echo '</span>';
					}
				} catch (Exception $e) {
					die ('Erreur :' . $e ->getMessage());
				}					
						?>      
				</p>		 
			</div>
				
			
			<div class="chambery">
				<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoFleche"></div>
			</div>
				<span class="info">
				<span class="infoPhoto">
				<p class="descPhoto">
				<?php
				try {
					$reponse->execute(array('chambery'));
						
					while ($donnees=$reponse->fetch()){
						echo $donnees['ville'] . '</span>';
						echo '<hr class="info"/>';
						echo $donnees['horaires'] . '<br>';
						echo $donnees['rue'] . '<br>';
						echo $donnees['cp'] . '<br>';		
						echo $donnees['telephone'];
						echo '</span>';
					}
				} catch (Exception $e) {
					die ('Erreur :' . $e ->getMessage());
				}					
						?>      
				</p>		 
			</div>
								
			
			<div class="clermont">	
				<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoFleche"></div>
			</div>
				<span class="info">
				<span class="infoPhoto">
				<p class="descPhoto">
				<?php
				try {
					$reponse->execute(array('clermont ferrand'));
						
					while ($donnees=$reponse->fetch()){
						echo $donnees['ville'] . '</span>';
						echo '<hr class="info"/>';
						echo $donnees['horaires'] . '<br>';
						echo $donnees['rue'] . '<br>';
						echo $donnees['cp'] . '<br>';		
						echo $donnees['telephone'];
						echo '</span>';
					}
				} catch (Exception $e) {
					die ('Erreur :' . $e ->getMessage());
				}					
						?>      
				</p>		 
			</div>
									
			
			<div class="grenoble">
				<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoFleche"></div>
			</div>
				<span class="info">
				<span class="infoPhoto">
				<p class="descPhoto">
				<?php
				try {
					$reponse->execute(array('grenoble'));
						
					while ($donnees=$reponse->fetch()){
						echo $donnees['ville'] . '</span>';
						echo '<hr class="info"/>';
						echo $donnees['horaires'] . '<br>';
						echo $donnees['rue'] . '<br>';
						echo $donnees['cp'] . '<br>';		
						echo $donnees['telephone'];
						echo '</span>';
					}
				} catch (Exception $e) {
					die ('Erreur :' . $e ->getMessage());
				}					
						?>      
				</p>		 
			</div>
									
			
			<div class="lyon">
				<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoFleche"></div>
			</div>
				<span class="info">
				<span class="infoPhoto">
				<p class="descPhoto">
				<?php
				try {
					$reponse->execute(array('lyon'));
						
					while ($donnees=$reponse->fetch()){
						echo $donnees['ville'] . '</span>';
						echo '<hr class="info"/>';
						echo $donnees['horaires'] . '<br>';
						echo $donnees['rue'] . '<br>';
						echo $donnees['cp'] . '<br>';		
						echo $donnees['telephone'];
						echo '</span>';
					}
				} catch (Exception $e) {
					die ('Erreur :' . $e ->getMessage());
				}					
						?>      
				</p>		 
			</div>
									
			
			<div class="valence">
					<div class="display"> 	<!-- Affiche les infos de (div.info) quand passage de la souris -->
				<div class="infoFleche"></div>
			</div>
				<span class="info">
				<span class="infoPhoto">
				<p class="descPhoto">
				<?php
				try {
					$reponse->execute(array('valence'));
						
					while ($donnees=$reponse->fetch()){
						echo $donnees['ville'] . '</span>';
						echo '<hr class="info"/>';
						echo $donnees['horaires'] . '<br>';
						echo $donnees['rue'] . '<br>';
						echo $donnees['cp'] . '<br>';		
						echo $donnees['telephone'];
						echo '</span>';
					}
				} catch (Exception $e) {
					die ('Erreur :' . $e ->getMessage());
				}					
						?>      
				</p>		 
			</div>
		</div>
	</div>
	
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->
</body>
</html>