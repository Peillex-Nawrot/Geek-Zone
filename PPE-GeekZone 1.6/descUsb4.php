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
		$rep = $bdd->prepare('SELECT nom FROM produit WHERE produit_id = ?');
		$rep->execute(array('17')); 
		while ($donnees = $rep->fetch()) { 
			echo $donnees['nom'];
		}
	?>
	</div>	
	<div class="miniPhotoProduit1"> 	<!-- Petite photo n°1 -->
		<form id="f1" class="f1" method="post"  action="descUsb4.php">
		<input class="descImg image1Usb4" name="b1" type="submit" value="" id="b1" />
		</form>
	</div>
	 
	<div class="miniPhotoProduit2"> 	<!-- Petite photo n°2 -->
		<form id="f1" class="f1" method="post"  action="descUsb4.php">
		<input class="descImg image2Usb4" name="b2" type="submit" value="" id="b2" />
		</form>
	</div>
	
	<div class = "photoProduit"> 	<!-- Grande photo -->
	<?php
	if (isset($_POST['b1'])) {
		echo '<img class="descImgBase" src="img/USB/ventilateur-lumineux-usb.jpg" />';
	} elseif (isset($_POST['b2'])) {
		echo '<img class="descImgBase" src="img/USB/ventilateur-lumineux-usb-1.jpg" />';
	} else {
		echo '<img class="descImgBase" src="img/USB/ventilateur-lumineux-usb.jpg" />';
	}
		?>
	</div>
	
	<div class="acheterProduit"> 	<!-- Description a droite du produit -->
		<?php
			$rep = $bdd->prepare('SELECT prix FROM produit WHERE produit_id = ?');
			$rep->execute(array('17')); 
			while ($donnees = $rep->fetch()) { 
				echo '<p class = "acheterProduit"> Prix : ' .$donnees['prix'].'€<p>';
			}
		?>
		<div class = "panier">
			<form id ="f1" class = "f1" method = "post" action = "descUsb4.php"> 
			<input class = "panier" name = "bPanier" type = "submit" value = "" id = "bPanier" />
			</form> 
		</div> 
	</div>
	
	<div class="descProduit"> 	<!-- Description en dessous du produit -->
	<?php
	try {
		$rep = $bdd->prepare('SELECT detail FROM produit WHERE produit_id = ?');
		$rep->execute(array('17'));
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