<?php

// Tester ici si la variable de session liee a la connexion est deja set. 
// Si c'est le cas, alors cette page n'a pas de raison d'etre.
// Soit rediriger, soit proposer une deco.

?>



<h2 class="text-center">Se connecter</h2>


<form id="form-connexion" action="" method="post">
	<label>Identifiant</label>
	<input type="text" name="login">
	<label>Mot de passe</label>
	<input type="password" name="password">
	<label for=""></label>
	<input class="sub-button" type="submit" value="Connexion">
</form>