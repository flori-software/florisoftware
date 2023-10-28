<?php

function ausgang() {
    echo '<script>
    location.href = "https://flori-software.de/";
    </script>';
}

switch ($_SESSION["kundennummer"]) {
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

// Identifizierung über Gabriel
$quelle = $_SERVER['HTTP_REFERER'];
$test   = strpos($quelle, $url);
$test2  = strpos("flori-software.de", $url);


if(($test == false && $test2 == false) || $_SESSION["id_mitarbeiter"] == 0 || $_SESSION["kundennummer"] == 0 || $_SESSION["mitarbeitername"] == 0) {
    ausgang();
}








?>