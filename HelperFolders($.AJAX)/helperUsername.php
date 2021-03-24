<?php

	$username = "";

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

	if(isset($_POST['username'])) {

		$c = 1;
		$username = $_POST['username'];

		$queryUserName = "SELECT * FROM userssignin WHERE Username = '$username'";

		$resultUserN = mysqli_query($conn, $queryUserName);

		$erUN = 0;

		while (($row = mysqli_fetch_array($resultUserN))) {

			$erUN = 1;
			break;
		}

		if($erUN) {

			echo " Username already exists";
		}

		mysqli_close($conn);
	}

?>