<?php
session_start();
?>
<?php
/*
 require_once('mobile_device_detect.php');
mobile_device_detect(true,'http://cube.iu.hio.no/~s171667/reiseside/iPad/indexiPad.phtml',true,true,true,true,true,'http://cube.iu.hio.no/~s171667/reiseside/mobil/indexmobil.phtml',false);

?>
<?php
include('browserdetect.php');
*/
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
	<meta name="description" content="Hovedside - reiseside."/>
	<meta name="author" content="Barbro M. Klashaugen, Marius Karlsen, Dan Eig, Alexander Paulsen"/>
	<link rel="stylesheet" href="css1.css"/>
	


	<title>iTravel</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon" />
<link rel="shortcut icon" href="logo.jpg" type="image/x-icon" />

</head>
<body>


<div id="overbodybox">
<ul><li><a href="omoss.html" >Om oss</a></li> 
<li><a href="kontakt.html" >Kontakt oss</a></li>
<li><a href="reisevilkar.html" >Reisevilk�r</a></li>
</ul>
</div>


<div class="bodybox">
 
<div class="menybox">

<div id="itraveloverskrift"><h1>iTravel</h1></div>
<div id="meny">
<ul>
<li><strong><a style="background: #CCC;" href="index.phtml">Hjem</a></strong></li>
</ul>
<ul>
<li><a href="#" style="background: white;">Fisketurer</a>
<ul>
<li><a href="lofoten.html" style="background: white;">Lofoten</a></li>
<li><a href="florida.html" style="background: white;">Florida</a></li>
<li><a href="australiafisk.html" style="background: white;">Australia</a></li>
</ul>
</li>
</ul>
<ul>
<li><a href="#" style="background:white;">Surfing</a>
<ul>
<li><a href="bali.html" style="background:white;">Bali</a></li>
<li><a href="australia.html" style="background:white;">Australia</a></li>
<li><a href="hawaii.html" style="background:white;">Hawaii</a></li>
</ul>
</li>
</ul>
<ul>
<li><a href="#" style="background:white;">Skiferie</a>
<ul>
<li><a href="sveits.html" style="background: white;">Sveits</a></li>
<li><a href="usa.html" style="background: white;">USA</a></li>
<li><a href="italia.html" style="background: white;">Italia</a></li>
</ul>
</li>
</ul>
<ul>
<li><a href="#" style="background: white;">Fotballtur</a>
<ul>
<li><a href="england.html" style="background: white;">England</a></li>
<li><a href="spania.html" style="background: white;">Spania</a></li>
<li><a href="argentina.html" style="background: white;">Argentina</a></li>
</ul>
</li>
</ul>


</div>
</div>


<br/><br/>
<p>Er du lei av allminnelige reisem�l der du bare ligger og kjeder deg p� stranda hele ferien? 
�nsker du � gj�re noe nytt i ferien? iTravel arrangerer reiser for den mer eventyrlystne som �nsker
 � oppleve mer i ferien. Velkommen til iTravel - vi er her for deg!</p>
<img id="balisurf" src="balisurf.png" alt="bali" />

<div id="bestillher">
<h3>Bestill her!</h3>
</div>
<div id="bestilling">




<br/>
<form action="" method="post">
<table>
<tr>
<?php
if(!isset($_REQUEST["velgtur"]))
{
echo "
<td>
<select size='1' name='velg'>
<option></option>
<option value='fisketur1'>Fisketur</option>
<option value='surfetur1'>Surfetur</option>
<option value='skitur1'>Skitur</option>
<option value='fotballtur1'>Fotballtur</option>
</select>
</td>
<td><input type='submit' name='velgtur' value='Velg'/></td>
";
}
?>
</tr>
</table>
</form>
<table>
<tr>

<td></td>
<?php
if (isset($_REQUEST["velgtur"]))
{
echo "
<td></td>";
if ($_REQUEST["velg"]== "fisketur1")
{
echo "<td>Fisketur til</td>
	<td><select size='1' name='fisketur' >
	<option> </option>
	<option value='Fiske i lofoten'>Lofoten</option>
    <option value='Fiske i florida'>Florida</option>
    <option value='Fiske i australia'>Australia</option>
    </select>
</td>
";
}
if ($_REQUEST["velg"] == "surfetur1")
{
echo "<td>Surfetur til</td>
<td>
<select size='1' name='surf' >
<option></option>
<option value='Surfe p� Bali'>Bali</option>
<option value='Surfe i Australia'>Australia</option>
<option value='Surfe i Hawaii'>Hawaii</option>
</select>
</td>
";
}
if ($_REQUEST["velg"] == "skiferie")
{
echo "<td>Skiferie til</td>
<td>
<select size='1' name='skiferie' >
<option></option>
<option value='Ski i Sveits'>Sveits</option>
<option value='Ski i USA'>USA</option>
<option value='Ski i Italia'>Italia</option>
</select>
</td>
";
}
if ($_REQUEST["velg"] == "fotballtur1")
{
echo "<td>Fotballtur til</td>
<td>
<select size='1' name='fotballtur' >
<option></option>
<option value='Fotball i England'>England</option>
<option value='Fotball i Spania'>Spania</option>
<option value='Fotball i Argentina'>Argentina</option>
</select>
</td>
";
}
echo "
</tr>
</table>
<hr/>

<br/>
<form action='bestillingside1.phtml' method='post'>
<table>
<tr>
<td>Antall Reisende</td>
<td><select size='1' name='antall'>
	<option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    <option value='6'>6</option>
    <option value='7'>7</option>
    <option value='8'>8</option>
    <option value='9'>9</option>
    <option value='10'>10</option>
    <option value='11'>11</option>
    <option value='12'>12</option>
    </select>
    </td>
    
    </tr>
</table>
<table>
<tr>
<td>Utreise</td>
</tr>
<tr>

<td><select size='1' name='dag' >
	<option> </option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    <option value='6'>6</option>
    <option value='7'>7</option>
    <option value='8'>8</option>
    <option value='9'>9</option>
    <option value=10'>10</option>
    <option value='11'>11</option>
    <option value='12'>12</option>
    <option value='13'>13</option>
    <option value='14'>14</option>
    <option value='15'>15</option>
    <option value='16'>16</option>
    <option value='17'>17</option>
    <option value='18'>18</option>
    <option value='19'>19</option>
    <option value='20'>20</option>
    <option value='21'>21</option>
    <option value='22'>22</option>
    <option value='23'>23</option>
    <option value='24'>24</option>
    <option value='25'>25</option>
    <option value='26'>26</option>
    <option value='27'>27</option>
    <option value='28'>28</option>
    <option value='29'>29</option>
    <option value='30'>30</option>
    <option value='31'>31</option>
    </select>
    </td>
    <td> <select size='1' name='dato'>
    <option></option>
    <option value='jan'>Januar</option>
    <option value='feb'>Februar</option>
    <option value='mar'>Mars</option>
    <option value='apr'>April</option>
    <option value='mai'>Mai</option>
    <option value='jun'>Juni</option>
    <option value='jul'>Juli</option>
    <option value='aug'>August</option>
    <option value='sep'>September</option>
    <option value='okt'>Oktober</option>
    <option value='nov'>November</option>
    <option value='des'>Desember</option>
    </select>
    </td>
    <td><select size='1' name='aar' >
    <option></option>
    <option value='2011'>2011</option>
  </select>
    </td>
</tr>
<tr>
<td>Hjemreise</td>
</tr>

<tr>
<td><select size='1' name='daghjem' >
	<option> </option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    <option value='6'>6</option>
    <option value='7'>7</option>
    <option value='8'>8</option>
    <option value='9'>9</option>
    <option value='10'>10</option>
    <option value='11'>11</option>
    <option value='12'>12</option>
    <option value='13'>13</option>
    <option value='14'>14</option>
    <option value='15'>15</option>
    <option value='16'>16</option>
    <option value='17'>17</option>
    <option value='18'>18</option>
    <option value='19'>19</option>
    <option value='20'>20</option>
    <option value='21'>21</option>
    <option value='22'>22</option>
    <option value='23'>23</option>
    <option value='24'>24</option>
    <option value='25'>25</option>
    <option value='26'>26</option>
    <option value='27'>27</option>
    <option value='28'>28</option>
    <option value='29'>29</option>
    <option value='30'>30</option>
    <option value='31'>31</option>
    </select>
    </td>
    <td> <select size='1' name='datohjem'>
    <option></option>
    <option value='jan'>Januar</option>
    <option value='feb'>Februar</option>
    <option value='mar'>Mars</option>
    <option value='apr'>April</option>
    <option value='mai'>Mai</option>
    <option value='jun'>Juni</option>
    <option value='jul'>Juli</option>
    <option value='aug'>August</option>
    <option value='sep'>September</option>
    <option value='okt'>Oktober</option>
    <option value='nov'>November</option>
    <option value='des'>Desember</option>
    </select>
    </td>
    <td><select size='1' name='aarhjem' >
    <option></option>
    <option value='2011'>2011</option>
	</select> 
    </td>
</tr>
<tr>
<td>Hotellnetter</td>
</tr>
<tr>

<td>
	<select size='1' name='hotellnetter'>
	<option> </option>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    <option value='6'>6</option>
    <option value='7'>7</option>
    <option value='8'>8</option>
    <option value='9'>9</option>
    <option value='10'>10</option>
    <option value='11'>11</option>
    <option value='12'>12</option>
    <option value='13'>13</option>
    <option value='14'>14</option>
    <option value='15'>15</option>
    <option value='16'>16</option>
    <option value='17'>17</option>
    <option value='18'>18</option>
    <option value='19'>19</option>
    <option value='20'>20</option>
    <option value='21'>21</option>
    <option value='22'>22</option>
    <option value='23'>23</option>
    <option value='24'>24</option>
    <option value='25'>25</option>
    <option value='26'>26</option>
    <option value='27'>27</option>
    <option value='28'>28</option>
    <option value='29'>29</option>
    <option value='30'>30</option>
    <option value='31'>31</option>
    </select>
</td>
</tr>
</table>
<table id='textbox'>
<tr>
<td><textarea cols='30' rows='5' name='melding'>Skreddersy din bestilling</textarea></td>
</tr>
</table>
<table>
<tr>
<td><input type='submit' name='neste' value='Neste' /></td>
</tr>
</table>
</form>
";
}
?>
</div>

</div>

</body>
</html>