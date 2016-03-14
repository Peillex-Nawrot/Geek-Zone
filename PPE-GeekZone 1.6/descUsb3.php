<html>
<head>
<meta charset="ISO-8859-1">
<title>Portables</title>
<link rel="stylesheet" type="text/css" href="css/USB.css" />
<link rel="stylesheet" type="text/css" href="css/css-geek.css" />
<link rel="stylesheet" type="text/css" href="css/SousParties.css" />
</head>
<body>
	<?php $nav_en_cours = 'USB'; ?> 	<!-- Pour savoir la page en cour -->
	<?php include 'include/barre-menu.inc.php' ?> 	<!-- Background + titre + rectangle avec le menu -->
	<?php 
		include_once 'id.php';
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host='.$hote.';dbname='.$base, $user, $mdp);
		$bdd -> exec('SET NAMES utf16');
	?>
	
	<div class = "photoOpacity"></div>
	<div class="photoCadre">
	<div class="titrePhoto"> 	<!-- Titre -->
	<?php
	try {
		$rep = $bdd->prepare('SELECT nom FROM produit WHERE produit_id = ?');
		$rep->execute(array('16')); 
		while ($donnees = $rep->fetch()) { 
			echo $donnees['nom'];
		}
	} catch (Exception $e) {
		die ('Erreur :' . $e ->getMessage());		
	}
	?>
	</div>		
	<div class = "photoProduit"> 	<!-- Grande photo -->
	<?php
	try {
		$rep = $bdd->prepare('SELECT image FROM produit WHERE produit_id = ?');
		$rep->execute(array('16'));
		while ($donnees = $rep->fetch()) {
			echo '<img class="descImgBase" src="img/USB/'.$donnees['image'].'" />';
		}
	}
	catch (Exception $e) {
		die ('Erreur :' . $e ->getMessage());
	}
		?>
	</div>
	
	<div class="acheterProduit"> 	<!-- Description a droite du produit -->
		<?php
		try {
			$rep = $bdd->prepare('SELECT prix FROM produit WHERE produit_id = ?');
			$rep->execute(array('16')); 
			while ($donnees = $rep->fetch()) { 
				echo '<p class = "acheterProduit"> Prix : ' .$donnees['prix'].'€<p>';
			}
		} catch (Exception $e) {
			die ('Erreur :' . $e ->getMessage());
		}
		?>
		<div class = "panier">
			<form id ="f1" class = "f1" method = "post" action = "descUsb3.php"> 
			<input class = "panier" name = "bPanier" type = "submit" value = "" id = "bPanier" />
			</form> 
		</div> 
	</div>
	
	<div class="descProduit"> 	<!-- Description en dessous du produit -->
	<?php
	try {
		$rep = $bdd->prepare('SELECT detail FROM produit WHERE produit_id = ?');
		$rep->execute(array('16'));
		while ($donnees = $rep->fetch()) { 
			echo '<p class = "descArticle">'.$donnees['detail'].'</p>'; 
		}
	}
	catch (Exception $e) {
		die ('Erreur :' . $e ->getMessage());
	}
	?>
	</div>
	</div>
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->
	
</body>
</html>