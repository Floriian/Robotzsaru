<?php

function ShowNavBar($activeid)
{
	if($activeid > 5) {echo "Hülyegeci vagy szopdnád le.Maximum a ShowNavBar funkcióba a 5-s lehet a maximum!";}
	if(!is_int($activeid)) {echo "Ez nem integer szám...Hanem STRING #szopdlefaszom!";}
	if($activeid == 0) //Főoldal
	{
		echo "
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
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='robotzsaru.php'>FayORFK - Robotzsaru</a>
					</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li class='active'><a href='robotzsaru.php'>Főoldal</a></li>
						<li><a href='valasztas/szemely.php'>Személy</a></li>
						<li><a href='valasztas/jarmu.php'>Jármű</a></li>
						<li><a href='../logout.php'>Kijelentkezés</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</head>";
	}
	else if($activeid == 1) //Személy
	{
		echo "<!doctype html>
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
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='robotzsaru.php'>FayORFK - Robotzsaru</a>
					</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li><a href='../robotzsaru.php'>Főoldal</a></li>
						<li class='active'><a href='../valasztas/szemely.php'>Személy</a></li>
						<li><a href='../valasztas/jarmu.php'>Jármű</a></li>
						<li><a href='../logout.php'>Kijelentkezés</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</head>";
	}
	else if($activeid == 2) //Kocsi
	{
		echo "<!doctype html>
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
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='robotzsaru.php'>FayORFK - Robotzsaru</a>
					</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li><a href='../robotzsaru.php'>Főoldal</a></li>
						<li><a href='../valasztas/szemely.php'>Személy</a></li>
						<li class='active'><a href='../valasztas/jarmu.php'>Jármű</a></li>
						<li><a href='../logout.php'>Kijelentkezés</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</head>";
	}
	else if($activeid == 3) //Admin ha főoldal
	{
		echo "<!doctype html>
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
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='robotzsaru.php'>FayORFK - Robotzsaru</a>
					</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li class='active'><a href='../robotzsaru.php'>Főoldal</a></li>
						<li><a href='valasztas/szemely.php'>Személy</a></li>
						<li><a href='valasztas/jarmu.php'>Jármű</a></li>
						<li><a href='admin/felhasznalo.php'>Adminisztrátor</a></li>
						<li><a href='logout.php'>Kijelentkezés</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</head>";
	}
	else if($activeid == 4) //Admin ha adminoldal
	{
		echo "<!doctype html>
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
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='robotzsaru.php'>FayORFK - Robotzsaru</a>
					</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li><a href='../robotzsaru.php'>Főoldal</a></li>
						<li><a href='../valasztas/szemely.php'>Személy</a></li>
						<li><a href='../valasztas/jarmu.php'>Jármű</a></li>
						<li class='active'><a href='felhasznalo.php'>Adminisztrátor</a></li>
						<li><a href='../logout.php'>Kijelentkezés</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</head>";
	}
	else if($activeid == 5) //Admin ha személy
	{
		echo "<!doctype html>
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
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='robotzsaru.php'>FayORFK - Robotzsaru</a>
					</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li><a href='../robotzsaru.php'>Főoldal</a></li>
						<li class='active><a href='../valasztas/szemely.php'>Személy</a></li>
						<li><a href='../valasztas/jarmu.php'>Jármű</a></li>
						<li><a href='felhasznalo.php'>Adminisztrátor</a></li>
						<li><a href='../logout.php'>Kijelentkezés</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</head>";
	}
}

function AddTable($string)
{
	echo "<td>".$string."</td>";
}

?>