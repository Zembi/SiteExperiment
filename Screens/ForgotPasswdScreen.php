<!DOCTYPE php>

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

	#ForgtPasswdEmailContainer {
		width: 100%; height: 100%;
		padding: 0.0063px;
	}

	#ForgtPasswdEmailHeaderContainer {
		display: table;
		width: 290px;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 36px;
		text-align: center;
		border-bottom: 4px solid rgb(162, 162, 195);
		margin: auto; margin-top: 10px;
		padding-bottom: 6px;
	}

	#ContainerThatNeverMoves {
		height: 129px;
		overflow: hidden;
	}

	/*PART ONE CONTAINER*/
	#PartOneContainer {
		position: relative;
	}

	#GetPasswdTextContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-size: 18px;
		margin: auto; margin-top: 15px;
		padding-left: 5px;
	}

	#PasswdTextContainer {
		font-weight: bold;
	}

	#EmailContainer {
		width: 100%; height: 100%;
		margin-top: 20px;
	}

	#EmailHeaderContainer {
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
		margin: auto; margin: -18px 0 0 300px;
		transition: margin 0.4s;
	}

	#EmailInput {
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

	#EmailInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithEmailContainer {
		display: table;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 4px; margin-left: 6px;
	}

	#ProblemWithEmailContainer div{
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#SendEmailBtn {
		width: 100%; height: 30px;
		color: rgb(162, 162, 195);
		background: rgb(80, 80, 124);
		font-family: flamenco;
		font-weight: bold;
		font-size: 22px;
		cursor: pointer;
		white-space: pre;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		margin-top: 28px; margin-bottom: 12px;
	}

	#SendEmailBtn:hover {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#SendEmailBtn:focus {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#SendEmailBtn:active {
		background: rgb(30, 30, 47);
	}

	/*#ReSendPasswdBtn {
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

	#ReSendPasswdBtn:hover {
		outline: none;
	}

	#ReSendPasswdBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#ReSendPasswdBtn:active div {
		color: rgb(131, 131, 175);
	}*/

	#GoBackToSignInBtn {
		display: table;
		color: rgb(53, 49, 45);
		background: transparent;
		font-family: flamenco;
		font-size: 20px;
		cursor: pointer;
		border: none;
		margin: auto;
	}

	#GoBackToSignInBtn:hover {
		outline: none;
	}

	#GoBackToSignInBtn:hover div {
		color: rgb(208, 208, 225);
	}

	#GoBackToSignInBtn:active div {
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
		margin: auto; padding-left: 5px;
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
			
				<div id="ForgtPasswdEmailContainer">
				
					<div id="ForgtPasswdEmailHeaderContainer">Get your password</div>
					
					<div id="ContainerThatNeverMoves">

						<div id="PartOneContainer">

							<div id="ForgtPasswdTextContainer">
						
								<div id="GetPasswdTextContainer">
									Enter your email here and <b id="PasswdTextContainer">your password</b> will be send to you
								</div>

							</div>

							<div id="EmailContainer">
					
								<div id="EmailHeaderContainer">Enter email</div>

								<div id="NoteReSendEmailSentHeaderContainer"></div>
	
								<input id="EmailInput" type="email" maxlength="30" spellcheck="false">
						
								<div id="ProblemWithEmailContainer"></div>

							</div>
	
						</div>

					</div>

					<button id="SendEmailBtn" onclick="SendPasswdClickForCheck()">Send  password</button>

					<!--<button id="ReSendPasswdBtn" onclick="ReSendPasswdBtnClick()">
						<div>Resend password</div>
					</button>-->

					<button id= "GoBackToSignInBtn" onclick= "GoBackToSignInBtnClick()">
						<div>Back to sing-in</div>
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

	var emailAlreadyInUse = "";
	var passwordFound = "";
	var openedAlreadyMoreInfoAboutEmailSent = 0;

	var mainPart = document.getElementById("ContainerThatNeverMoves");
	var emailInput = document.getElementById("EmailInput");
	var probEmailC = document.getElementById("ProblemWithEmailContainer");

	function SendPasswdClickForCheck() {

		$.ajax({

			type: 'POST',
			url: 'http://localhost/E/HelperFolders($.AJAX)/helperEmail.php',
			data: {emailInptOfUser: emailInput.value},
			success: function(output) {

				emailAlreadyInUse = output.substring(0, output.indexOf("#"));
            	
            	if(!(emailAlreadyInUse == "")) {

            		passwordFound = output.substring(output.indexOf("#") + 1);
	            }

				InputAlerts();
			}
		});
	}

	function InputAlerts() {
		
		var newHeight = 0;

		probEmailC.innerHTML = "";
				
		if(emailInput.value == "") {

			probEmailC.innerHTML += " Enter your email";

			emailInput.style.border = "1px solid red";
			emailInput.addEventListener("focus", function () {
  				this.style.border = "2px solid red"; 
			});
			emailInput.addEventListener("focusout", function () {
  				this.style.border = "1px solid red"; 
			});

			newHeight += 18;

			var newDiv1 = document.createElement("div");
			newDiv1.innerHTML = "!";
				
			probEmailC.appendChild(newDiv1);

			SomethingWentWrongForEmailAfterInfoOpened();
		}
		else {

			newHeight += CheckEmailFromDataBase();
		}

		mainPart.style.height = 129 + newHeight;
	}

	function CheckEmailFromDataBase() {

		var newHeight = 0;

		if(!validateEmail(emailInput.value)) {

			probEmailC.innerHTML += " Enter a valid email";

			emailInput.style.border = "1px solid red";
			emailInput.addEventListener("focus", function () {
  				this.style.border = "2px solid red"; 
			});
			emailInput.addEventListener("focusout", function () {
  				this.style.border = "1px solid red"; 
			});

			newHeight += 20;

			var newDiv1 = document.createElement("div");
			newDiv1.innerHTML = "!";
				
			probEmailC.appendChild(newDiv1);

			SomethingWentWrongForEmailAfterInfoOpened();
		}
		else if(emailAlreadyInUse == "") {

			probEmailC.innerHTML += "Account with this email doesn't exist";

			emailInput.style.border = "1px solid red";
			emailInput.addEventListener("focus", function () {
  				this.style.border = "2px solid red"; 
			});
			emailInput.addEventListener("focusout", function () {
  				this.style.border = "1px solid red"; 
			});

			newHeight += 20;

			var newDiv1 = document.createElement("div");
			newDiv1.innerHTML = "!";
				
			probEmailC.appendChild(newDiv1);

			SomethingWentWrongForEmailAfterInfoOpened();
		}
		else {

			emailInput.style.border = "1px solid rgb(162, 162, 195)";
			emailInput.addEventListener("focus", function () {
  				this.style.border = "2px solid rgb(162, 162, 195)";  
			});
			emailInput.addEventListener("focusout", function () {
  				this.style.border = "1px solid rgb(162, 162, 195)"; 
			});

			EveythingOkForEmail();
		}

		return newHeight;
	}

	function validateEmail(email) {
  				
  		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  		return re.test(email);
	}

	function EveythingOkForEmail() {

		var midC = document.getElementById("MidContainer");
		var sendEmailBtn = document.getElementById("SendEmailBtn");
		var noteReSendEmailSentC = document.getElementById("NoteReSendEmailSentHeaderContainer");
		var reSendC = document.getElementById("ReSendTextContainer");

		if(!openedAlreadyMoreInfoAboutEmailSent) {
		
			noteReSendEmailSentC.innerHTML = "An email was sent to you";
			noteReSendEmailSentC.style.margin = "-18px 0 0 185px";

			noteReSendEmailSomethingWrongC = document.createElement("div");
			noteReSendEmailSomethingWrongC.id = "NoteReSendEmailSomethingWrongHeaderContainer";

			noteReSendEmailSomethingWrongC.innerHTML = "If you can't find our email:";

			reSendC.style.marginTop = "20px";

			noteInfoReSendC = document.createElement("div");
			noteInfoReSendC.id = "NoteInfoReSendHeaderContainer";

			noteInfoReSendC.innerHTML = "Confirm that your email address was entered correctly above.<br>Check your spam or junk email folder.";

			midC.appendChild(reSendC);
			reSendC.appendChild(noteReSendEmailSomethingWrongC);
			reSendC.appendChild(noteInfoReSendC);
		}
		else {

			noteReSendEmailSentC.innerHTML = "A new email was resent to you";
			noteReSendEmailSentC.style.margin = "-18px 0 0 155px";
		}

		sendEmailBtn.innerHTML = "Re-send";
		
		openedAlreadyMoreInfoAboutEmailSent = 1;
	}

	function SomethingWentWrongForEmailAfterInfoOpened() {

		var sendEmailBtn = document.getElementById("SendEmailBtn");
		var noteReSendEmailSentC = document.getElementById("NoteReSendEmailSentHeaderContainer");
		var reSendC = document.getElementById("ReSendTextContainer");

		sendEmailBtn.innerHTML = "Send  password";

		noteReSendEmailSentC.style.margin = "-18px 0 0 300px";

		setTimeout(function() {
		
			noteReSendEmailSentC.innerHTML = "";
		}, 150);

		reSendC.innerHTML = "";
		reSendC.style.marginTop = "0";

		openedAlreadyMoreInfoAboutEmailSent = 0;
	}

	function GoBackToSignInBtnClick() {

		window.history.back();
	}

	</script>

</body>
</html>