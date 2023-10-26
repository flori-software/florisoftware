<?php
class playlists {
    public $playlists;

    public function __construct() {
        $this->playlists = Array();

        // Erste Schritte
        $playlist = new playlist;
        $playlist->titel = "Erste Schritte";
        $playlist->tutorials = tutorial::erste_schritte();
        $this->playlists[] = $playlist;
    }
}

class playlist {
    public $titel;
    public $tutorials;
}

class tutorial {
    public $ID;
    public $titel;
    public $beschreibung;
    public $link_thumbnail;
    public $link_youtube;

    public static function erste_schritte() {
        $erste_schritte = Array();

        $tutorial = new tutorial;
        $tutorial->titel        = "Kundengruppen definieren";
        $tutorial->beschreibung = "Um Kunden in der Software zu sehen, müssen wir einerseits diese Kundengruppen zuordnen und andererseits uns selbst auf diese Kundengruppen Zugang gew&auml;hren. Es ist eines der ältesten Tutorials und wird demnächst durch ein aktuelleres ersetzt.";
        $tutorial->link_thumbnail = "pics/kundengruppen_definieren.png";
        $tutorial->link_youtube = "https://www.youtube.com/watch?v=XYfUM1-nyVI";
        $erste_schritte[] = $tutorial;

        $tutorial = new tutorial;
        $tutorial->titel        = "Kunden anlegen";
        $tutorial->beschreibung = "Dieses Tutorial besch&auml;ftigt sich damit, wie wir Kunden in Gabriel anlegen und deren Erstkontaktb&ouml;gen ausf&uuml;llen k&ouml;nnen. Es ist eines der ältesten Tutorials und wird demnächst durch ein aktuelleres ersetzt.";
        $tutorial->link_thumbnail = "pics/kunden_anlegen.png";
        $tutorial->link_youtube = "https://www.youtube.com/watch?v=ENMtZOESJnI";
        $erste_schritte[] = $tutorial;

        return $erste_schritte;
    }
}



?>