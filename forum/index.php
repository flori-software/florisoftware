<?php
include "../klassen/FUNCTIONS.php";
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
    // Du kommst hier nicht rein
    ausgang();

} else {
    // Identifizierung über Gabriel
    $quelle = $_SERVER['HTTP_REFERER'];
    $test   = strpos($quelle, $url);
    if($test == false) {
        ausgang();
    } else {
        // Geschützter Bereich
        echo '<html>
        <head>
        <link rel="stylesheet" type="text/css" href="../beauty.css">
        </head>
        <div style="text-align: center;">
        Herzlich Willkommen!<br>
        Hier k&ouml;nnen Sie alle Videotutoriale anschauen, aber auch Fragen stellen und mit anderen Benutzern diskutieren.<br>
        Wenn Sie weitere Hilfe ben&ouml;tigen, z&ouml;gern Sie nicht den Hersteller der Software anzurufen: 0176 642 755 72. 
        </div>
        </html>';
    }
}



?>