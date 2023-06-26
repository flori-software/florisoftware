<?php
session_start();
$id_mitarbeiter  = $_GET["id_mitarbeiter"] ?? 0;
$kundennummer    = $_GET["kundennummer"] ?? 0;
$mitarbeitername = $_GET["mitarbeitername"] ?? 0;

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
        echo 'Herzlich Willkommen';
    }
}



?>