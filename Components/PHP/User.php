<?php 
	/**
	 * UserManager class
	 */
	class UserManager
	{
		// Signing in the specified user...
		function Login($UserData)
		{
			
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
				echo 'Du er nu oprettet som et medlem på DailyNetwork.dk';
			}

			else {
				echo 'Der skete en fejl i oprettelsen';
				print_r($stmt->errorInfo()[2]);
			}
		}
	}
?>