<?php
session_start();
require_once('../sql_conf.php');

$nev = $_POST["letartoztatott_nev"];
$vad = $_POST["letartoztatott_vad"];
$szemszam = $_POST["letartoztatott_szemszam"];
$megjegyzes = $_POST["letartoztatott_megjegyzes"];
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
	//INSERT INTO `fayrobot`.`fayrobot_man` (`sql_id`, `Neve`, `Felrakta`, `Mikor`, `Vad`, `Leiras`) VALUES (NULL, 'sdf', 'sdf', '2016-02-20', 'sdf', 'sdf');
	
	$query = "INSERT INTO `fayrobot_letartoztatott` 
	(`sql_id`, 
	`Neve`, 
	`Felrakta`, 
	`Alosztaly`, 
	`Rendfokozat`, 
	`Mikor`, 
	`Vad`,
	`Megjegyzes`,
	`Szemszam`) 
	VALUES 
	(NULL, 
	'$nev', 
	'$felrakta', 
	'$geci_ketto', 
	'$geci_egy',
	NOW(),
	'$vad',
	'$megjegyzes', 
	'$szemszam')";
	$result = $mysqli->query($query);
	if($result == 1)
	{
		echo "felrakva!";
	}
	else echo $mysqli->error;
}


?>