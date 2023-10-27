<?php
class playlists {
    public $playlists;

    public function __construct() {
        $db = new db;
        
        // Lesen der Playlists aus der Datenbank
        $abfrage   = "SELECT * FROM `playlist`";
        $objekt    = new playlist;
        $nicht     = Array("tutorials");
        $playlists = $db->lese_alle_eigenschaften(leeres_objekt: $objekt, sql_statement: $abfrage, ausgeschlossene_eigenschaften: $nicht);
        
        // Lesen der einzelnen Tutorials
        foreach ($playlists as $playlist) {
            $abfrage = "SELECT * FROM `tutorial` WHERE `playlists` LIKE '%".$playlist->ID."%'";
            $objekt  = new tutorial;
            $playlist->tutorials = $db->lese_alle_eigenschaften(leeres_objekt: $objekt, sql_statement: $abfrage);
        }

        #echo 'Aus der DB:';
        #echo '<pre>', print_r($playlists), '</pre>';
        $this->playlists = $playlists;
    }
}

class playlist {
    public $ID;
    public $titel;
    public $tutorials; // Array
}

class tutorial {
    public $ID;
    public $titel;
    public $beschreibung;
    public $link_thumbnail;
    public $link_youtube;

}



?>