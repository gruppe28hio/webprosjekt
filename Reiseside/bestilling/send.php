<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sendt</title>
</head>
<?php


Mail ("gruppe28@hotmail.com","Bestilling","Navn: ".$_SESSION["fornavn"]." ".$_SESSION["etternavn"]."\r\n".
	  "Tur: ".$_SESSION["fisketur"].$_SESSION["surf"].$_SESSION["fotballtur"].$_SESSION["skiferie"]."\r\n".
	  "Utreise: ".$_SESSION["dag"]."/".$_SESSION["dato"]."/".$_SESSION["aar"]."\r\n".
	  "Hjemreise: ".$_SESSION["daghjem"]."/".$_SESSION["datohjem"]."/".$_SESSION["aarhjem"]."\r\n".
	  "Hotellnetter: ".$_SESSION["hotellnetter"]."\r\n".
	  "Antall: ".$_SESSION["antall"]."\r\n".
	  "Adresse: ".$_SESSION["adresse"]." ".$_SESSION["postnr"]." ".$_SESSION["poststed"]."\r\n".
	  "Tlf: ".$_SESSION["tlf"]."\r\n".
	  "Epost: ".$_SESSION["epost"]."\r\n".
	  "Pris: ".$_SESSION["pris"],"From: ".$_SESSION["epost"]);

?>
<p>Takk <?php echo $_SESSION["fornavn"] ?>. Din bestilling har blitt sendt til oss. Klikk <a href="index.phtml">her</a> 
	for å gå tilbake til forsiden.</p>

<body>
</body>
</html>