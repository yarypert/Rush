<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adopte un mate</title>
	<link rel="stylesheet" href="rush.css" charset="utf-8">
</head>
<body>
	<div class="header">
		<div class="logo">
			<img src="resources/Logo.png">
		</div>
		<div class="panier">
			<img class="imgpanier" src="resources/panier.png">
			<div class="info_panier" style="height: 35px; width: 150px">Login:</BR>Total panier:</div>
			<
		</div>
	</div>
	<div class="baruser1">
		<a class="create" href="index.php?page=2"><?php if ($_SESSION['connect'] == 0) echo "create" ; else echo "profil" ?></a>
		<a class="connecter" href="index.php?page=1"><?php if ($_SESSION['connect'] == 0) echo "se connecter" ; else echo "se deconnecter" ?></a>
	</div>