<?php

function insert_user($login, $password, $email, $level, $permission) {
//	$link = mysqli_connect("localhost", "root", "root", "rush00");
//	if (mysqli_connect_errno()) {
//		printf("Échec de la connexion : %s\n", mysqli_connect_error());
//		exit();
//	}
////	echo 'Tentative d insertion bd avec :';
////	echo $login."\n";
////	echo $password."\n";
////	echo $email."\n";
////	echo $level."\n";
//	$stmt = mysqli_stmt_init($link);
//	if (mysqli_stmt_prepare($stmt, 'INSERT INTO users (login, password, email, level, user_permission) VALUES(?, ?, ?, ?, ?)')) {
//		mysqli_stmt_bind_param($stmt, "sssii", $login, $password, $email, $level, $permission);
//		mysqli_stmt_execute($stmt);
//		mysqli_stmt_close($stmt);
//	} else {
//		echo "triste\n";
//	}
//	mysqli_close($link);
	
	
	$link = mysqli_connect("localhost", "root", "root", "rushbis");
	if (mysqli_connect_errno()) {
		printf("Échec de la connexion : %s\n", mysqli_connect_error());

	}

	$stmt = mysqli_stmt_init($link);
	if (mysqli_stmt_prepare($stmt, 'INSERT INTO users (login, email, password, level, rang) VALUES(?, ?, ?, ?, ?)')) {
		mysqli_stmt_bind_param($stmt, "sssii", $login, $password, $email, $level, $permission);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		echo "coucou\n";
	}
	mysqli_close($link);
}

?>