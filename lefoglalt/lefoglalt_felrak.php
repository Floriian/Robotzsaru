<?php

session_start();
require_once('../sql_conf.php');

$tipus = $_POST["jarmu_tipus"];
$vad = $_POST["jarmu_vad"];
$tulaj = $_POST["jarmu_tulaj"];
$rendszam = $_POST["jarmu_rendszam"];
$szin = $_POST["jarmu_szin"];
$jegyzet = $_POST["megjegyzes"];

$felrakta = $_SESSION["Name"];

$geci_ketto = 0;
if(isset($_SESSION['ORFK'])) {$geci_ketto = 1;}
else if(isset($_SESSION['BE'])) {$geci_ketto = 2;}
else if(isset($_SESSION['BF'])) {$geci_ketto = 3;}
else if(isset($_SESSION['RF'])) {$geci_ketto = 4;}
else if(isset($_SESSION['KF'])) {$geci_ketto = 5;}
else if(isset($_SESSION['RSZKI'])) {$geci_ketto = 6;}

$geci_egy = 0;
if(isset($_SESSION['Kadét'])) {$geci_egy = 1;}
if(isset($_SESSION['Őrmester'])) {$geci_egy = 2;}
if(isset($_SESSION['Törzsőrmester'])) {$geci_egy = 3;}
if(isset($_SESSION['Főtörzsőrmester'])) {$geci_egy = 4;}
if(isset($_SESSION['Zászlós'])) {$geci_egy = 5;}
if(isset($_SESSION['Törzszászlós'])) {$geci_egy = 6;}
if(isset($_SESSION['Főtörzszászlós'])) {$geci_egy = 7;}
if(isset($_SESSION['Hadnagy'])) {$geci_egy = 8;}
if(isset($_SESSION['Főhadnagy'])) {$geci_egy = 9;}
if(isset($_SESSION['Százados'])) {$geci_egy = 10;}
if(isset($_SESSION['Őrnagy'])) {$geci_egy = 11;}
if(isset($_SESSION['Alezredes'])) {$geci_egy = 12;}
if(isset($_SESSION['Ezredes'])) {$geci_egy = 13;}
if(isset($_SESSION['Dandártábornok'])) {$geci_egy = 14;}
if(isset($_SESSION['Vezérőrnagy'])) {$geci_egy = 15;}
if(isset($_SESSION['Altábornagy'])) {$geci_egy = 16;}

if(!isset($_SESSION["Name"]) && $_SESSION["Logged"] == false)
{
	echo "
	
	<audio autoplay>

	<source src='../sorry.mp3' type='audio/mpeg'>
	
	</audio>
	
	MENJÉ INNÉ #yolo<br>
	De ha ezt elnem olvasod akkor is menjé inné!<br>
	oké?<br>
	Na menjé<br>
	Várlak<br>
	MENJÉ MÁR INNÉ<br>
	Jóvan elegem van belőled...<br>
	NEM MÉSZ INNÉ<br>
	
	";
}
else
{
	
	$sql_a = "INSERT INTO `fayrobot_lefoglalt` (`sql_id`, `tipus`, `felrakta`, `mikor`, `vad`, `szin`, `megjegyzes`, `tulaj`, `rendszam`,`Alosztaly`,`Rendfokozat`) VALUES 
	(NULL, '$tipus', '$felrakta', NOW(), '$vad', '$szin', '$jegyzet', '$tulaj', '$rendszam', '$geci_ketto', '$geci_egy')";
	
	$result = $mysqli->query($sql_a);
	
	if($result == 1)
	{
		echo "Felrakva";
	}
	else
		$mysqli->error;
	
}

?>