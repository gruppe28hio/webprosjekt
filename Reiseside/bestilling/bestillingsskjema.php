<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bestill</title>
</head>

<body>

<form action="bestillingside1.php" method="post">
<table>
<tr>
<td>Antall Reisende</td>
<td><select size="1" name="antall" >
	<option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option></td>
    </select>
    
    </tr>
</table>


<br/>
<table>
<tr>
<td>Tur</td>
<td></td>
<td>Fisketur</td>
<td>Surfing</td>
<td>Skiferie</td>
<td>Fotballtur</td>
</tr>
<tr>
<td>Til</td>
<td></td>
<td><select size="1" name="fisketur" >
	<option> </option>
	<option value="Fiske i lofoten">Lofoten</option>
    <option value="Fiske i florida">Florida</option>
    <option value="Fiske i australia">Australia</option>
    </select>
</td>
<td>
<select size="1" name="surf" >
<option></option>
<option value="Surfe på Bali">Bali</option>
<option value="Surfe i Australia">Australia</option>
<option value="Surfe i Hawaii">Hawaii</option>
</select>
</td>
<td>
<select size="1" name="skiferie" >
<option></option>
<option value="Ski i Sveits">Sveits</option>
<option value="Ski i USA">USA</option>
<option value="Ski i Italia">Italia</option>
</select>
</td>
<td>
<select size="1" name="fotballtur" >
<option></option>
<option value="Fotball i England">England</option>
<option value="Fotball i Spania">Spania</option>
<option value="Fotball i Argentina">Argentina</option>
</select>

</td>
</tr>
</table>
<br/>
<table>
<tr>
<td>Reisedato</td>
</tr>
<tr>
<td><select size="1" name="dag" >
	<option> </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    </select>
    </td>
    <td> <select size="1" name="dato">
    <option></option>
    <option value="jan">Januar</option>
    <option value="feb">Februar</option>
    <option value="mar">Mars</option>
    <option value="apr">April</option>
    <option value="mai">Mai</option>
    <option value="jun">Juni</option>
    <option value="jul">Juli</option>
    <option value="aug">August</option>
    <option value="sep">September</option>
    <option value="okt">Oktober</option>
    <option value="nov">November</option>
    <option value="des">Desember</option>
    </select>
    </td>
    <td><select size="1" name="aar" >
    <option></option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
  </select>
    </td>
</tr>
<tr>
<td>Hjemreise</td>
</tr>
<tr>
<tr>
<td><select size="1" name="daghjem" >
	<option> </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    </select>
    </td>
    <td> <select size="1" name="datohjem">
    <option></option>
    <option value="jan">Januar</option>
    <option value="feb">Februar</option>
    <option value="mar">Mars</option>
    <option value="apr">April</option>
    <option value="mai">Mai</option>
    <option value="jun">Juni</option>
    <option value="jul">Juli</option>
    <option value="aug">August</option>
    <option value="sep">September</option>
    <option value="okt">Oktober</option>
    <option value="nov">November</option>
    <option value="des">Desember</option>
    </select>
    </td>
    <td><select size="1" name="aarhjem" >
    <option></option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
	</select> 
    </td>
</tr>
<tr>
<td>Hotellnetter</td>
</tr>
<tr>
<td>
<select size="1" name="hotellnetter" >
	<option> </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    </select>
</td>
</tr>
<tr>
<td><input type="submit" name="neste" value="Neste" /></td>
</tr>
</table>
</form>

</body>
</html>