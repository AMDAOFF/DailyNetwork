<?php 
	session_start();
	require "../Assets/PHP/Includes/settings.php";
	require $AutoLoadPath;

	if (!empty($_POST)) {
		$message = $userManager->Register($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DailyNetwork | Register</title>

	<!-- LINKING ALL OF THE CSS FILES NECCESARRY -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/comm_vars.css">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/main_style.css">
    <link rel="stylesheet" type="text/css" href="../Assets/CSS/comm_menu.css">

    <!-- FONT INITIALIZATION -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
</head>
<body>
	<!-- <?php include('../Assets/PHP/navigation.php'); ?> -->
	<br><br><br><br><br>
	<br><br><br><br><br>

	<div class="row mr-auto">
			<div class="col-sm-4">
			</div>

			<div class="col-sm-4">
				<center>
					<h1>DailyNetwork Signin</h1>
					<p>Sign in to DailyNetwork community servers</p>
						
					<?php if (!empty($message)): ?>
						<p class="success-msg"><?php echo $message; ?></p>
					<?php endif ?>

					<form action="" method="post">
						<input class="form-control" type="text" name="name" placeholder="Navn..."><br>
						<input class="form-control" type="email" name="email" placeholder="Email..."><br>
						<input class="form-control" type="text" name="identifier" placeholder="Brugernavn..."><br>
						<input class="form-control" type="text" name="steamid" placeholder="SteamID..."><br>
						<input class="form-control" type="number" name="ingameid" placeholder="Ingame ID..."><br>
						<input class="form-control" type="text" name="ingamename" placeholder="Ingame Navn..."><br>
						<input class="form-control" type="password" name="password" placeholder="Password..."><br>
						<input placeholder="" class="btn btn-outline-info" type="submit" value="Register">
					</form>
				</center>
			</div>

			<div class="col-sm-4">
			</div>
		</div>
</body>
</html>