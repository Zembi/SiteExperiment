<?php
	$username = "";
	$name = "";
	$lastname = "";
	$password = "";
	$country = "";
	$email = "";
	$phone = "";
	$otp = "";

	$servername = "127.0.0.1";
	$user = "root";
	$password = "";
	$db = "e+database";

	$conn = mysqli_connect($servername, $user, $password);
	
	mysqli_set_charset($conn, 'utf8');

	if (!$conn) {
    	echo "Not Connected To Server";
	}

	if(!mysqli_select_db($conn, $db)) {
		echo "Database Not Selected";
	}

	$erAllBeforeVerf;
	$erAllUsers;
	$otp = "";

	if(isset($_POST['email'])) {

		$email = $_POST['email'];
		$userOTP = $_POST['userInptOTP'];

		$queryAllInfo = "SELECT * FROM usersbeforeverification WHERE Email = '$email'";

		$resultAllInfo = mysqli_query($conn, $queryAllInfo);

		$erAllBeforeVerf = 1;

		while ($rowAllInfo = mysqli_fetch_array($resultAllInfo)) {

			$erAllBeforeVerf = 0;
			$username = $rowAllInfo['Username'];
			$name = $rowAllInfo['Name'];
			$lastname = $rowAllInfo['LastName'];
			$password = $rowAllInfo['Password'];
			$country = $rowAllInfo['Country'];
			$phone = $rowAllInfo['Phone'];
			$otp = $rowAllInfo['OTP'];
			break;
		}

		$queryUsers = "SELECT * FROM userssignin WHERE Email = '$email'";

		$resultUsers = mysqli_query($conn, $queryUsers);

		$erAllUsers = 1;

		while ($rowUsers = mysqli_fetch_array($resultUsers)) {

			$erAllUsers = 0;
			break;
		}

		if($erAllBeforeVerf && $erAllUsers) {

			echo "NotFound";
		}
		else if($erAllBeforeVerf && !$erAllUsers) {

			echo "ALREADYIN";
		}
		else {

			$errorAlreadyIn = 0;

			$queryAlreadyIn = "SELECT * FROM userssignin WHERE Username = '$username'";

			$resultAlreadyIn = mysqli_query($conn, $queryAlreadyIn);

			while ($rowAlreadyIn = mysqli_fetch_array($resultAlreadyIn)) {

					$errorAlreadyIn = 1;
			}

			if(!$errorAlreadyIn) {

				if($userOTP == $otp) {

					$sql1 = "INSERT INTO userssignin (Username, Name, LastName, Password, Country, Email, Phone, Active) VALUES ('$username', '$name', '$lastname', '$password', '$country', '$email', '$phone', '1')";

					mysqli_query($conn, $sql1);

					$sql2 = "DELETE FROM usersbeforeverification WHERE Username = '$username' || Email = '$email' || Phone = '$phone'";

					mysqli_query($conn, $sql2);

					echo "RIGHT";
				}
				else {

					echo "WRONG";
				}
			}
			else {

				echo "ALREADYIN";
			}
		}
	}

	mysqli_close($conn);
?>