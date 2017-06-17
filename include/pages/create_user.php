<?php

if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["conf-password"]) && !empty($_POST["level"]) && !empty($_POST["email"])) {
	// Verifier les donnes (deux fois le meme mot de passe, etc.)
	// Faire appel a un fichier php qui fera l'ajout dans la base de donnees
	// Redigirer la page vers l'accueil ou quelque chose comme ca

	// Insert into database
	include("managers/insert_user.php");

//	insert_user($_POST["login"], $_POST["password"], $_POST["email"], $_POST["level"], 1);
	include("managers/get_all_users.php");
	$liste_user = get_all_users();

} else {
	// On arrive sur la page depuis la premiere fois, donc on affiche le formulaire classique
?>

<h2 class="text-center">Créer un compte</h2>


<form id="form-create-account" action="#" method="post">
	<label>Login</label>
	<input type="text" name="login" required="required">
	<label>Mot de passe</label>
	<input type="password" name="password" required="required">
	<label>Confirmer votre mot de passe</label>
	<input type="password" name="conf-password" required="required">
	<label>Adresse e-mail</label>
	<input type="text" name="email" required="required">
	<label>Niveau</label>
	<input type="number" min="0" max="21" name="level" required="required">
	<label for=""></label>
	<input class="sub-button" type="submit" value="Créer" onclick="msg()">
</form>
<script>
function msg() {
    alert("Account succesfully created !!");
}
</script>


<?php
}
?>