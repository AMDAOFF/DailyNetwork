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

	<center>
		<h1>
			
				DailyNetwork Signin
			
		</h1>
		<p>Sign in to DailyNetwork community servers</p>

		<div class="row">
			<div class="col-sm-4">
			</div>

			<div class="col-sm-4">
				<form action="" method="post">
					<input placeholder="Dit Navn..." class="form-control" type="text" name="name"><br>
					<input placeholder="Din Email..." class="form-control" type="email" name="email"><br>
					<input placeholder="Dit Brugernavn..." class="form-control" type="text" name="identifier"><br>
					<input placeholder="Dit SteamID..." class="form-control" type="text" name="steamid"><br>
					<input placeholder="Dit Ingame ID..." class="form-control" type="number" name="ingameid"><br>
					<input placeholder="Dit Ingame Navn..." class="form-control" type="text" name="ingameid"><br>
					<input placeholder="" class="btn btn-outline-info" type="submit" value="Register">
				</form>
			</div>

			<div class="col-sm-4">
			</div>
		</div>
	</center>
</body>
</html>