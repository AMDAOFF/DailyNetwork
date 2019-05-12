<?php 
	require "../Assets/PHP/Includes/settings.php";
	require $AutoLoadPath;
?>

<!DOCTYPE html>
<html>
<head>
	<title>DailyNetwork | Account</title>

	<!-- LINKING ALL OF THE CSS FILES NECCESARRY -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/comm_vars.css">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/main_style.css">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/comm_menu.css">

    <!-- FONT INITIALIZATION -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
</head>
<body>
	<?php include('../Assets/PHP/navigation.php'); ?>
	<br><br><br><br><br>
	
	<div class="row mr-auto">
		<div class="col-sm-4">
		</div>

		<div class="col-sm-4">
			<center>
				<h1>DAILYNETWORK SIGNIN</h1>
				<p>SIGN INTO YOUR DAILY NETWORK ACCOUNT</p>
			</center>

			<form action="" method="">
				<input class="form-control" type="text" name="cred" placeholder="Email eller brugernavn..."><br>
				<input class="form-control" type="password" name="pass" placeholder="Password..."><br>
				<center>
					<input type="submit" class="btn btn-outline-success" value="Log Ind">
					<a href="register.php" class="btn btn-outline-info">Registrer</a>
				</center>
			</form>
		</div>

		<div class="col-sm-4">
		</div>
	</div>

</body>
</html>