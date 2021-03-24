<?php

	$username = "";
	$emailOrPhone = "";
	$passwordOfInput = $_POST['password'];
	$partNowOpened = $_POST['typeOfSignIn'];

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

	if($partNowOpened == 1) {
		
		if(isset($_POST['username'])) {

			$username = $_POST['username'];
			$passwordOfUserNFound = "";

			$queryUserName = "SELECT * FROM userssignin WHERE Username = '$username'";

			$resultUserN = mysqli_query($conn, $queryUserName);

			$erUN = 1;

			while (($rowUN = mysqli_fetch_array($resultUserN))) {

				$passwordOfUserNFound = $rowUN['Password'];
				$erUN = 0;
				break;
			}

			if($erUN) {

				echo "ADTE";
			}
			else {

				if($passwordOfInput == $passwordOfUserNFound) {

					echo "AF";
				}
				else {

					echo "WP";
				}
			}

			mysqli_close($conn);
		}
	}
	else if($partNowOpened == 2) {

		if(isset($_POST['emailOrPhone'])) {

			$emailOrPhone = $_POST['emailOrPhone'];
			$passwordOfUserNFound = "";

			$queryEmailOrPhone = "SELECT * FROM userssignin WHERE Email = '$emailOrPhone' || Phone = '$emailOrPhone'";

			$resultEmailOrPhone = mysqli_query($conn, $queryEmailOrPhone);

			$erEmOrPh = 1;

			while (($rowEmOrPh = mysqli_fetch_array($resultEmailOrPhone))) {

				$passwordOfUserNFound = $rowEmOrPh['Password'];
				$erEmOrPh = 0;
				break;
			}

			if($erEmOrPh) {

				echo "ADTE";
			}
			else {

				if($passwordOfInput == $passwordOfUserNFound) {

					echo "AF";
				}
				else {

					echo "WP";
				}
			}

			mysqli_close($conn);
		}
	}

?>