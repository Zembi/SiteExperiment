<?php
	
	$email = "";
	$phone = "";

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

	$erEm;

	if(isset($_POST['email'])) {

		$email = $_POST['email'];

		$queryEmail = "SELECT * FROM userssignin WHERE Email = '$email'";

		$resultEmail = mysqli_query($conn, $queryEmail);

		$erEm = 0;

		while ($rowEm = mysqli_fetch_array($resultEmail)) {

			$erEm = 1;
			break;
		}

		if($erEm) {

			echo " Email already in use#";
		}
	}

	$erPh;

	if(isset($_POST['phone'])) {

		$phone = $_POST['phone'];

		$queryPhone = "SELECT * FROM userssignin WHERE Phone = '$phone'";

		$resultPhone = mysqli_query($conn, $queryPhone);

		$erPh = 0;

		while ($rowPh = mysqli_fetch_array($resultPhone)) {

			$erPh = 1;
			break;
		}

		if($erPh) {

			echo " Phone already in use$";
		}
	}

	if(!$erEm && !$erPh) {

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

		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$lastName = $_POST['lastName'];
		$country = $_POST['country'];

		//$sql = "INSERT INTO userssignin (Username, Name, LastName, Password, Country, Email, Phone, Active) VALUES ('$username', '$name', '$lastName', '$password', '$country', '$email', '$phone', '0')";

		$queryUsrnEmlPh = "SELECT * FROM usersbeforeverification WHERE Username = '$username' || Email = '$email' || Phone = '$phone'";

		$resultUsrnEmlPh = mysqli_query($conn, $queryUsrnEmlPh);

		while ($rowUEP = mysqli_fetch_array($resultUsrnEmlPh)) {

			$sql1 = "DELETE FROM usersbeforeverification WHERE Username = '$username' || Email = '$email' || Phone = '$phone'";

			if(mysqli_query($conn, $sql1)) {
				
				echo "Deleted";
			}
		}

		$errorOTP = 1;
		$otp = "";

		while ($errorOTP) {

			$otp = generateNumericOTP(6);

			$queryOTP = "SELECT * FROM usersbeforeverification WHERE OTP = '$otp'";

			$resultOTP = mysqli_query($conn, $queryOTP);

			if (!($rowOTP = mysqli_fetch_array($resultOTP))) {

				$errorOTP = 0;
			}
		}

		$sql2 = "INSERT INTO usersbeforeverification (Username, Name, LastName, Password, Country, Email, Phone, Active, OTP) VALUES ('$username', '$name', '$lastName', '$password', '$country', '$email', '$phone', '0', '$otp')";

		if(!mysqli_query($conn, $sql2)) {
			
			echo "Not Inserted";
		}
		else {
			
			echo "Inserted";
		}
	}

	mysqli_close($conn);

?>