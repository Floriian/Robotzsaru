<?php
session_start();
require_once('../sql_conf.php');

$geciseg = $_POST['bevitel_dbid'];

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
	$sql = "DELETE FROM fayrobot_man WHERE sql_id='$geciseg'";
	$sql_b = "SELECT * FROM fayrobot_man WHERE sql_id='$geciseg'";
	$result = $mysqli->query($sql_b);
	if($result->num_rows == 1)
	{
		if ($mysqli->query($sql) === TRUE)
		{
			echo "Törölve!";
		}
		else
			echo "Sikertelen törlés!Kérlek jelezd a fórumon Williamnek!Hiba: " . $mysqli->error;
	}
	else
	{
		echo "Nincs ilyen azonosító!";
		//header("location:szemely.php");
	}
}
?>