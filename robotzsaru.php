<?php
session_start();
require_once("scripts/functions.php");

if(!isset($_SESSION['Name']) && $_SESSION['Logged'] == false)
{
	echo "
	
	<audio autoplay>

	<source src='sorry.mp3' type='audio/mpeg'>
	
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
else if(!isset($_SESSION['Admin']))
{
	ShowNavBar(0);
	echo "
<body>
	<br/><br/><br/><br/>
	<h2 style='text-align: center;'>Kérlek válassz egy opciót!</h2>
	<br/><br/><br/><br/>
	
	<p style='text-align:center;'>
		&nbsp;&nbsp;<a href='korozesek/szemely.php'>Körözött személyek megnézése</a>
		&nbsp;&nbsp;<img src='images/korozott.jpg' class='img-circle' alt='Cinque Terre' width='75' height='75'>
		&nbsp;&nbsp;<a href='felrakas/szemely.php'>Körözött személy felrakása</a>
		&nbsp;&nbsp;<a href='torles/szemely.php'>Körözött személy törlése</a>
		<br/><br/>
		
		&nbsp;&nbsp;<a href='letartoztatott/szemely.php'>Letartóztatott személyek megnézése</a>
		&nbsp;&nbsp;<img src='images/korozott.jpg' class='img-circle' alt='Cinque Terre' width='75' height='75'>
		&nbsp;&nbsp;<a href='letartoztatott/szemely_felrak_form.php'>Letartóztatott személy felrakása</a>
		<br/><br/>
		
		&nbsp;&nbsp;<a href='korozesek/jarmu.php'>Körözött járművek megnézése</a>
		<img src='images/jarmu.jpg' class='img-circle' alt='Cinque Terre' width='75' height='75'>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href='felrakas/jarmu.php'>Körözött járművek felrakása</a>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href='torles/jarmu.php'>Körözött járművek törlése</a>	
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
else if(isset($_SESSION['Admin']))
{
	ShowNavBar(3);
	echo "
	<body>                                                        
		<div class='container'>
			<div class='row'>
				<br>
				<form action='admin/felhasznalo.php'>
				 <div class='col-md-4'>
					<br><br><br><br><br><br><br>
						<div class='panel panel-custom'>
							<div class='panel-heading'>
								<h4><i class='glyphicon glyphicon-user'></i> Felhasználók</h4>
							</div>
						<div class='panel-body'>
							<p>Felhasználók kezelése, törlése, hozzáadása.</p>
						</div>
						<div class='panel-footer' style='text-align:right;'>
							<button class='btn btn-info'>Zsa</button>
						</div>
					</div>
				</div>
				</form>
				<div class='col-md-4'>
					<br><br><br><br><br><br><br>
						<div class='panel panel-custom'>
							<div class='panel-heading'>
								<h4><i class='glyphicon glyphicon-user'></i> Globális közlemény</h4>
							</div>
						<div class='panel-body'>
							<p>Globális közlemény módosítása</p>
						</div>
						<div class='panel-footer' style='text-align:right;'>
							<button class='btn btn-info'>Zsa</button>
						</div>
					</div>
				</div>
				
				<div class='col-md-4'>
					<br><br><br><br><br><br><br>
						<div class='panel panel-custom'>
							<div class='panel-heading'>
								<h4><i class='glyphicon glyphicon-user'></i>Log</h4>
							</div>
						<div class='panel-body'>
							<p>Log nézése</p>
						</div>
						<div class='panel-footer' style='text-align:right;'>
							<button class='btn btn-info'>Zsa</button>
						</div>
					</div>
				</div>
				
				</div>
			</div>
	<br/><br/><br/><br/>
	<h2 style='text-align: center;'>Kérlek válassz egy opciót!</h2>
	<br/><br/><br/><br/>
	
	<p style='text-align:center;'>
		&nbsp;&nbsp;<a href='korozesek/szemely.php'>Körözött személyek megnézése</a>
		&nbsp;&nbsp;<img src='images/korozott.jpg' class='img-circle' alt='Cinque Terre' width='75' height='75'>
		&nbsp;&nbsp;<a href='felrakas/szemely.php'>Körözött személy felrakása</a>
		&nbsp;&nbsp;<a href='torles/szemely.php'>Körözött személy törlése</a>
	
		<br/><br/>
		
		&nbsp;&nbsp;<a href='letartoztatott/szemely.php'>Letartóztatott személyek megnézése</a>
		&nbsp;&nbsp;<img src='images/korozott.jpg' class='img-circle' alt='Cinque Terre' width='75' height='75'>
		&nbsp;&nbsp;<a href='letartoztatott/szemely_felrak_form.php'>Letartóztatott személy felrakása</a>
		<br/><br/>
		
		&nbsp;&nbsp;<a href='korozesek/jarmu.php'>Körözött járművek megnézése</a>
		<img src='images/jarmu.jpg' class='img-circle' alt='Cinque Terre' width='75' height='75'>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href='felrakas/jarmu.php'>Körözött járművek felrakása</a>
		&nbsp;&nbsp;&nbsp;&nbsp;<a href='torles/jarmu.php'>Körözött járművek törlése</a>
		<br/><br/>
		<a href='lefoglalt/jarmu.php'>Lefoglalt járművek megnézése</a>
		&nbsp;&nbsp;<img src='images/jarmu.jpg' class='img-circle' alt='Cinque Terre' width='75' height='75'>
		&nbsp;&nbsp;<a href='lefoglalt/felrak.php'>Lefoglalt jármű felrakása</a>
		<img src='images/korozott_felrakas.jpg' class='img-circle' width='75' height='75'>
		&nbsp;&nbsp;<a href='lefoglalt/torles.php'>Lefoglalt jármű törlése</a>
		
	</p>
	</body>";
}
?>