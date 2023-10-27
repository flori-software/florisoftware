<?php

class db {
    public $mysqli; // Verbindung

    public function __construct() {
        $mysqli=new mysqli("localhost","d03e8079","FreudeAmHerrnWirdDichHeilen","d03e8079");
        if (mysqli_connect_errno()) {
            printf("Es konnte keine Verbindung zur Datenbank aufgebaut werden<p>", mysqli_connect_error());
            exit();
        }
        $this->mysqli = $mysqli;
    }

    public function lese_alle_eigenschaften($leeres_objekt, $sql_statement, $ausgeschlossene_eigenschaften = Array()) {
        $mysqli = $this->mysqli;
        $antwort = Array(); // Es wird ein Array mit Objekten zurückgegeben
        if($result = $mysqli->query($sql_statement)) {
            while($row = $result->fetch_object()) {
                $neues_objekt = clone $leeres_objekt;
                foreach($neues_objekt as $eigenschaft=>$wert) {
                    if(!in_array(needle: $row, haystack: $ausgeschlossene_eigenschaften)) {
                        $neues_objekt->$eigenschaft = $row->$eigenschaft;
                    }
                }
                $antwort[] = $neues_objekt; 
            }
        } else {
            echo "Fehler in der Abfrage<br>";
        }
        return $antwort;
    }    
}


?>