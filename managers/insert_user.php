<?php

function insert_user($login, $password, $email, $level, $permission) {

	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (mysqli_connect_errno()) {
		printf("Échec de la connexion : %s\n", mysqli_connect_error());

	}

	$stmt = mysqli_stmt_init($link);
	if (mysqli_stmt_prepare($stmt, 'INSERT INTO users (login, email, password, level, rang) VALUES(?, ?, ?, ?, ?)')) {
		mysqli_stmt_bind_param($stmt, "sssii", $login, $password, $email, $level, $permission);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
}

?>