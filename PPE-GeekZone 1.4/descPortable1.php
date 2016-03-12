<html>
<head>
<meta charset="ISO-8859-1">
<title>Portables</title>
<link rel="stylesheet" type="text/css" href="css/Portable.css" />
<link rel="stylesheet" type="text/css" href="css/css-geek.css" />
<link rel="stylesheet" type="text/css" href="css/SousParties.css" />
</head>
<body>
	<?php $nav_en_cours = 'Portables'; ?> 	<!-- Pour savoir la page en cour -->
	<?php include 'include/barre-menu.inc.php' ?> 	<!-- Background + titre + rectangle avec le menu -->
	<?php include_once 'id.php'?>
	<div class = "photoOpacity"></div>
	<div class="photoCadre">
	<div class="titrePhoto"> Portables <span class="espace"> decapsuleur <span class="espace"> ! </span></span></div>
	<div class="miniPhotoProduit1">
		<img class="descImg" src = "img/portable/coque-iphone-4-decapsuleur-1.jpg" />
	</div>
	<div class="miniPhotoProduit2">
		<img class="descImg" src = "img/portable/coque-iphone-4-decapsuleur-2.jpg" />
	</div>
	<div class = "photoProduit">
		<img class="descImgBase" src = "img/portable/coque-iphone-4-decapsuleur.jpg" />
	</div>
	<div class="acheterProduit">
		
	</div>
	<div class="descProduit">
	<?php  	
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host='.$hote.';dbname='.$base, $user, $mdp);
		$bdd -> exec('SET NAMES utf16');
		$rep = $bdd->prepare('SELECT detail FROM produit WHERE produit_id = ?');
		$rep->execute(array('13'));
		while ($donnees = $rep->fetch()) { 
			echo '<p class = "descArticle">'.$donnees['detail'].'</p>'; 
		} 
	?>	
	</div>
	</div>
	<?php include 'include/pied-page.inc.php' ?> 	<!-- Bas de page  -->
</body>
</html>