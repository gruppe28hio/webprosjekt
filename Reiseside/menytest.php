<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Meny</title>
</style>
<link href="css.css" rel="stylesheet" type="text/css">
</head>

<body>

<table>
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
	echo "<tr>
			<td><form action='india.php' method='get'/>
				<input class='nedremeny' type='submit' value='India' name='india'/></form></td>
		</tr>
		<tr>
			<td><form action='pakistan.php' method='get'/>
				<input class='nedremeny' type='submit' value='Pakistan' name='pakistan'/></form></td>
		</tr>
		<tr>
			<td><form action='peru.php' method='get'/>
				<input class='nedremeny' type='submit' value='Peru' name='peru'/></form></td>
		</tr>";

}

if (isset($_REQUEST["surf"]))
{
	echo "<tr><td> </td>
			<td><form action='india.php' method='get'/>
				<input class='nedremeny' type='submit' value='India' name='india'/></form></td>
		</tr>
		<tr><td> </td>
			<td><form action='australia.php' method='get'/>
				<input class='nedremeny' type='submit' value='Australia' name='australia'/></form></td>
		</tr>
		<tr><td> </td>
			<td><form action='hawaii.php' method='get'/>
				<input class='nedremeny' type='submit' value='Hawaii' name='hawaii'/></form></td>
		</tr>";
}
if (isset($_REQUEST["ski"]))
{
	echo "<tr><td> </td><td></td>
			<td><form action='sveits.php' method='get'/>
				<input class='nedremeny' type='submit' value='Sveits' name='Sveits'/></form></td>
		</tr>
		<tr><td> </td><td></td>
			<td><form action='usa.php' method='get'/>
				<input class='nedremeny' type='submit' value='USA' name='usa'/></form></td>
		</tr>
		<tr><td> </td><td></td>
			<td><form action='canada.php' method='get'/>
				<input class='nedremeny' type='submit' value='Canada' name='canada'/></form></td>
		</tr>";
}
if (isset($_REQUEST["fotball"]))
{
	echo "<tr><td> </td><td></td><td></td>
			<td><form action='england.php' method='get'/>
				<input class='nedremeny' type='submit' value='England' name='england'/></form></td>
		</tr>
		<tr><td> </td><td></td><td></td>
			<td><form action='spania.php' method='get'/>
				<input class='nedremeny' type='submit' value='Spania' name='spania'/></form></td>
		</tr>
		<tr><td> </td><td></td><td></td>
			<td><form action='Frankrike.php' method='get'/>
				<input class='nedremeny' type='submit' value='Frankrike' name='frankrike'/></form></td>
		</tr>";
}
?>

</table>

</body>
</html>