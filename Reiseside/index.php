<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Hovedside - reiseside."/>
	<meta name="author" content="Barbro M. Klashaugen, Marius Karlsen, Dan Eig, Alexander Paulsen"/>
	<link rel="stylesheet" href="css1.css"/>
	

	<title>Pakketurer</title>
</head>

<body>
<div class="bodybox">
<div class="menybox">
<div id="overskrift">
<h1>Pakketurer.com</h1>
</div>
<table id="menytabell">
<form action="" method="get">
<tr>
<td><input class="meny" type="submit" value="Backpacking" name="back"/></td>
<td><input class="meny" type="submit" value="  Surfing  " name="surf"/></td>
<td><input class="meny" type="submit" value=" Skiferie " name="ski"/></td>
<td><input class="meny" type="submit" value="Fotballtur " name="fotball"/></td>
</tr>
</form>


<?php

if (isset($_REQUEST["back"]))
{
	include "nedremeny/back.php";
/*if (isset($_REQUEST["back"]))
{
	
}*/
}

if (isset($_REQUEST["surf"]))
{
	include "nedremeny/surf.php";
}
if (isset($_REQUEST["ski"]))
{
	include "nedremeny/ski.php";
}
if (isset($_REQUEST["fotball"]))
{
	include "nedremeny/fotball.php";
}
?>
</table>
</div>
<p>Her står det masse om oss og bilder og tilbud etc.</p>
</div>


</body>
</html>