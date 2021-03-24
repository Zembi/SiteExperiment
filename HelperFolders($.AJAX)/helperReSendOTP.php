<?php
	$email = "";
	$newOTP = "";

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

	if(isset($_POST['email'])) {

		$email = $_POST['email'];

		$erAll;
		$erAlreadyIn;

		$queryAlreadyIn = "SELECT * FROM userssignin WHERE Email = '$email'";

		$resultAlreadyIn = mysqli_query($conn, $queryAlreadyIn);

		$erAlreadyIn = 0;

		while ($row = mysqli_fetch_array($resultAlreadyIn)) {

			$erAlreadyIn = 1;
			break;
		}

		if($erAlreadyIn) {

			echo "ALREADYIN";
		}
		else {

			$queryAllInfo = "SELECT * FROM usersbeforeverification WHERE Email = '$email'";

			$resultAllInfo = mysqli_query($conn, $queryAllInfo);

			$erAll = 1;

			while ($row = mysqli_fetch_array($resultAllInfo)) {

				$erAll = 0;
				break;
			}

			if($erAll) {

				echo "NotFound";
			}
			else {


				function generateNumericOTP($n) { 
      
    				// Take a generator string which consist of 
    				// all numeric digits 
    				$generator = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
  
    				// Iterate for n-times and pick a single character 
    				// from generator and append it to $result 
      
    				// Login for generating a random character from generator 
    				//     ---generate a random number 
    				//     ---take modulus of same with length of generator (say i) 
   					//     ---append the character at place (i) from generator to result 
  
    				$result = ""; 
  
    				for ($i = 1; $i <= $n; $i++) { 
    			
    				    $result .= substr($generator, (rand()%(strlen($generator))), 1); 
    				} 
  	
    				// Return result 
    				return $result; 
				}

				$errorOTP = 1;

				while ($errorOTP) {

					$newOTP = generateNumericOTP(6);

					$queryOTP = "SELECT * FROM usersbeforeverification WHERE OTP = '$newOTP'";

					$resultOTP = mysqli_query($conn, $queryOTP);

					if (!($rowOTP = mysqli_fetch_array($resultOTP))) {

						$errorOTP = 0;
					}
				}

				$sql = "UPDATE usersbeforeverification SET OTP = '$newOTP' WHERE Email = '$email'";

				if(!mysqli_query($conn, $sql)) {
			
					echo "Not Changed";
				}
				else {
			
					echo "Changed";
				}
			}
		}
	}

	mysqli_close($conn);
?>