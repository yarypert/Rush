<?php

function update_one_user($login, $email, $level, $rang, $login) {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "UPDATE USERS SET email=?, level=?, rang=? WHERE LOGIN=?")) {
		mysqli_stmt_bind_param($stmt, "sii", $email, $level, $rang, $login);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
	return ($user);
}
?>