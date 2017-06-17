<div id="page">
	<?php
	if (!empty($_GET["page"])){
		$page=$_GET["page"];}
	else
	{
		$page=0;
	}
	switch ($page) {
		case 0:
			include_once('include/pages/liste_user.php'); // Mettre ici les pages correspondantes
			// Du genre connexion, creer un compte, voir le panier, etc.
			break;
		case 1:
			include_once('include/pages/connexion.php'); // Mettre ici les pages correspondantes
			break;
		case 2;
			include_once('include/pages/create_user.php');
			break;
//			 Ajouter une nouvelle personne
//			include("pages/personne/ajouterPersonne.inc.php");
//			break;
			// Page 404
//		default : 	include_once('pages/erreur404.inc.php');
	}

	?>
</div>
