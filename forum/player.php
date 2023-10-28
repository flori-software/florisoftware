<?php
include "../klassen/db.php";
include "../klassen/FUNCTIONS.php";
include "../klassen/tutorials.php";
// include "samurai.php";
session_start();

$tutorials = tutorial::get_tutorial($_GET["id"]);
$tutorial  = $tutorials[0];

echo '<html>
<head>
<link rel="stylesheet" type="text/css" href="../beauty.css">
</head>
<body>';
$id_bild = "zurueck";
echo '<a href="index.php">
<img src="../pics/back.png" style="width: 200px; display: inline-block;"
name="'.$id_bild.'" id="'.$id_bild.'"
onmouseover="f_change_pic(\''.$id_bild.'\', \'../pics/back_selected.png\')"
onmouseout="f_change_pic(\''.$id_bild.'\', \'../pics/back.png\')"></a>
<div style="display: inline-block; position: relative; left: 100px;"><h1>'.$tutorial->titel.'</h1></div>';
echo '<div style="position: absolute; top: 100px;">
<div style="text-align: center;">

<iframe width="1200" height="675" src="'.$tutorial->link_youtube.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<p style="position: relative; left: 10%; width: 80%;">'.$tutorial->beschreibung.'</p>
</div>';








echo '</body>
</html>';
?>
<script>
function f_change_pic(id,new_url) {
	document.images[id].src=new_url;
}
</script>