<?php
session_start();
require_once("../sql_conf.php");
require_once("../scripts/functions.php");
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
	ShowNavBar(2);
echo"

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
				<th>Rendszám</th>
			</tr>
	
	
	";
	$result = $mysqli->query("SELECT * FROM fayrobot_lefoglalt");
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['sql_id'] . "</td>";
		echo "<td>" . $row['rendszam'] . "</td>";
		echo "<td>" . $row['tipus']. "</td>";
		echo "<td>" . $row['szin']. "</td>";
		echo "<td>" . $row['tulaj']. "</td>";
		echo "<td>". $row['vad']. "</td>";
		echo "<td>". $row['megjegyzes']. "</td>";
		echo "<td>". $row['felrakta']. "</td>";
		echo "<td>". $row['mikor']. "</td>";
		echo "<td>". $row['rendszam']. "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "
	
			<form action='lefoglalt_torles.php' method='POST'>
		<div class='customLogin'>
			<div class='account-wall'>
				<input type='text' class='form-control' name='bevitel_dbid' placeholder='DBID'>
				<button class='btn btn-lg btn-danger btn-block' type='submit'>Törlés</button>
			</div>
		</div>
		</form>
	
		<p style='text-align:center;'>
			<a href='../lefoglalt/felrak.php'>Lefoglalt jármű felrakása</a>
			&nbsp;&nbsp;<a href='../lefoglalt/torles.php'>Lefoglalt jármű törlése</a>
		</p>
	";
	echo "</body>";
	echo "</html>";
}
?>