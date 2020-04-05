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
	echo "

<body>
	<br/><br/><br/><br/>
	<h2 style='text-align: center;'>Kérlek válassz egy opciót!</h2>
	<br/><br/><br/><br/>
	<p style='text-align: center;'>
		<a href='../korozesek/jarmu.php'>Körözött jármű megnézése</a>
		<img src='../images/jarmu.jpg' class='img-circle' width='75' height='75'>
		&nbsp;&nbsp;<a href='../felrakas/jarmu.php'>Körözött jármű felrakása</a>
		<img src='../images/korozott_felrakas.jpg' class='img-circle' width='75' height='75'>
		&nbsp;&nbsp;<a href='../torles/jarmu.php'>Körözött jármű törlése</a>
		<br>
		<br>
		
		<a href='../lefoglalt/jarmu.php'>Lefoglalt járművek megnézése</a>
		<img src='../images/jarmu.jpg' class='img-circle' width='75' height='75'>
		&nbsp;&nbsp;<a href='../lefoglalt/felrak.php'>Lefoglalt jármű felrakása</a>
		<img src='../images/korozott_felrakas.jpg' class='img-circle' width='75' height='75'>
		&nbsp;&nbsp;<a href='../lefoglalt/torles.php'>Lefoglalt jármű törlése</a>
		
	</p>
</body>

</html>
	
	";
}