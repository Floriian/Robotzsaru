<?php

session_start();

require_once('sql_conf.php');

$usname = $_POST['login_usname'];
$password = sha1(md5(sha1(md5($_POST['login_password']))));

$query = "SELECT * FROM fayrobot_users WHERE Jelvenyszam='$usname' AND Password='$password'";
$result = $mysqli->query($query);
//SELECT * FROM USERS WHERE Name='$usname' AND Password='$password'
if($result->num_rows == 1)
{
	header("location:robotzsaru.php");
	$_SESSION['Logged'] = true;
	//$_SESSION['Name'] = $usname;
	while($row = mysqli_fetch_array($result))
	{
		$_SESSION["Name"] = $row["Name"];
		$_SESSION['Jelvenyszam'] = $row['Jelvenyszam'];
		
		if($row['Admin'] == true)
		{
			$_SESSION['Admin'] = true;
 		}
		if($row['Alosztaly'] == 1){$_SESSION["ORFK"] = true;}
		else if($row['Alosztaly'] == 2){$_SESSION["BE"] = true;}
		else if($row['Alosztaly'] == 3){$_SESSION["BF"] = true;}
		else if($row['Alosztaly'] == 4){$_SESSION["RF"] = true;}
		else if($row['Alosztaly'] == 5){$_SESSION["KF"] = true;}
		else if($row['Alosztaly'] == 6){$_SESSION["RSZKI"] = true;}
		
		if($row['Rendfokozat'] == 1){$_SESSION['Kadét'] = true;}
		else if($row['Rendfokozat'] == 2){$_SESSION['Őrmester'] = true;}
		else if($row['Rendfokozat'] == 3){$_SESSION['Törzsőrmester'] = true;}
		else if($row['Rendfokozat'] == 4){$_SESSION['Főtörzsőrmester'] = true;}
		else if($row['Rendfokozat'] == 5){$_SESSION['Zászlós'] = true;}
		else if($row['Rendfokozat'] == 6){$_SESSION['Törzszászlós'] = true;}
		else if($row['Rendfokozat'] == 7){$_SESSION['Főtörzszászlós'] = true;}
		else if($row['Rendfokozat'] == 8){$_SESSION['Hadnagy'] = true;}
		else if($row['Rendfokozat'] == 9){$_SESSION['Főhadnagy'] = true;}
		else if($row['Rendfokozat'] == 10){$_SESSION['Százados'] = true;}
		else if($row['Rendfokozat'] == 11){$_SESSION['Őrnagy'] = true;}
		else if($row['Rendfokozat'] == 12){$_SESSION['Alezredes'] = true;}
		else if($row['Rendfokozat'] == 13){$_SESSION['Ezredes'] =true;}
		else if($row['Rendfokozat'] == 14){$_SESSION['Dandártábornok'] = true;}
		else if($row['Rendfokozat'] == 15){$_SESSION['Vezérőrnagy'] = true;}
		else if($row['Rendfokozat'] == 16){$_SESSION['Altábornagy'] = true;}
		
	}
}
else
{
	echo "<script>alert('Hibás felhasználónév/jelszó!');
	window.location('index.html');</script>";
	//header("location:index.html");
}
?>