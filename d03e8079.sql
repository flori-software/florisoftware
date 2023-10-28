-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 28. Okt 2023 um 22:10
-- Server-Version: 5.7.39
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `d03e8079`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `playlist`
--

CREATE TABLE `playlist` (
  `ID` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `playlist`
--

INSERT INTO `playlist` (`ID`, `titel`) VALUES
(1, 'Neueste Tutorials'),
(3, 'Veranstaltungen'),
(4, 'Schulassistenz'),
(5, 'Kunden'),
(6, 'Mitarbeiter'),
(7, 'Familienentlastender Dienst'),
(8, 'Abrechnung'),
(11, 'Mobiles Modul'),
(12, 'Sonstiges'),
(200, 'Erste Schritte ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tutorial`
--

CREATE TABLE `tutorial` (
  `ID` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `beschreibung` text NOT NULL,
  `link_thumbnail` varchar(255) NOT NULL,
  `link_youtube` varchar(255) NOT NULL,
  `playlists` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tutorial`
--

INSERT INTO `tutorial` (`ID`, `titel`, `beschreibung`, `link_thumbnail`, `link_youtube`, `playlists`) VALUES
(1, 'Kundengruppen definieren', 'Um Kunden in der Software zu sehen, müssen wir einerseits diese Kundengruppen zuordnen und andererseits uns selbst auf diese Kundengruppen Zugang gew&auml;hren. Es ist eines der ältesten Tutorials und wird demnächst durch ein aktuelleres ersetzt.', 'pics/kundengruppen_definieren.png', 'https://www.youtube.com/embed/XYfUM1-nyVI?si=I5OsF8Q8mQI632ey', '*200*5*'),
(2, 'Kunden anlegen', 'Dieses Tutorial besch&auml;ftigt sich damit, wie wir Kunden in Gabriel anlegen und deren Erstkontaktb&ouml;gen ausf&uuml;llen k&ouml;nnen. Es ist eines der ältesten Tutorials und wird demnächst durch ein aktuelleres ersetzt.', 'pics/kunden_anlegen.png', 'https://www.youtube.com/embed/ENMtZOESJnI?si=DdGEcwidc2XOtcCO', '*200*5*'),
(3, 'Bezugspersonen', 'Wie kann ich Bezugspersonen speichern und einem Kunden zuordnen?', 'pics/bezugspersonen.png', 'https://www.youtube.com/embed/jSmruS62MXo?si=NuQdDu_035cT0uDH', '*5*200*'),
(4, 'Mitarbeiter anlegen - Teil 1', 'Wie lege ich in der Datenbank neue Mitarbeiter an?', 'pics/mitarbeiter1.png', 'https://www.youtube.com/embed/gkZpKiKx4j4?si=ZWbMop4NVZT5LI7l', '*200*6*'),
(5, 'Teilnehmerliste als PDF', 'In diesem Tutorial erkläre ich, wie wir Teilnehmer einer Veranstaltung erfassen und zur Anmeldung weitere Daten wie Zusage Kurzzeitpflege etc. eintragen können.', 'pics/veranstaltungen_teilnehmerliste.png', 'https://www.youtube.com/embed/q7C4xTRHRXs?si=5z-J9lj5Sk0_ypIm', '*3*'),
(6, 'Unterschriften bei Veranstaltungen', 'In diesem Tutorial wird gezeigt, wie Teilnehmer von Veranstaltungen ihre Anwesenheit mit einer Unterschrift bestätigen können.', 'pics/veranstaltungen_unterschriften.png', 'https://www.youtube.com/embed/ncL5YLeocTc?si=Rj2hRtlQSWiDY8oq', '*3*11*'),
(7, 'Schulbegleitung Teil 1', 'In diesem Tutorial erkläre ich, wie man in \"Gabriel\" Schulen anlegt und in diesen einzelne Schulassistenzen', 'pics/schulassistenz.png', 'https://www.youtube.com/embed/bxWLRnuIVRw?si=AIRmNOoEbxRb_DE0', '*4*'),
(8, 'Schulbegleitung Teil 2', 'Fortsetzung des Tutorials über Schulassisetenz', 'pics/schulassistenz2.png', 'https://www.youtube.com/embed/UDbo0qtP7zs?si=zgTXS2WSZKmh3rfK', '*4*'),
(9, 'Handzeichen und Unterschriften in der Schulbegleitung', 'In diesem Tutorial erkläre ich, wie ein Mitarbeiter seine Zeiten in der Schulassistenz mit HAndzeichen bestätigen kann und wie die Lehrkraft am Ende des Monats den Leistungsnachweis unterschreiben kann', 'pics/schulassistenz3.png', 'https://www.youtube.com/embed/IusE5KxCfTM?si=qDkuv78jjOqlYSE1', '*4*11*'),
(10, 'Die Pinnwand - TO DO oder Notizen!', 'Gabriels Pinnwand ist der ideale Ort für Notizen oder TO DO Listen! Hier erkläre ich wie man Notizen erstellt, mit anderen Teilt oder in jedem Teil der Software sichtbar macht. Auch wie man die Notizen einem Kollegen AUF DEN SCHREIBTISCH legt.', 'pics/pinnwand.png', 'https://www.youtube.com/embed/fZ-laEkcsGo?si=ojKPybchCBWVpE3w', '*12*'),
(11, 'HEB - Bögen', 'Im Bereich des stationären Wohnens werden sog. HEB-Bögen benutzt, von diesen sind der HEB-A und der HEB-B Bogen in Gabriel implementiert.', 'pics/heb.png', 'https://www.youtube.com/embed/ANgv6XXyZRM?si=sTMiXXl7jnkXfrOa', '*1*5*'),
(12, 'Mitarbeiter anlegen - Teil 2', 'In diesem Video erfahren Sie weitere Details zur Verwaltung von Mitarbeitern', 'pics/mitarbeiter2.png', 'https://www.youtube.com/embed/2dfG2ENki08?si=6zhzLc-dm6fbKguB', '*200*6*'),
(13, 'Frei konfigurierbare Berichte', 'Gabriel besitzt im Hintergrund eine eigene Datenbank nur für Berichte, deren Struktur Sie ganz frei festlegen können.', 'pics/berichte.png', 'https://www.youtube.com/embed/fgqRqcZ3t1k?si=CKq_bz4xP_NuNtmt', '*1*5*200*'),
(14, 'Fahrzeuge', 'Wie kann ich Daten von Fahrzeugen in der Datenbank speichern und Buchungen anlegen?', 'pics/fahrzeuge.png', 'https://www.youtube.com/embed/9qD0u3FTPco?si=08fLgrgdmmphuIzZ', '*3*12*');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `playlist`
--
ALTER TABLE `playlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
