<!DOCTYPE php>

<!--*CHECK IF USER IS SIGNED IN*-->
<script>
		
	var situat = sessionStorage.getItem('situation');
	var emailNow = sessionStorage.getItem('email');

	if(situat == "FromMainPageAlreadySignedIn") {

		document.location.href = "http://localhost/E/Screens/MainPageScreen.php";
	}

	if(emailNow == null) {

		document.location.href = "http://localhost/E/Screens/CreateAccountScreen.php";
	}

</script>
<!--**-->

<html>
<head>

<!--JQUERY LIBRARIES-->
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--FONT-FAMILIES USED-->
<link href='https://fonts.googleapis.com/css?family=Arbutus' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet'>

<meta name="theme-color" content="rgb(190, 214, 148)">

<style>

	* {
  		box-sizing: border-box;
	}

	html {
		scroll-behavior: smooth;
	}

	body {
		height: 100%;
		background: black;
		margin: 0;
		padding: 0;
	}

	#MainContainer {
		display: flex;
  		flex-flow: column;
		width: 100%; height: 100%;
		background: white;
	}

/*ALL ELEMENTS UP FROM FOOTER*/
	#AllUpperElements {
		height: 82%;
		min-height: 590px;
		position: relative;
		z-index: 3;
		background: white;
		box-shadow: 0 0.9vw 0.9vw -1.5vw grey;
		padding-bottom: 45px;
	}

	/*UPPER CONTAINER*/
	#UpContainer {
		position: relative;
		width: 280px; height: 100px;
		margin: auto;
		padding: 0.0063px;
	}

	#ImageContainer {
		width: 180px; height: 90px;
		margin: auto;
	}

	#HeaderImg {
		width: 100%; height: 100%;
		user-select: none;
	}
	/**/

	/*MID CONTAINER*/
	#MidContainer {
		display: table;
		width: 400px;
		background: transparent;
		box-shadow: 0 0.7vw 0.6vw -0.9vw grey;
		border-radius: 5px;
		border: 1px solid rgb(208, 208, 225);
		margin: auto;
		padding: 25px; padding-top: 10px; padding-bottom: 18px;
		/*transition: box-shadow 0.3s;*/
	}

	#VerifyEmailContainer {
		width: 100%; height: 100%;
		padding: 0.0063px;
	}

	#VerifyEmailHeaderContainer {
		display: table;
		width: 260px;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 36px;
		text-align: center;
		border-bottom: 4px solid rgb(162, 162, 195);
		margin: auto; margin-top: 10px;
		padding-bottom: 6px;
	}

	#VerificationTextContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-size: 18px;
		margin: auto; margin-top: 15px;
	}

	#EmailTextContainer {
		font-family: Advent Pro;
		font-weight: bold;
		font-size: 17px;
		letter-spacing: 1.2px;
	}

	#OTPContainer {
		width: 100%; height: 100%;
		margin-top: 20px;
	}

	#OTPHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 22px;
		margin-left: 8px;
	}

	#NoteReSendEmailSentHeaderContainer {
		position: absolute;
		z-index: -1;
		color: rgb(102, 204, 0);
		font-family: flamenco;
		font-size: 16px;
		margin: auto; margin: 0 0 0 125px;
		transition: margin 0.4s;
	}

	#OTPInput {
		width: 100%; height: 30px;
		color: rgb(19, 19, 19);
		font-family: Advent Pro;
		font-size: 20px;
		letter-spacing: 1px;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		padding-top: 2px; padding-left: 6px; padding-right: 6px;
		transition: border 0.3s, box-shadow 0.5s;
	}

	#OTPInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithOTPContainer {
		display: table;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 4px; margin-left: 6px;
	}

	#ProblemWithOTPContainer div{
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#OTPVerifyButton {
		width: 100%; height: 30px;
		color: rgb(162, 162, 195);
		background: rgb(80, 80, 124);
		font-family: flamenco;
		font-weight: bold;
		font-size: 22px;
		cursor: pointer;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		margin-top: 28px; margin-bottom: 12px;
	}

	#OTPVerifyButton:hover {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#OTPVerifyButton:focus {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#OTPVerifyButton:active {
		background: rgb(30, 30, 47);
	}

	#ReSendOTPBtn {
		display: table;
		float: left;
		color: rgb(53, 49, 45);
		background: transparent;
		font-family: flamenco;
		font-size: 20px;
		outline: none;
		cursor: pointer;
		border: none;
	}

	#ReSendOTPBtn:hover {
		outline: none;
	}

	#ReSendOTPBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#ReSendOTPBtn:active div {
		color: rgb(131, 131, 175);
	}

	#ChangeInfoBtn {
		display: table;
		float: right;
		color: rgb(53, 49, 45);
		background: transparent;
		font-family: flamenco;
		font-size: 20px;
		cursor: pointer;
		border: none;
	}

	#ChangeInfoBtn:hover {
		outline: none;
	}

	#ChangeInfoBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#ChangeInfoBtn:active div {
		color: rgb(131, 131, 175);
	}

	#ReSendTextContainer {
		width: 100%;
		float: left;
		margin-top: 0;
		transition: margin 0.4s;
	}

	#NoteReSendEmailSomethingWrongHeaderContainer {
		color: rgb(50, 50, 78);
		font-family: flamenco;
		font-size: 17px;
		font-weight: bold;
		text-align: left;
		margin: auto;
		padding-left: 5px;
	}

	#NoteInfoReSendHeaderContainer {
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-size: 14px;
		line-height: 18px;
		margin: auto;
		padding: 4px 0px 0 10px;
	}
	/**/
/**/

/*FOOTER INSIDE ELEMENTS*/
	#FooterContainer {
		width: 100%; height: 18%;
		min-height: 100px;
		background: rgb(250, 250, 250);
	}

	#ColumnFooterWithInfoContainer {
		width: 306px; height: 40px;
		margin: auto;
		padding-top: 20px;
	}

	#TermsAndCondsFooterBtn {
		display: table;
		float: left;
		color: rgb(53, 49, 45);
		background: transparent;
		font-family: flamenco;
		font-size: 15px;
		cursor: pointer;
		border: none;
		margin: 0 65px 0 35px;
	}

	#TermsAndCondsFooterBtn:hover {
		outline: none;
	}

	#TermsAndCondsFooterBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#TermsAndCondsFooterBtn:active div {
		color: rgb(131, 131, 175);
	}

	#HelpFooterBtn {
		display: table;
		color: rgb(53, 49, 45);
		background: transparent;
		font-family: flamenco;
		font-size: 15px;
		cursor: pointer;
		border: none;
	}

	#HelpFooterBtn:hover {
		outline: none;
	}

	#HelpFooterBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#HelpFooterBtn:active div {
		color: rgb(131, 131, 175);
	}

	#LastFooterInfoContainer {
		display: table;
		color: rgb(53, 49, 45);
		background: transparent;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin: auto; margin-top: 30px;
	}
/**/

/*ANIMATIONS*/
	@keyframes RoundMenuLogoRight {
		0% {transform: rotateZ(0deg);}
		100% {transform: rotateZ(360deg);}
	}

	@keyframes RoundMenuLogoLeft {
		0% {transform: rotateZ(0deg);}
		100% {transform: rotateZ(-360deg);}
	}
/**/

</style>
	
	<title>Cr.M.bi. Sign-In</title>

</head>
<body>
	
	<div id="MainContainer">
		
		<div id="AllUpperElements">
		<div id="UpContainer">
			
			<a href="http://localhost/E/Screens/MainPageScreen.php" style="outline: none" tabindex="-1">
				<div id="ImageContainer">
					<img id="HeaderImg" title="" src="/SitePics/newMonkeyImg.png">
				</div>
			</a>

		</div>

		<div id="MidContainer">
			
				<div id="VerifyEmailContainer">
				
					<div id="VerifyEmailHeaderContainer">Verify your email</div>
				
					<div id="VerificationTextContainer">
						
						<div id="TextContainer">
							An One Time Password (OTP), was sent with an email, at <b id="EmailTextContainer"></b>
						</div>

					</div>

					<div id="OTPContainer">
					
						<div id="OTPHeaderContainer">Enter OTP</div>

						<div id="NoteReSendEmailSentHeaderContainer"></div>
	
						<input id="OTPInput" maxlength="8" spellcheck="false">
						
						<div id="ProblemWithOTPContainer"></div>

					</div>

					<button id="OTPVerifyButton" onclick="OTPClickForCheck()">Verify</button>

					<button id="ReSendOTPBtn" onclick="ReSendOTPBtnClick()">
						<div>Resend OTP</div>
					</button>

					<button id="ChangeInfoBtn" onclick="ChangeInfoBtnClick()">
						<div>Change your Info</div>
					</button>
	
				</div>

				<div id="ReSendTextContainer"></div>

			</div>

		</div>

		<div id="FooterContainer">
			
			<div id="ColumnFooterWithInfoContainer">
					
				<button id="TermsAndCondsFooterBtn" onclick="">
					<div>Terms of Service</div>
				</button>

				<button id="HelpFooterBtn">
					<div>Help</div>
				</button>

				<div id="LastFooterInfoContainer">© 2019, Cr_M_bi.com</div>

			</div>

		</div>

	</div>

	<script>
	
	var verfTextC = document.getElementById("TextContainer");
	var verfEmailTextC = document.getElementById("EmailTextContainer");
	var nowUsername = sessionStorage.getItem('username');
	var nowName = sessionStorage.getItem('name');
	var nowLastName = sessionStorage.getItem('lastname');
	var nowCountry = sessionStorage.getItem('country');
	var nowEmail = sessionStorage.getItem('email');
	var nowPhone = sessionStorage.getItem('phone');
	var otpInput = document.getElementById("OTPInput");
	var probOTPC = document.getElementById("ProblemWithOTPContainer");

	var openedAlready = 0;

	//verfTextC.innerHTML = "An One Time Password (OTP) was sent with an email, at ";
	verfEmailTextC.innerHTML = nowEmail;

	function OTPClickForCheck() {

		$.ajax({

			type: 'POST',
			url: 'http://localhost/E/HelperFolders($.AJAX)/helperOTP.php',
			data: {email: nowEmail, userInptOTP: otpInput.value},
			success: function(output) {

				probOTPC.innerHTML = "";
				
				if(output == "ALREADYIN") {

					probOTPC.innerHTML += " This account is already verified";

					otpInput.style.border = "1px solid red";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv1 = document.createElement("div");
					newDiv1.innerHTML = "!";
				
					probOTPC.appendChild(newDiv1);

					SomethingWentWrongForEmailAfterInfoOpened();
				}
				else if(otpInput.value == "") {

					probOTPC.innerHTML += " Enter the digits(OTP)";

					otpInput.style.border = "1px solid red";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv1 = document.createElement("div");
					newDiv1.innerHTML = "!";
				
					probOTPC.appendChild(newDiv1);

					SomethingWentWrongForEmailAfterInfoOpened();
				}
				else if(output == "NotFound") {

					probOTPC.innerHTML += " Something went wrong, please go back";

					otpInput.style.border = "1px solid red";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv1 = document.createElement("div");
					newDiv1.innerHTML = "!";
				
					probOTPC.appendChild(newDiv1);

					SomethingWentWrongForEmailAfterInfoOpened();
				}
				else if(output == "WRONG") {

					probOTPC.innerHTML += " Your input doesn't match the OTP";

					otpInput.style.border = "1px solid red";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv1 = document.createElement("div");
					newDiv1.innerHTML = "!";
				
					probOTPC.appendChild(newDiv1);

					SomethingWentWrongForEmailAfterInfoOpened();
				}
				else {

					otpInput.style.border = "1px solid rgb(162, 162, 195)";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid rgb(162, 162, 195)";  
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid rgb(162, 162, 195)"; 
					});

					sessionStorage.setItem('situation', 'FromMainPageAlreadySignedIn');

					document.location.href = "http://localhost/E/Screens/MainPageScreen.php";
				}
			}
		});
	}

	function ReSendOTPBtnClick() {

		$.ajax({

			type: 'POST',
			url: 'http://localhost/E/HelperFolders($.AJAX)/helperReSendOTP.php',
			data: {email: nowEmail, userInptOTP: otpInput.value},
			success: function(output) {

				probOTPC.innerHTML = "";

				if(output == "ALREADYIN") {

					probOTPC.innerHTML += " This account is already verified";

					otpInput.style.border = "1px solid red";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv1 = document.createElement("div");
					newDiv1.innerHTML = "!";
				
					probOTPC.appendChild(newDiv1);

					SomethingWentWrongForEmailAfterInfoOpened();
				}
				else if(output == "NotFound") {

					probOTPC.innerHTML += " Something went wrong, please go back";

					otpInput.style.border = "1px solid red";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv1 = document.createElement("div");
					newDiv1.innerHTML = "!";
				
					probOTPC.appendChild(newDiv1);

					SomethingWentWrongForEmailAfterInfoOpened();
				}
				else {

					otpInput.style.border = "1px solid rgb(162, 162, 195)";
					otpInput.addEventListener("focus", function () {
  						this.style.border = "2px solid rgb(162, 162, 195)";  
					});
					otpInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid rgb(162, 162, 195)"; 
					});

					EveythingOkForEmail();
				}
			}
		});
	}

	function EveythingOkForEmail() {

		var midC = document.getElementById("MidContainer");
		var noteReSendEmailSentC = document.getElementById("NoteReSendEmailSentHeaderContainer");
		var reSendC = document.getElementById("ReSendTextContainer");

		if(!openedAlready) {
		
			noteReSendEmailSentC.innerHTML = "A new OTP, was sent to your email";
			noteReSendEmailSentC.style.margin = "-18px 0 0 125px";

			noteReSendEmailSomethingWrongC = document.createElement("div");
			noteReSendEmailSomethingWrongC.id = "NoteReSendEmailSomethingWrongHeaderContainer";

			noteReSendEmailSomethingWrongC.innerHTML = "If you can't find our verification email:";

			reSendC.style.marginTop = "20px";

			noteInfoReSendC = document.createElement("div");
			noteInfoReSendC.id = "NoteInfoReSendHeaderContainer";

			noteInfoReSendC.innerHTML = "Confirm that your email address was entered correctly above.<br>Check your spam or junk email folder.";

			midC.appendChild(reSendC);
			reSendC.appendChild(noteReSendEmailSomethingWrongC);
			reSendC.appendChild(noteInfoReSendC);
		}
		
		openedAlready = 1;
	}

	function SomethingWentWrongForEmailAfterInfoOpened() {

		var noteReSendEmailSentC = document.getElementById("NoteReSendEmailSentHeaderContainer");
		var reSendC = document.getElementById("ReSendTextContainer");

		noteReSendEmailSentC.style.margin = "0 0 0 125px";

		setTimeout(function() {
		
			noteReSendEmailSentC.innerHTML = "";
		}, 150);

		reSendC.innerHTML = "";
		reSendC.style.marginTop = "0";

		openedAlready = 0;
	}

	function ChangeInfoBtnClick() {

		//window.history.back();
		document.location.href = "http://localhost/E/Screens/CreateAccountScreen.php";
		sessionStorage.setItem('checker', 'FromOTP');
	}

	</script>

</body>
</html>