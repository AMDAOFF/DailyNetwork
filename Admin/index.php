<?php 
	session_start();
	require "../Assets/PHP/Includes/settings.php";
	require $AutoLoadPath;

	if (!empty($_POST["signout"])) {
		$userManager->Logout($_POST);
	}

	if (!empty($_POST["credis"]) && !empty($_POST["password"])) {
		$message = $userManager->Login($_POST);
	}

	if (isset($_SESSION["user_id"])) {
		echo "SESSION";
		$ud = $userManager->GetUserData($_SESSION["user_id"]);
		$access = $userManager->HasAccess($ud["role_name"], "admin/index");
	}
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
	
	<?php if (!isset($_SESSION["user_id"])): ?>
		<div class="row mr-auto">
			<div class="col-sm-4">
			</div>

			<div class="col-sm-4">
				<center>
					<h1>DAILYNETWORK SIGNIN</h1>
					<p>SIGN INTO YOUR DAILY NETWORK ACCOUNT</p>
					<?php if (isset($message)): ?>
						<p><?php echo $message; ?></p>
					<?php endif ?>
				</center>

				<form action="" method="post">
					<input class="form-control" type="text" name="credis" placeholder="Email eller brugernavn..."><br>
					<input class="form-control" type="password" name="password" placeholder="Password..."><br>
					<center>
						<input type="submit" class="btn btn-outline-success" value="Log Ind">
						<a href="register.php" class="btn btn-outline-info">Registrer</a>
					</center>
				</form>
			</div>

			<div class="col-sm-4">
			</div>
		</div>

	<?php elseif($access == false): ?>

		<h1>ACCESS DENIED</h1>

	<?php else: ?>

		<h1>WELCOME, <?php echo $ud["user_identifier"] . " - " . $ud["role_name"]; ?></h1>
		<form action="" method="post">
			<input type="submit" name="signout" value="Log Ud" class="btn btn-outline-danger">
		</form>

	<?php endif ?>

</body>
</html>