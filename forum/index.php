<?php

include "../klassen/db.php";
include "../klassen/FUNCTIONS.php";
include "../klassen/tutorials.php";

session_start();
$id_mitarbeiter  = GetMyVar("id_mitarbeiter", SessionMyVar("id_mitarbeiter", 0));
$kundennummer    = GetMyVar("kundennummer", SessionMyVar("kundennummer", 0));
$mitarbeitername = GetMyVar("mitarbeitername", SessionMyVar("mitarbeitername", ""));

$_SESSION["id_mitarbeiter"]  = $id_mitarbeiter;
$_SESSION["kundennummer"]    = $kundennummer;
$_SESSION["mitarbeitername"] = $mitarbeitername;

// include "samurai.php";

echo '<html>
<head>
<link rel="stylesheet" type="text/css" href="../beauty.css">
</head>
<body style="text-align: center;">
Herzlich Willkommen!<br>
Hier k&ouml;nnen Sie alle Videotutorials anschauen, aber auch Fragen stellen und mit anderen Benutzern diskutieren.<br>
Wenn Sie weitere Hilfe ben&ouml;tigen, z&ouml;gern Sie nicht den Hersteller der Software anzurufen: 0176 642 755 72. ';

$playlists = new playlists;

foreach ($playlists->playlists as $playlist) {
    echo '<h2>'.$playlist->titel.'</h2>';
    foreach($playlist->tutorials as $key=>$tutorial) {
        echo '<div style="display: inline-block; padding: 20px;">
        <a href="player.php?id='.$tutorial->ID.'">
        <img src="'.$tutorial->link_thumbnail.'" style="border-radius: 10px; height: 150px;"></a><br>';
        echo $tutorial->titel;
        echo '</div>';
        if($key < (count($playlist->tutorials) - 1)) {
            echo '<img src="../pics/arrow_right.png" style="display: inline-block; height: 70px; position: relative; top: -50px;">';
        }
    }
}

echo '</body>
</html>';





?>