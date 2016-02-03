
<div class="titre"> 	<!-- Titre -->
	<a href="../PPE-GeekZone" title="Accueil"><img class="titre" src="img/titregeek.jpg" alt="GeekZone" /></a>
</div>


<div class="menuBackLeft"></div>	<!-- Rectangle à gauche derrière le menu -->

<div class="menu">

	<h1 class="menu"> M E N U </h1> 	<!-- Menu avec les images + liens + 
											code pour montrer la page en cour + survol de la souris -->
												
	<a href="../" title="Vêtements"><img class="boutique menuVêtements menuS" src="img/boutique.png" alt="MenuBoutique" 
		<?php if ($nav_en_cours == 'Boutique'){ echo 'id="en-cours"';} ?> /></a>
	
	<a href="../" title="Gadgets"><img class="gadget menuGadgets menuS" src="img/gadget.png" alt="MenuGadget" 
		<?php if ($nav_en_cours == 'Gadget'){ echo 'id="en-cours"';} ?> /></a>

	<a href="../" title="Divers"><img class="manger menuDivers menuS" src="img/manger.png" alt="MenuManger" 
		<?php if ($nav_en_cours == 'Divers'){ echo 'id="en-cours"';} ?> /></a>
	
	<a href="../" title="Téléphones"><img class="phone menuTéléphones menuS" src="img/phone.png" alt="MenuPhone" 
		<?php if ($nav_en_cours == 'Téléphone'){ echo 'id="en-cours"';} ?> /></a>

	<a href="../" title="Usb"><img class="usb menuUsb menuS" src="img/usb.png" alt="MenuUsb" 
		<?php if ($nav_en_cours == 'Usb'){ echo 'id="en-cours"';} ?> /></a> 

	<a href="../PPE-GeekZone" title="Accueil"><img class="accueil menuAccueil menuS" src="img/accueilgeek.png" alt="MenuAccueil" 
		<?php if ($nav_en_cours == 'Accueil'){ echo 'id="en-cours"';} ?> /></a>

</div>