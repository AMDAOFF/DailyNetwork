<?php 
	session_start();
	require "Assets/PHP/Includes/settings.php";
	require $AutoLoadPath;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Assets/CSS/comm_vars.css">
	<link rel="stylesheet" type="text/css" href="Assets/CSS/comm_menu.css">
	<link rel="stylesheet" type="text/css" href="Assets/CSS/main_style.css">
</head>
<body>

	<?php include('Assets/PHP/navigation.php'); ?>

	<br><br><br><br><br>
	  
	</div> 

	<div class="items">
		<div class="collapse-container">
			<button class="collapsible">STAFF ANSØGNING</button>
			<div class="content">
				<form action="" method="" id="staff">
				  	<input class="form-control" type="text" name="name" placeholder="Dit Navn..."><br>
				  	<input class="form-control" type="number" name="age" placeholder="Din Alder..."><br>
				  	<input class="form-control" type="email" name="email" placeholder="Din Email..."><br>
				  	<input class="form-control" type="number" name="id" placeholder="Dit ID..."><br>
				  	<input class="form-control" type="number" name="hours" placeholder="Hvor mange timer kan du bidrage til serveren pr. uge..."><br>

				  	<div class="row">
				  		<div class="col-sm-6">
				  			<textarea class="form-control" name="about" placeholder="Lidt Om Dig Selv... (125+ ORD)"></textarea><br>
				  		</div>

				  		<div class="col-sm-6">
				  			<textarea class="form-control" name="staff" placeholder="Hvorfor Vil Du Være Staff? (225+ ORD)"></textarea><br>
				  		</div>
				  	</div>

				  	<div class="row">
				  		<div class="col-sm-6">
				  			<textarea class="form-control" name="whyyou" placeholder="Hvorfor dig... (150+ ORD)"></textarea><br>
				  		</div>

				  		<div class="col-sm-6">
				  			<textarea class="form-control" name="whystaff" placeholder="Hvorfor Vil Du Være Staff? (225+ ORD)"></textarea><br>
				  		</div>
				  	</div>

				  	<input class="form-control" type="text" name="" placeholder="Har du været staff på andre servere, hvis ja hvilke?"><br>
				  	<input type="submit" class="btn btn-outline-info" name="" value="Ansøg">
				  	<button class="btn btn-outline-danger" onclick="Clear('staff')">Rens Form</button>
			  	</form>
			</div>
		</div>
    </div>

	<script type="text/javascript" src="Assets/JS/expandables.js"></script>
	<script type="text/javascript" src="Assets/JS/formcontroller.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>