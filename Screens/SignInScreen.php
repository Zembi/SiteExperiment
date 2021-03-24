2<!DOCTYPE php>

<!--*CHECK IF USER IS SIGNED IN*-->
<script>
		
	var situat = sessionStorage.getItem('situation');

	if(situat == "FromMainPageAlreadySignedIn") {

		document.location.href = "http://localhost/E/Screens/MainPageScreen.php";
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

	#SignInContainer {
		position: relative;
		width: 100%; height: 100%;
		overflow: hidden;
		padding: 10px 4px 0 4px;
	}

	#SignInHeaderContainer {
		display: table;
		width: 130px;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 38px;
		text-align: center;
		border-bottom: 4px solid rgb(162, 162, 195);
		margin: auto; margin-top: 10px;
		padding-bottom: 6px;
	}

	#UsernameContainer {
		position: relative;
		width: 352px; height: 100%;
		float: left;
		margin-top: 25px;
		transform: translate3d(0, 0, 0);
		transition: transform 0.4s;
	}

	#UsernameHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 24px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#UseEmailOrPhoneToSignInBtn {
		position: absolute;
		display: table;
		float: left;
		color: rgb(131, 131, 175);
		background: transparent;
		font-family: flamenco;
		font-size: 17px;
		font-weight: bold;
		cursor: pointer;
		border: none;
		margin: -22px 0 0 208px;
	}

	#UseEmailOrPhoneToSignInBtn:hover {
		outline: none;
	}

	#UseEmailOrPhoneToSignInBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#UseEmailOrPhoneToSignInBtn:active div {
		color: rgb(131, 131, 175);
	}

	#UsernameInput {
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

	#UsernameInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithUsernameContainer {
		display: table;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 4px; margin-left: 6px;
	}

	#ProblemWithUsernameContainer div{
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#EmailOrPhoneContainer {
		position: absolute;
		width: 352px; height: 100%;
		margin-top: 25px;
		transform: translate3d(359px, 0, 0);
		transition: transform 0.4s;
	}

	#EmailOrPhoneHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 24px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#UseUsernameToSignInBtn {
		position: absolute;
		display: table;
		float: left;
		color: rgb(131, 131, 175);
		background: transparent;
		font-family: flamenco;
		font-size: 17px;
		font-weight: bold;
		cursor: pointer;
		border: none;
		margin: -22px 0 0 240px;
	}

	#UseUsernameToSignInBtn:hover {
		outline: none;
	}

	#UseUsernameToSignInBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#UseUsernameToSignInBtn:active div {
		color: rgb(131, 131, 175);
	}

	#EmailOrPhoneInput {
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

	#EmailOrPhoneInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithEmailOrPhoneContainer {
		display: table;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 4px; margin-left: 6px;
	}

	#ProblemWithEmailOrPhoneContainer div{
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#PasswordContainer {
		width: 100%; height: 100%;
		margin-top: 110px;
	}

	#PasswordHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 24px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#PasswordInput {
		position: relative;
		z-index: 1;
		width: 100%; height: 30px;
		color: rgb(19, 19, 19);
		font-family: Advent Pro;
		font-size: 20px;
		letter-spacing: 1px;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		padding-top: 2px; padding-left: 6px; padding-right: 50px;
		transition: border 0.3s, box-shadow 0.5s;
	}

	#PasswordInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ShowMePasswdImageButton {
		position: relative;
		z-index: 1;
		width: 30px; height: 30px;
		background: transparent;
		top: -30px;
		outline: none;
		cursor: pointer;
		border: none;
		margin-left: 88%;
	}

	#ShowMePasswdImage {
		width: 30px; height: 30px;
		user-select: none;
		content: url("/SitePics/passwdEyeClosed.png");
		margin-top: -1px; margin-left: -6px;
	}

	#ShowMePasswdImage:hover {
		content: url("/SitePics/passwdEyeClosedHover.png");
	}

	#ForgotYourPasswdButton {
		position: relative;
		z-index: 1;
		width: 146px; height: 17px;
		background: transparent;
		cursor: pointer;
		border: none;
		margin-top: -81px; margin-left: 190px;
	}

	#ForgotYourPasswdContainer {
		width: 146px;
		color: rgb(53, 49, 45);
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		font-style: italic;
		margin-top: -1px; margin-left: -6px;
	}

	#ForgotYourPasswdButton:hover {
		outline: none;
	}

	#ForgotYourPasswdButton:hover #ForgotYourPasswdContainer {
		color: rgb(208, 208, 225);
		border-bottom: 1px solid rgb(208, 208, 225);
	}

	#ProblemWithPasswordContainer {
		display: table;
		position: relative;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: -26px; margin-left: 6px;
	}

	#ProblemWithPasswordContainer div {
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#SignInButton {
		position: relative;
		z-index: 1;
		width: 100%; height: 30px;
		color: rgb(162, 162, 195);
		background: rgb(80, 80, 124);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		cursor: pointer;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		margin-top: 28px; margin-bottom: 12px;
	}

	#SignInButton:hover {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#SignInButton:focus {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#SignInButton:active {
		background: rgb(30, 30, 47);
	}

	#TermsAndCondsContainer {
		position: relative;
		z-index: 1;
		display: table;
		color: rgb(53, 49, 45);
		font-family: flamenco;
		font-size: 14px;
		font-weight: bold;
		margin-left: -2px;
		padding-left: 8px;
	}

	#LineInSignInContainer {
		height: 2px;
		border: 1px solid rgb(208, 208, 225);
		margin-top: 40px;
	}

	#TextInLineSIgnInContainer {
		display: table;
		position: relative;
		z-index: 10;
		color: rgb(208, 208, 225);
		background: white;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin: auto; margin-top: -10px;
		padding-left: 6px; padding-right: 6px;
	}

	#CreateAccountButton {
		position: relative;
		z-index: 1;
		width: 100%; height: 30px;
		color: rgb(162, 162, 195);
		background: rgb(208, 208, 225);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		cursor: pointer;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		margin-top: 8px;
	}

	#CreateAccountButton:hover {
		color: rgb(131, 131, 175);
		background: rgb(193, 193, 215);
	}

	#CreateAccountButton:focus {
		color: rgb(131, 131, 175);
		background: rgb(177, 177, 205);
	}

	#CreateAccountButton:active {
		background: rgb(162, 162, 195);
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
			
				<div id="SignInContainer">
				
					<div id="SignInHeaderContainer">Sign-In</div>
			
					<div id="UsernameContainer">
					
						<div id="UsernameHeaderContainer">Username</div>

						<button id="UseEmailOrPhoneToSignInBtn" onclick="ChangeSignInInfo()">
							<div>Use email or phone</div>
						</button>
	
						<input id="UsernameInput" maxlength="30" spellcheck="false">
						
						<div id="ProblemWithUsernameContainer"></div>

					</div>

					<div style="position: relative;">

					<div id="EmailOrPhoneContainer">
					
						<div id="EmailOrPhoneHeaderContainer">Email or Phone</div>

						<button id="UseUsernameToSignInBtn" onclick="ChangeSignInInfo()">
							<div>Use username</div>
						</button>
	
						<input id="EmailOrPhoneInput" maxlength="30" spellcheck="false">
						
						<div id="ProblemWithEmailOrPhoneContainer"></div>

					</div>

					</div>

					<div id="PasswordContainer">
					
						<div id="PasswordHeaderContainer">Password</div>

						<input id="PasswordInput" type="password" maxlength="30" spellcheck="false">

						<button id="ShowMePasswdImageButton" tabindex="-1" onclick="PasswordClick()" title="Click&See">
							<img id="ShowMePasswdImage">
						</button>

						<button id="ForgotYourPasswdButton" tabindex="-1" onclick="FrgtPasswdClick()">
							<div id="ForgotYourPasswdContainer">Forgot your password?</div>
						</button>

						<div id="ProblemWithPasswordContainer"></div>

					</div>

					<button id="SignInButton" onclick="SignInClick()">Sign-In</button>

					<label id="TermsAndCondsContainer" for="CheckboxTermsAndCondInput">By continuing, you agree with the <a href="https://www.google.com/" style="cursor: pointer;">Terms and Conditions of Use</a></label>
	
					<div id="LineInSignInContainer"></div>

					<div id="TextInLineSIgnInContainer">New Here?</div>

					<button id="CreateAccountButton" onclick="CreateYourAccClick()">Create your account</button>

				</div>

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
		
		var partNowOpened = 1;
		var passwdClick = 0;

		var userNC = document.getElementById("UsernameContainer");
		var userNInput = document.getElementById("UsernameInput");
		var changeToEmailOrPhoneBtn = document.getElementById("UseEmailOrPhoneToSignInBtn");
		var emailOrPhoneC = document.getElementById("EmailOrPhoneContainer");
		var emailOrPhoneInput = document.getElementById("EmailOrPhoneInput");
		var changeToUserNBtn = document.getElementById("UseUsernameToSignInBtn");
		var passwdC = document.getElementById("PasswordContainer");
		var passwdInput = document.getElementById("PasswordInput");
		var probUserNC = document.getElementById("ProblemWithUsernameContainer");
		var probEmailOrPhC = document.getElementById("ProblemWithEmailOrPhoneContainer");
		var probPasswdC = document.getElementById("ProblemWithPasswordContainer");

		NowOpenedPartStyling();

		function ChangeSignInInfo() {

			if(partNowOpened == 1) {

				partNowOpened = 2;
			}
			else if(partNowOpened == 2) {

				partNowOpened = 1;
			}

			NowOpenedPartStyling();
		}

		function PasswordClick() {

			if(passwdClick) {

				passwdClick = 0;
			}
			else if(!passwdClick) {

				passwdClick = 1;
			}

			CheckPasswordClickForPic();
		}

		function CheckPasswordClickForPic() {

			var imgBtn = document.getElementById("ShowMePasswdImageButton");
			var img = document.getElementById("ShowMePasswdImage");

			if(passwdClick) {

				imgBtn.title = "Click&Hide";
				passwdInput.type = "text";
				img.style.content = "url('/SitePics/passwdEyeOpenHover.png')";
				imgBtn.onmousemove = function () {
													img.style.content = "url('/SitePics/passwdEyeOpenHover.png')";
									 }
				imgBtn.onmouseout = function () {
													img.style.content = "url('/SitePics/passwdEyeOpen.png')";
									 }
			}
			else if(!passwdClick) {

				imgBtn.title = "Click&See";
				passwdInput.type = "password";
				img.style.content = "url('/SitePics/passwdEyeClosedHover.png')";
				imgBtn.onmousemove = function () {
													img.style.content = "url('/SitePics/passwdEyeClosedHover.png')";
									 }
				imgBtn.onmouseout = function () {
													img.style.content = "url('/SitePics/passwdEyeClosed.png')";
									 }
				}
		}

		function FrgtPasswdClick() {

			document.location.href = "http://localhost/E/Screens/ForgotPasswdScreen.php";
		}

		function SignInClick() {

			$.ajax({

				type: 'POST',
           		url: 'http://localhost/E/HelperFolders($.AJAX)/helperCheckForSignIn.php',
            	data: {username: userNInput.value, emailOrPhone: emailOrPhoneInput.value, password: passwdInput.value, typeOfSignIn: partNowOpened},
            	success: function(output) {
			
					if(partNowOpened == 1) {
				
						InputAlertsForUsernameOption(output);
					}
					else if(partNowOpened == 2) {

						InputAlertsForEmailOrPhoneOption(output);
					}
				}
			});
		}

		function InputAlertsForUsernameOption(msg) {

			var newMarginTop = 0;

			probUserNC.innerHTML = "";
			probPasswdC.innerHTML = "";

			/*USERNAME CHECK*/
			if(userNInput.value == "") {

				probUserNC.innerHTML += " Enter a Username";

				userNInput.style.border = "1px solid red";
				userNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				userNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newMarginTop = 10;

				changeToEmailOrPhoneBtn.style.color = "red";

				var newDiv1 = document.createElement("div");
				newDiv1.innerHTML = "!";
				
				probUserNC.appendChild(newDiv1);
			}
			else if(msg == "ADTE") {

				probUserNC.innerHTML += " Account doesn't exist";

				userNInput.style.border = "1px solid red";
				userNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				userNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				changeToEmailOrPhoneBtn.style.color = "red";

				newMarginTop = 10;

				var newDiv1 = document.createElement("div");
				newDiv1.innerHTML = "!";
				
				probUserNC.appendChild(newDiv1);
			}
			else {

				userNInput.style.border = "1px solid rgb(162, 162, 195)";
				userNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				userNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				changeToEmailOrPhoneBtn.style.color = "rgb(131, 131, 175)";
			}

		   	passwdC.style.marginTop = 110 + newMarginTop;

			/*PASSWORD CHECK*/
			if(passwdInput.value == "") {

				probPasswdC.innerHTML += " Enter a Password";

				passwdInput.style.border = "1px solid red";
				passwdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				passwdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				var newDiv2 = document.createElement("div");
				newDiv2.innerHTML = "!";
				
				probPasswdC.appendChild(newDiv2);
			}
			else {

				if(passwdInput.value.length < 6) {
					
					probPasswdC.innerHTML += " Password is incorrect";

					passwdInput.style.border = "1px solid red";
					passwdInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					passwdInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv2 = document.createElement("div");
					newDiv2.innerHTML = "!";
				
					probPasswdC.appendChild(newDiv2);
				}
				else {

					if(msg == "WP") {
						
						probPasswdC.innerHTML += " Password is incorrect";

						passwdInput.style.border = "1px solid red";
						passwdInput.addEventListener("focus", function () {
  							this.style.border = "2px solid red"; 
						});
						passwdInput.addEventListener("focusout", function () {
  							this.style.border = "1px solid red"; 
						});

						var newDiv2 = document.createElement("div");
						newDiv2.innerHTML = "!";
					
						probPasswdC.appendChild(newDiv2);
					}
					else {
					
						passwdInput.style.border = "1px solid rgb(162, 162, 195)";
						passwdInput.addEventListener("focus", function () {
  							this.style.border = "2px solid rgb(162, 162, 195)";  
						});
						passwdInput.addEventListener("focusout", function () {
  							this.style.border = "1px solid rgb(162, 162, 195)"; 
						});
					}
				}

				if(msg == "AF") {

					document.location.href = "http://localhost/E/Screens/MainPageScreen.php";
				}
			}
		}

		function InputAlertsForEmailOrPhoneOption(msg) {

			var newMarginTop = 0;

			probEmailOrPhC.innerHTML = "";
			probPasswdC.innerHTML = "";

			/*EMAIL OR PHONE CHECK*/
			if(emailOrPhoneInput.value == "") {

				probEmailOrPhC.innerHTML += " Enter an email or your phone";

				emailOrPhoneInput.style.border = "1px solid red";
				emailOrPhoneInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				emailOrPhoneInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				changeToUserNBtn.style.color = "red";

				newMarginTop = 10;

				var newDiv1 = document.createElement("div");
				newDiv1.innerHTML = "!";
				
				probEmailOrPhC.appendChild(newDiv1);
			}
			else if(msg == "ADTE") {

				probEmailOrPhC.innerHTML += " Account doesn't exist";

				emailOrPhoneInput.style.border = "1px solid red";
				emailOrPhoneInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				emailOrPhoneInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				changeToUserNBtn.style.color = "red";

				newMarginTop = 10;

				var newDiv1 = document.createElement("div");
				newDiv1.innerHTML = "!";
				
				probEmailOrPhC.appendChild(newDiv1);
			}
			else {

				emailOrPhoneInput.style.border = "1px solid rgb(162, 162, 195)";
				emailOrPhoneInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				emailOrPhoneInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				changeToUserNBtn.style.color = "rgb(131, 131, 175)";
			}

			passwdC.style.marginTop = 110 + newMarginTop;

			/*PASSWORD CHECK*/
			if(passwdInput.value == "") {

				probPasswdC.innerHTML += " Enter a Password";

				passwdInput.style.border = "1px solid red";
				passwdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				passwdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				var newDiv2 = document.createElement("div");
				newDiv2.innerHTML = "!";
				
				probPasswdC.appendChild(newDiv2);
			}
			else {

				if(passwdInput.value.length < 6) {
					
					probPasswdC.innerHTML += " Password is incorrect";

					passwdInput.style.border = "1px solid red";
					passwdInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					passwdInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					var newDiv2 = document.createElement("div");
					newDiv2.innerHTML = "!";
				
					probPasswdC.appendChild(newDiv2);
				}
				else {

					if(msg == "WP") {
						
						probPasswdC.innerHTML += " Password is incorrect";

						passwdInput.style.border = "1px solid red";
						passwdInput.addEventListener("focus", function () {
  							this.style.border = "2px solid red"; 
						});
						passwdInput.addEventListener("focusout", function () {
  							this.style.border = "1px solid red"; 
						});

						var newDiv2 = document.createElement("div");
						newDiv2.innerHTML = "!";
					
						probPasswdC.appendChild(newDiv2);
					}
					else {
					
						passwdInput.style.border = "1px solid rgb(162, 162, 195)";
						passwdInput.addEventListener("focus", function () {
  							this.style.border = "2px solid rgb(162, 162, 195)";  
						});
						passwdInput.addEventListener("focusout", function () {
  							this.style.border = "1px solid rgb(162, 162, 195)"; 
						});
					}
				}

				if(msg == "AF") {

					document.location.href = "http://localhost/E/Screens/MainPageScreen.php";
				}
			}
		}

		function CreateYourAccClick() {

			document.location.href = "http://localhost/E/Screens/CreateAccountScreen.php";
		}

		function NowOpenedPartStyling() {

			if(partNowOpened == 1) {

				userNInput.tabIndex = 1;
				changeToEmailOrPhoneBtn.tabIndex = 1;
				changeToUserNBtn.blur();
				emailOrPhoneInput.tabIndex = -1;
				changeToUserNBtn.tabIndex = -1;
				userNC.style.transform = "translate3d(0, 0, 0)";
				emailOrPhoneC.style.transform = "translate3d(359px, 0, 0)";
				setTimeout(function () {
					userNInput.focus();
				}, 300);

				probUserNC.innerHTML = "";
				probPasswdC.innerHTML = "";

				userNInput.style.border = "1px solid rgb(162, 162, 195)";
				userNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				userNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				changeToEmailOrPhoneBtn.style.color = "rgb(131, 131, 175)";

				emailOrPhoneInput.style.border = "1px solid rgb(162, 162, 195)";
				emailOrPhoneInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				emailOrPhoneInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				changeToUserNBtn.style.color = "rgb(131, 131, 175)";

				passwdInput.style.border = "1px solid rgb(162, 162, 195)";
				passwdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				passwdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});
			}
			else if(partNowOpened == 2) {

				userNInput.tabIndex = -1;
				changeToEmailOrPhoneBtn.tabIndex = -1;
				changeToEmailOrPhoneBtn.blur();
				emailOrPhoneInput.tabIndex = 1;
				changeToUserNBtn.tabIndex = 1;
				userNC.style.transform = "translate3d(-359px, 0, 0)";
				emailOrPhoneC.style.transform = "translate3d(0, 0, 0)";
				setTimeout(function () {
					emailOrPhoneInput.focus();
				}, 300);

				probEmailOrPhC.innerHTML = "";
				probPasswdC.innerHTML = "";

				userNInput.style.border = "1px solid rgb(162, 162, 195)";
				userNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				userNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				changeToEmailOrPhoneBtn.style.color = "rgb(131, 131, 175)";

				emailOrPhoneInput.style.border = "1px solid rgb(162, 162, 195)";
				emailOrPhoneInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				emailOrPhoneInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				changeToUserNBtn.style.color = "rgb(131, 131, 175)";

				passwdInput.style.border = "1px solid rgb(162, 162, 195)";
				passwdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				passwdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});
			}
		}

		sessionStorage.clear();
	</script>

</body>
</html>