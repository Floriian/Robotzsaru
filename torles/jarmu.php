<?php
session_start();
require_once('../sql_conf.php');
if(!isset($_SESSION['Name']) && $_SESSION['Logged'] == false)
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
	$result = $mysqli->query("SELECT * FROM fayrobot_vehicle");
		echo 
	"
	<!doctype html>
<html>
<head>
	<title>FayORFK - Robotzsaru</title>
	
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' integrity='sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r' crossorigin='anonymous'>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' crossorigin='anonymous'></script>
	
	<!-- Egyedi CSS-->
	
	<link rel='stylesheet' href='css/index.css'>
	
	<meta charset='utf-8'>
	<meta name='author' content='WilliamClark'>
	
	
	<nav class='navbar navbar-default navbar-fixed-top'>
		<div class='container'>
			<div class='navbar-header'>
				<a class='navbar-brand' href='#'>FayORFK - Robotzsaru</a>
			</div>
			<ul class='nav navbar-nav'>
				<li><a href='../robotzsaru.php'>Főoldal</a></li>
				<li><a href='valasztas_szemely.html'>Személy</a></li>
				<li class='active'><a href='#'>Jármű</a></li>
				<li><a href='logout.php'>Kijelentkezés</a></li>
			</ul>
		</div>
	</nav>
	


	
</head>

<body>
<br/><br/><br/><br/><br/><br/><br/>
	<table border='1'  align='center'>
			<tr>
				<th>DBID</th>
				<th>Rendszám</th>
				<th>Típus</th>
				<th>Szín</th>
				<th>Tulaj</th>
				<th>Vád</th>
				<th>Megjegyzés</th>
				<th>Felrakta</th>
				<th>Mikor</th>
			</tr>
	
	
	";
	
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['sql_id'] . "</td>";
		echo "<td>" . $row['Rendszam'] . "</td>";
		echo "<td>" . $row['Tipus']. "</td>";
		echo "<td>" . $row['Szin']. "</td>";
		echo "<td>" . $row['Tulaj']. "</td>";
		echo "<td>". $row['Vad']. "</td>";
		echo "<td>". $row['Megjegyzes']. "</td>";
		echo "<td>". $row['Felrakta']. "</td>";
		echo "<td>". $row['Mikor']. "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "
	
		<p style='text-align:center;'>
			<a href='../korozesek/jarmu.php'>Körözött járművek</a>
			&nbsp;&nbsp;<a href='../felrakas/jarmu.php'>Körözött jármű felrakása</a>
		</p>
		
		<form action='jarmu_del.php' method='POST'>
			<div class='form-group'>
				<input type='text' class='form-control' name='bevitel_dbid' placeholder='DBID'>
			</div>
			<button class='btn btn-lg btn-danger btn-block' type='submit'>Törlés</button>
		</form>
		
	";
	echo "</body>";
	echo "</html>";
}

?>