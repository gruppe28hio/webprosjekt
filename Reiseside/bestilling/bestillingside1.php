<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Side 2</title>
</head>
<body>
<?php
if($_REQUEST["dag"] =="" or $_REQUEST["dato"] =="" or $_REQUEST["aar"] =="" or $_REQUEST["daghjem"] =="" or $_REQUEST["datohjem"] =="" or $_REQUEST["aarhjem"] =="") 
{
	echo "Du har ikke fylt ut all informasjonen på forrige side";
}
if ($_REQUEST["fisketur"] =="" and $_REQUEST["surf"] =="" and $_REQUEST["skiferie"] =="" and $_REQUEST["fotballtur"] =="")
{
	echo "<br/>Du har ikke fylt ut hvor du vil reise";
}
?>
<h3>Reiseleders personalia</h3>
<form action="bestillingside2.php" method="post">
<table>
<tr>
<td>Fornavn:</td><td style="color: red;">*</td>
<td><input type="text" name="fornavn"/></td>
</tr>
<tr>
<td>Etternavn:</td><td style="color: red;">*</td>
<td><input type="text" name="etternavn"/></td>
</tr>
<tr>
<td>Adresse:</td><td style="color: red;">*</td>
<td><input type="text" name="adresse"/></td>
</tr>
<tr>
<td>Postnr:</td><td style="color: red;">*</td>
<td><input type="text" name="postnr" size="2" /></td>
</tr>
<tr>
<td>Poststed:</td><td style="color: red;">*</td>
<td><input type="text" name="poststed" size="10"/></td>
</tr>
<tr>
<td>Telefonnr:</td><td style="color: red;">*</td>
<td><input type="text" name="tlf" size="10"/></td>
</tr>
<tr>
<td>E-post:</td><td style="color: red;">*</td>
<td><input type="text" name="epost" /></td>
</tr>
<tr>
<td><input type="submit" name="neste" value="Neste" /></td>
</tr>

</table>


</form>
</body>
</html>
 <?php


$_SESSION["antall"] = $_REQUEST["antall"];
$_SESSION["fisketur"] = $_REQUEST["fisketur"];
$_SESSION["surf"] = $_REQUEST["surf"];
$_SESSION["fotballtur"] = $_REQUEST["fotballtur"];
$_SESSION["skiferie"] = $_REQUEST["skiferie"];
$_SESSION["dag"] = $_REQUEST["dag"];
$_SESSION["dato"] = $_REQUEST["dato"];
$_SESSION["aar"] = $_REQUEST["aar"];
$_SESSION["daghjem"] = $_REQUEST["daghjem"];
$_SESSION["datohjem"] = $_REQUEST["datohjem"];
$_SESSION["aarhjem"] = $_REQUEST["aarhjem"];
$_SESSION["hotellnetter"] = $_REQUEST["hotellnetter"];
 ?>


</body>
</html>