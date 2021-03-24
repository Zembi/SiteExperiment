<?php

	$email = "";
	$passwdOfRequestedEm = "";

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

	$foundEm;

	if(isset($_POST['emailInptOfUser'])) {

		$email = $_POST['emailInptOfUser'];

		$queryForSearchEmail = "SELECT * FROM userssignin WHERE Email = '$email'";

		$resultForSearchEmail = mysqli_query($conn, $queryForSearchEmail);

		echo $email;

		$foundEm = 0;

		while ($row = mysqli_fetch_array($resultForSearchEmail)) {

			$foundEm = 1;
			$passwdOfRequestedEm = $row['Password'];
			break;
		}

		if($foundEm) {

			echo ("EmailFound#".$passwdOfRequestedEm);
		}
	}
?>