<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Side 3</title>
</head>

<body>
<?php
$dato = date("d/m/Y H:i");
echo $dato;
?>
<h3>Her er informasjonen vi har om din bestilling:</h3>
<hr/>
<table>
<tr>
<td>Antall reisende: </td>
<td><?php 
if ($_SESSION["antall"] == "")
{
echo "Velg antall reisende og trykk oppdater <a href='bestillingsskjema.php'>tilbake</a>";
}
else
{
echo $_SESSION["antall"];
}?></td>
</tr>
<tr>
<td>Reisesmål: </td>
<td><?php
$pris = 0;
$hotell= 0;
		if ($_SESSION["fisketur"] =="" and $_SESSION["surf"] =="" and $_SESSION["skiferie"] =="" and $_SESSION["fotballtur"] =="")
		{
			echo "Velg et reisemål <a href='bestillingsskjema.php'>tilbake</a>";
		}
	 if (isset($_SESSION["fisketur"]))
	 {
 		echo $_SESSION["fisketur"]." ";
		if ($_SESSION["fisketur"] == "Fiske i lofoten")
		{
		$pris += 999;
		$hotell += $_SESSION["hotellnetter"] * 800;
		}
		if ($_SESSION["fisketur"] == "Fiske i florida")
		{
		$pris += 5495;
		$hotell += $_SESSION["hotellnetter"] * 699;
		}
		if ($_SESSION["fisketur"] == "Fiske i australia")
		{
		$pris += 9845;
		$hotell += $_SESSION["hotellnetter"] * 599;
		}
	 }
	 if (isset($_SESSION["surf"]))
	 {
		 echo $_SESSION["surf"]." ";
		 if ($_SESSION["surf"] == "Surfe på Bali")
		{
		$pris += 9250;
		$hotell += $_SESSION["hotellnetter"] * 159;
		}
		if ($_SESSION["surf"] == "Surfe i Australia")
		{
		$pris += 10300;
		$hotell += $_SESSION["hotellnetter"] * 599;
		}
		if ($_SESSION["surf"] == "Surfe i Hawaii")
		{
		$pris += 11650;
		$hotell += $_SESSION["hotellnetter"] * 550;
		}
	 }
	 if (isset($_SESSION["skiferie"]))
	 {
		 echo $_SESSION["skiferie"]." ";
		if ($_SESSION["ski"] == "Ski i Sveits")
		{
		$pris += 1299;
		$hotell += $_SESSION["hotellnetter"] * 1299;
		}
		if ($_SESSION["ski"] == "Ski i USA")
		{
		$pris += 4999;
		$hotell += $_SESSION["hotellnetter"] * 999;
		}
		if ($_SESSION["ski"] == "Ski i Italia")
		{
		$pris += 2345;
		$hotell += $_SESSION["hotellnetter"] * 1100;
		}
	 }
	 if (isset($_SESSION["fotballtur"]))
	 {
		 echo $_SESSION["fotballtur"]." ";
		if ($_SESSION["fotballtur"] == "Fotball i England")
		{
		$pris += 1099;
		$hotell += $_SESSION["hotellnetter"] * 600;
		}
		if ($_SESSION["fotballtur"] == "Fotball i Spania")
		{
		$pris += 1899;
		$hotell += $_SESSION["hotellnetter"] * 450;
		}
		if ($_SESSION["fotballtur"] == "Fotball i Argentina")
		{
		$pris += 7799;
		$hotell += $_SESSION["hotellnetter"] * 299;
		}
	 }


$pris += $hotell; 
$pris+=120;
$pris+=$pris*1.03;
$pris= $pris*$_SESSION["antall"];

 ?></td>
</tr>
<tr>
<td>Reisedato: </td>
<td><?php 
if ($_SESSION["dag"] =="" or $_SESSION["dato"] =="" or $_SESSION["aar"] =="")
{
	echo "Fyll inn reisedato <a href='bestillingsskjema.php'>tilbake</a>";
}
else { 
echo $_SESSION["dag"]."/".$_SESSION["dato"]."/".$_SESSION["aar"]; } ?></td>
</tr>
<tr>
<td>Hjemreise: </td>
<td><?php 
if ($_SESSION["daghjem"] =="" or $_SESSION["datohjem"] =="" or $_SESSION["aarhjem"] =="")
{
	echo "Fyll inn hjemreise <a href='bestillingsskjema.php'>tilbake</a>";
}
else { 
echo $_SESSION["daghjem"]."/".$_SESSION["datohjem"]."/".$_SESSION["aarhjem"]; } ?></td>
</tr>
<tr>
<td>Hotellnetter</td>
<td><?php
if ($_SESSION["hotellnetter"] == "")
{
	echo "Fyll inn antall netter du vil ha på hotell <a href='bestillingsskjema.php'>tilbake</a>";
}
else {
	echo $_SESSION["hotellnetter"];
}
?></td>
</tr>
<tr>
<td>Navn: </td>
<td><?php if ($_REQUEST["fornavn"] =="" or $_REQUEST["etternavn"] == "")
	{
		echo "Fyll inn fullt navn <a href='bestillingsskjema.php'>tilbake</a>";
	}
	else
	{
		echo $_REQUEST["fornavn"]." ".$_REQUEST["etternavn"];	
	}?></td>
</tr>
<tr>
<td>Adresse: </td>
<td><?php
	if ($_REQUEST["adresse"] == "")
	{
		echo "Fyll inn adresse <a href='bestillingsskjema.php'>tilbake</a>";
		
	}
	else
	{
		echo $_REQUEST["adresse"];
	}
	?></td>
</tr>
<tr>
<td>Postnr: </td>
<td><?php
	if ($_REQUEST["postnr"] == "")
	{
		echo "Fyll inn postnr <a href='bestillingsskjema.php'>tilbake</a>";
		
	}
	else
	{
		echo $_REQUEST["postnr"];
	}
	?></td>
</tr>
<tr>
<td>Poststed: </td>
<td><?php
	if ($_REQUEST["poststed"] == "")
	{
		echo "Fyll inn poststed <a href='bestillingsskjema.php'>tilbake</a>";
		
	}
	else
	{
		echo $_REQUEST["poststed"];
	}
	?></td>
</tr>
<tr>
<td>Telefon: </td>
<td><?php
	if ($_REQUEST["tlf"] == "")
	{
		echo "Fyll inn telefonnummer <a href='bestillingsskjema.php'>tilbake</a>";
		
	}
	else
	{
		echo $_REQUEST["tlf"];
	}
	?></td>
</tr>
<tr>
<td>E-post</td>
<td><?php
	if ($_REQUEST["epost"] == "")
	{
		echo "Fyll inn epost <a href='bestillingsskjema.php'>tilbake</a>";
		
	}
	else
	{
		echo $_REQUEST["epost"];
	}
	?></td>
    <tr>
    <td>Pris: </td><td><?php echo $pris." kr"; ?></td>
    </tr>
    <?php
	$_SESSION["fornavn"] = $_REQUEST["fornavn"];
	$_SESSION["etternavn"] = $_REQUEST["etternavn"];
	$_SESSION["adresse"] = $_REQUEST["adresse"];
	$_SESSION["postnr"] = $_REQUEST["postnr"];
	$_SESSION["poststed"] = $_REQUEST["poststed"];
	$_SESSION["tlf"] = $_REQUEST["tlf"];
	$_SESSION["epost"] = $_REQUEST["epost"];
	$_SESSION["pris"] = $pris;
	?>
<tr>
<td><a href="bestillingsskjema.php">Tilbake</a></td>
</tr>
<form action="send.php" method="post">
<tr>
<td><input type="submit" name="send" value="Send bestilling" /></td>
</tr>
</form>
</table>


</body>
</html>