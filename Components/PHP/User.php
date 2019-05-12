<?php 

	/**
	 * UserManager class
	 */
	class UserManager
	{

		// Signing in the specified user...
		function Login($UserData)
		{
			include '../Assets/PHP/Includes/connection.php';

			$records = $conn->prepare('SELECT * FROM daily_users WHERE user_email = :email OR user_steamid = :steamid OR user_identifier = :identifier');
			$records->bindParam(':email', $UserData['credis']);
			$records->bindParam(':steamid', $UserData['credis']);
			$records->bindParam(':identifier', $UserData['credis']);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

			$message = '';

			if (password_verify($UserData['password'], $results['user_password'])) {
				$_SESSION['user_data'] = $results;
				header("Location: /Account");
			}

			else {
				return 'Sorry, those credentials do not match';
			}


			// if(password_verify($UserData['pass'], $results['user_password']) ){

			// 	$_SESSION['user_id'] = $results['id'];
			// 	header("Location: index.php");

			// } else {
			// 	return 'Sorry, those credentials do not match';
			// }

		}

		// Registering a new user...
		function Register($UserData)
		{
			include '../Assets/PHP/Includes/connection.php';

			// Enter the new user in the database
			$sql = "INSERT INTO daily_users (user_name, user_identifier, user_email, user_ingameid, user_steamid, user_ingamename, user_password) VALUES (:name, :identifier, :email, :ingameid, :steamid, :ingamename, :password)";
			$stmt = $conn->prepare($sql);

			$userpass = password_hash($UserData['password'], PASSWORD_BCRYPT);

			echo $userpass;

			$stmt->bindParam(':name', $UserData['name']);
			$stmt->bindParam(':identifier', $UserData['identifier']);
			$stmt->bindParam(':email', $UserData['email']);
			$stmt->bindParam(':steamid', $UserData['steamid']);
			$stmt->bindParam(':ingameid', $UserData['ingameid']);
			$stmt->bindParam(':ingamename', $UserData['ingamename']);
			$stmt->bindParam(':password', $userpass);

			if( $stmt->execute() ) {
				return 'Du er nu oprettet som et medlem på DailyNetwork.dk';
			}

			else {
				return 'Der skete en fejl i oprettelsen';
				// print_r($stmt->errorInfo()[2]);
			}
		}

		// Signing out the user that is signed in...
		function Logout()
		{
			session_destroy();
			session_unset();
			header("Location: /");
		}
	}
?>