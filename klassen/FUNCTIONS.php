<?php

function MyDatabase() {
	$mysqli=new mysqli("localhost","floricica","DerHerrHatsGegebenDerHerrHatsGenommen","floricica");
	if (mysqli_connect_errno()) {
    	printf("Es konnte keine Verbindung zur Datenbank aufgebaut werden<p>", mysqli_connect_error());
    	exit();
	}
	return $mysqli;
}

?>