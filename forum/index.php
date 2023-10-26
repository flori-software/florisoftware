<?php
include "../klassen/FUNCTIONS.php";
include "../klassen/tutorials.php";

session_start();
$id_mitarbeiter  = GetMyVar("id_mitarbeiter", SessionMyVar("id_mitarbeiter", 0));
$kundennummer    = GetMyVar("kundennummer", SessionMyVar("kundennummer", 0));
$mitarbeitername = GetMyVar("mitarbeitername", SessionMyVar("mitarbeitername", ""));

$_SESSION["id_mitarbeiter"]  = $id_mitarbeiter;
$_SESSION["kundennummer"]    = $kundennummer;
$_SESSION["mitarbeitername"] = $mitarbeitername;

function ausgang() {
    echo '<script>
    location.href = "https://flori-software.de/";
    </script>';
}

switch ($kundennummer) {
    case '1':
        $url = "behindertenhilfe_verwaltung.work";
    break;
    
    case '2':
        $url = "hpz-lif-anwendung.work";
    break;

    case '3':
        $url = "diakonie-hochfranken-anwendung.work";
    break;

    case '4':
        $url = "hpz-lif-anwendung.work";
    break;

    case '6':
        $url = "hobs-gabriel.work";
    break;

    case '7':
        $url = "localhost";
    break;
}

if($id_mitarbeiter == 0 || $kundennummer == 0 || $mitarbeitername == 0) {
    echo 'Du kommst hier nicht rein';
    //ausgang();

} else {
    // Identifizierung über Gabriel
    $quelle = $_SERVER['HTTP_REFERER'];
    $test   = strpos($quelle, $url);

    $playlists = new playlists;
    //if($test == false) {

    // NUR FÜR DEBUGGING:
    if(false) {
        ausgang();
    } else {
        // Geschützter Bereich
        echo '<html>
        <head>
        <link rel="stylesheet" type="text/css" href="../beauty.css">
        </head>
        <div style="text-align: center;">
        Herzlich Willkommen!<br>
        Hier k&ouml;nnen Sie alle Videotutorials anschauen, aber auch Fragen stellen und mit anderen Benutzern diskutieren.<br>
        Wenn Sie weitere Hilfe ben&ouml;tigen, z&ouml;gern Sie nicht den Hersteller der Software anzurufen: 0176 642 755 72. ';

        foreach ($playlists->playlists as $playlist) {
            echo '<h2>'.$playlist->titel.'</h2>';
            foreach($playlist->tutorials as $key=>$tutorial) {
                echo '<div style="display: inline-block; padding: 20px;">
                <img src="'.$tutorial->link_thumbnail.'" style="border-radius: 10px; height: 150px;"><br>';
                echo $tutorial->titel;
                echo '</div>';
                if($key < (count($playlist->tutorials) - 1)) {
                    echo '<img src="../pics/arrow_right.png" style="display: inline-block; height: 70px; position: relative; top: -50px;">';
                }
            }
        }
       
        echo '</div>
        </html>';
    }
}



?>