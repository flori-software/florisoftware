<?php

function MyDatabase() {
	$mysqli=new mysqli("localhost","d03e8079","FreudeAmHerrnWirdDichHeilen","d03e8079");
	if (mysqli_connect_errno()) {
		printf("Es konnte keine Verbindung zur Datenbank aufgebaut werden<p>", mysqli_connect_error());
		exit();
	}
	return $mysqli;
}

function SessionMyVar($x,$leer) {
	if (isset($_SESSION["$x"])) {
		$myVar=$_SESSION["$x"];
	} else {
		$myVar=$leer;
	}
	return $myVar;
}

function GetMyVar($x, $leer, $unwanted_value = "") {
	if (isset($_GET["$x"]) && $_GET["$x"]!=$unwanted_value) {
		$myVar=$_GET["$x"];
	}
	else {
		if (isset($leer)) {
			$myVar=$leer;
		}
		else {
			$myVar="";
		}
	}
	return $myVar;
}

// Bei NotEmptyMyVar wird der Alternativwert nicht nur dann eingesetzt, wenn die Variable keinen Wert hat (!isset) sondern auch wenn der Wert leer ist. Es wird dei POST Methode benutzt.

function NotEmptyMyVar($x,$y) {
	if (isset($_POST["$x"]) && $_POST["$x"]!="") {
		$myVar=$_POST["$x"];
	}
	else {
		$myVar=$y;
	}
	return $myVar;
}

// Die Ueberpruefung ob der Wert "leer" (aber nicht NULL) ist, ist z.B. fuer Datumsfelder von Bedeutung, welche im Falle, dass sie einen "leeren" Wert haben den Wert 0000-00-00 bekommen müssen

function PostMyVar($x, $leer, $unwanted_value = "") {
	if (isset($_POST["$x"]) && $_POST["$x"]!=$unwanted_value) {
		$myVar=$_POST["$x"];
	}
	else {
		$myVar=$leer;
	}
	// NULL Werte sollen ohne Anführungszeichen gespeichert werden
	return $myVar;
}

function anf_validierung($wert) {
	if($wert != "NULL") {$wert = "'".$wert."'";}
	return $wert;
}

// 13. wie oben, aber fuer Cookies

function CookieMyVar($x,$leer) {
	if (isset($_COOKIE["$x"])) {
		$myVar=$_COOKIE["$x"];
		}
		else {
		$myVar=$leer;
		}
		return $myVar;
	}

// 13B. wie oben fuer REQUEST

function RequestMyVar($x,$leer) {
	if (isset($_REQUEST["$x"])) {
		$myVar=$_REQUEST["$x"];
		}
		else {
		$myVar=$leer;
		}
		return $myVar;
	}

?>