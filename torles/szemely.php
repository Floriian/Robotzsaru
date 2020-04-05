<?php
session_start();
require_once('../sql_conf.php');
require_once('../scripts/functions.php');
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
	$result = $mysqli->query("SELECT * FROM fayrobot_man");
	ShowNavBar(1);
		echo"

<body>
<br/><br/><br/><br/><br/><br/><br/>
		<table border='1'  align='center'>
			<tr>
				<th>DBID</th>
				<th>Gyanusított neve</th>
				<th>Körözést kiadta</th>
				<th>Körözés érvényes</th>
				<th>Vád</th>
				<th>Személyleírás</th>
			</tr>
	
	
	";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['sql_id'] . "</td>";
		echo "<td>" . $row['Neve'] . "</td>";
		echo "<td>" . $row['Felrakta'] . "</td>";
		echo "<td>" . $row['Mikor'] . "</td>";
		echo "<td>" . $row['Vad'] . "</td>";
		echo "<td>" . $row['Leiras'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "
	
		<p style='text-align:center;'>
			<a href='../korozesek/szemely.php'>Körözött személyek</a>
			&nbsp;&nbsp;<a href='../felrakas/szemely.php'>Körözött személy felrakása</a>
		</p>
		
		<form action='szemely_del.php' method='POST'>
		<div class='customLogin'>
			<div class='account-wall'>
				<input type='text' class='form-control' name='bevitel_dbid' placeholder='DBID'>
				<button class='btn btn-lg btn-danger btn-block' type='submit'>Törlés</button>
			</div>
		</div>
		</form>
		
	";
	echo "</body>";
	echo "</html>";
}

?>