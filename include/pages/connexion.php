<h2 class="text-center">Se connecter</h2>
<?php

// Tester ici si la variable de session liee a la connexion est deja set. 
// Si c'est le cas, alors cette page n'a pas de raison d'etre.
// Soit rediriger, soit proposer une deco.

if (!empty($_POST["login"]) && !empty($_POST["password"])) {
	include("managers/get_one_user.php");
	
	$user = get_one_user($_POST["login"]);
	
	$hashed_pwd = hash("sha512", $_POST["password"].SEL);
	if ($_POST["login"] === $user["login"] && $hashed_pwd === $user["password"]) {
		// login success
		$_SESSION["login"] = $_POST["login"];
	} else { ?>
		<p>Login / Mot de passe incorrect!</p>
	<?php }
}

?>


<form id="form-connexion" action="#" method="post">
	<label>Identifiant</label>
	<input type="text" name="login">
	<label>Mot de passe</label>
	<input type="password" name="password">
	<label for=""></label>
	<input class="sub-button" type="submit" value="Connexion">
</form>