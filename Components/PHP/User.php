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

			$records = $conn->prepare('SELECT * FROM daily_users INNER JOIN daily_roles ON daily_users.user_role = daily_roles.role_id WHERE user_email = :email OR user_steamid = :steamid OR user_identifier = :identifier');
			$records->bindParam(':email', $UserData['credis']);
			$records->bindParam(':steamid', $UserData['credis']);
			$records->bindParam(':identifier', $UserData['credis']);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

			$message = '';

			if (password_verify($UserData['password'], $results['user_password'])) {
				$_SESSION['user_id'] = $results["user_id"];
				header("Location: /Account");
			}

			else {
				return 'Sorry, those credentials do not match';
			}
		}

		// Getting the user id's info that is parsed
		function GetUserData($UserID)
		{
			include '../Assets/PHP/Includes/connection.php';

			$records = $conn->prepare('SELECT * FROM daily_users INNER JOIN daily_roles ON daily_users.user_role = daily_roles.role_id WHERE user_id = :userid');

			$records->bindParam(':userid', $UserID);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
			return $results;
		}

		// Checking if the user has access to the specified page
		function HasAccess($RoleID, $Page)
		{
			include '../Assets/PHP/Includes/connection.php';

			$records = $conn->prepare("SELECT * FROM daily_permissions WHERE perm_page = :page");

			$records->bindParam(':page', $Page);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

			$directArray = json_decode($results["perm_groups"]);
			$finalArray = $directArray->data;

			echo $RoleID;
			echo $Page;

			if (in_array($RoleID, $finalArray)) {
				echo "TRUE";
				return true;
			}
			else {
				echo "FALSE";
				return false;
			}

		}

		// Checking if an user does exist
		function CheckExistance($Value)
		{
			include '../Assets/PHP/Includes/connection.php';
			echo "CHECKING...";
			$records = $conn->prepare('SELECT * FROM daily_users WHERE user_email = :email OR user_steamid = :steamid OR user_identifier = :identifier');
			$records->bindParam(':email', $UserData['email']);
			$records->bindParam(':steamid', $UserData['steamid']);
			$records->bindParam(':identifier', $UserData['identifier']);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

			if (count($results) > 0) {
				return false;
			}

			else {
				return true;
			}
		}

		// Registering a new user...
		function Register($UserData)
		{
			include '../Assets/PHP/Includes/connection.php';

			$exists = $this->CheckExistance($UserData);
			if ($exists == false) {
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
					return 'En bruger findes allerede med disse oplysninger';
				}
			}

			else {
				return "UNKNOWN ERROR";
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