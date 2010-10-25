<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meny</title>
</style>
<link href="css.css" rel="stylesheet" type="text/css">
</head>

<body>

<table id=menytabell>
<form action="" method="get">
<tr>
<td><input class="meny" type="submit" value="Backpacking" name="back"/></td>
<td><input class="meny" type="submit" value="Surfing" name="surf"/></td>
<td><input class="meny" type="submit" value="Skiferie" name="ski"/></td>
<td><input class="meny" type="submit" value="Fotballtur" name="fotball"/></td>
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

</body>
</html>