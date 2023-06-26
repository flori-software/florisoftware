<?php
session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="beauty.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	</head>
	<body>
	<div class="mittelteil" id="mittelteil">
	<img src="pics/titelbild.jpg" class="titelbild">
	<div class="flori_software_schrift">flori-software</div>
<?php	
	$menu_inhalte = Array();
    
    $menu_inhalte[1]["name"] = "Wer sind wir?";
    $menu_inhalte[1]["link"] = "index.php";
    $menu_inhalte[2]["name"] = "Produkte";
    $menu_inhalte[2]["link"] = "produkte.php";
    $menu_inhalte[3]["name"] = "Unser soziales Engagement";
    $menu_inhalte[3]["link"] = "warum.php";
    #$menu_inhalte[4]["name"] = "Woran wir glauben";
    #$menu_inhalte[4]["link"] = "credo.php";
    $menu_inhalte[5]["name"] = "Impressum";
    $menu_inhalte[5]["link"] = "impressum.php";
  
  
  
  
	

	foreach($menu_inhalte as $key=>$menupunkt) {
		echo '<a class="menu" href="'.$menupunkt["link"].'">'.$menupunkt["name"].'</a>';
	}
	echo '<p><div class="inhalt">';




?>