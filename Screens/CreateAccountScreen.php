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

 <meta name="viewport" content="width=device-width, initial-scale=1">
 
<meta name="theme-color" content="rgb(190, 214, 148)">

<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<style>

	* {
  		box-sizing: border-box;
	}

	html {
		scroll-behavior: smooth;
	}

	body {
		height: 100%;
		background: red;
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
		position: relative;
		display: table;
		width: 400px;
		background: transparent;
		box-shadow: 0 0.7vw 0.6vw -0.9vw grey;
		border-radius: 5px;
		border: 1px solid rgb(208, 208, 225);
		margin: auto;
		padding: 20px; padding-top: 10px; padding-bottom: 18px;
		/*transition: box-shadow 0.3s;*/
	}

	#CreateYouAccHeaderContainer {
		display: table;
		width: 246px;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 38px;
		text-align: center;
		border-bottom: 4px solid rgb(162, 162, 195);
		margin: auto; margin-top: 10px;
		padding-bottom: 6px;
	}

	#CreateYouAccContainer {
		width: 100%; height: 100%;
		padding: 0.0063px;
	}

	#NavigationButtonsContainer {
		margin-top: 15px;
	}

	#PreviousButton {
		height: 26px;
		color: rgb(208, 208, 225);
		background: rgb(162, 162, 195);
		opacity: 0.4;
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		outline: none;
		border-radius: 0px;
		border: 1px solid rgb(208, 208, 225);
		margin-left: 10px;
	}

	#NextButton {
		float: right;
		height: 26px;
		color: rgb(208, 208, 225);
		background: rgb(162, 162, 195);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		outline: none;
		border-radius: 0px;
		border: 1px solid rgb(208, 208, 225);
		margin-right: 16px;
	}

	#NavigationStepsC {
		position: absolute;
		width: 167px; height: 35px;
		overflow: hidden;
		margin-top: 69px; margin-left: 103px;
	}

	#NavigationStepsImg {
		width: 150px; height: 70px;
		margin-top: -15.5px; margin-left: 8px;
	}

	#MainPartThatAlwaysStaysContainer {
		height: 219px;
		position: relative;
		overflow: hidden;
		padding: 10px 4px 0 4px;
	}

	/*FIRST PART*/
	#FirstPartofSignUpContainer {
		width: 100%;
		float: left;
		position: relative;
		transform: translate3d(0, 0, 0);
		transition: transform 0.4s;
	}

	#UsernameContainer {
		width: 352px;
	}

	#UsernameHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
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

	#PasswordContainer {
		width: 352px;
		margin-top: 20px;
	}

	#PasswordHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#PasswordInput {
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

	#RePasswordContainer {
		width: 352px;
		margin-top: 16px;
	}

	#RePasswordHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#RePasswordInput {
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

	#RePasswordInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithRePasswordContainer {
		display: table;
		position: relative;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 3px; margin-left: 6px;
	}

	#ProblemWithRePasswordContainer div {
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-top: -1px; margin-right: 10px;
	}
	/**/

	/*SECOND PART*/
	#SecondPartofSignUpContainer {
		width: 100%;
		float: left;
		position: absolute;
		transform: translate3d(359px, 0, 0);
		transition: transform 0.4s;
	}

	#NameContainer {
		width: 352px;
	}

	#NameHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#NameInput {
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

	#NameInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithNameContainer {
		display: table;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 4px; margin-left: 6px;
	}

	#ProblemWithNameContainer div{
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#LastNameContainer {
		width: 352px;
		margin-top: 20px;
	}

	#LastNameHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#LastNameInput {
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

	#LastNameInput:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithLastNameContainer {
		display: table;
		position: relative;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-left: 6px;
	}

	#ProblemWithLastNameContainer div {
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#CountryContainer {
		width: 352px;
		margin-top: 20px;
	}

	#CountryHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#CountrySelect {
		width: 100%; height: 30px;
		color: rgb(19, 19, 19);
		font-family: Advent Pro;
		font-size: 20px;
		letter-spacing: 1px;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		padding-top: 0px; padding-left: 6px; padding-right: 10px;
		transition: border 0.3s, box-shadow 0.5s;
	}

	#CountrySelect:focus {
		border: 2px solid rgb(146, 146, 185);
		box-shadow: 0 0 4px 0 grey;
	}

	.CountriesSelectContainer {
  		position: relative;
  		font-family: Arial;
	}

	.CountriesSelectContainer select {
  		
	}

	.select-selected {
		background-color: DodgerBlue;
	}

	/*style the arrow inside the select element:*/
	.select-selected:after {
  		position: absolute;
  		content: "";
  		top: 14px;
  		right: 10px;
  		width: 0;
  		height: 0;
  		border: 6px solid transparent;
  		border-color: #fff transparent transparent transparent;
	}

	/*point the arrow upwards when the select box is open (active):*/
	.select-selected.select-arrow-active:after {
 		border-color: transparent transparent #fff transparent;
  		top: 7px;
	}

	/*style the items (options), including the selected item:*/
	.select-items div,.select-selected {
  		color: #ffffff;
  		padding: 8px 16px;
  		border: 1px solid transparent;
  		border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  		cursor: pointer;
  		user-select: none;
	}

	/*style items (options):*/
	.select-items {
  		position: absolute;
  		background-color: DodgerBlue;
  		top: 100%;
  		left: 0;
  		right: 0;
  		z-index: 99;
	}

	/*hide the items when the select box is closed:*/
	.select-hide {
  		display: none;
	}

	.select-items div:hover, .same-as-selected {
  		background-color: rgba(0, 0, 0, 0.1);
	}

	#ProblemWithCountryContainer {
		display: table;
		position: relative;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-left: 6px;
	}

	#ProblemWithCountryContainer div {
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-top: -1px; margin-right: 10px;
	}
	/**/

	/*THIRD PART*/
	#ThirdPartofSignUpContainer {
		width: 100%;
		float: left;
		position: absolute;
		transform: translate3d(359px, 0, 0);
		/*transform: translate3d(349px, 0, 0);*/
		transition: transform 0.4s;
	}

	#EmailContainer {
		width: 352px;
	}

	#EmailHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
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
		position: relative;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 4px; margin-left: 6px;
	}

	#ProblemWithEmailContainer div {
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-right: 10px; margin-top: -1px;
	}

	#PhoneContainer {
		width: 352px;
		margin-top: 24px;
	}

	#PhoneHeaderContainer {
		display: table;
		color: rgb(19, 19, 19);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		margin-left: 8px; margin-bottom: 3px;
	}

	#FullPhoneContainer {
		display: flex;
		width: 100%;
	}

	#StartingNumberContainer {
		display: table;
		height: 30px;
		color: rgb(19, 19, 19);
		font-family: Advent Pro;
		font-size: 22px;
		font-weight: bold;
  		text-overflow: ellipsis;
  		white-space: nowrap;
		letter-spacing: 1px;
		padding-top: 2px; padding-right: 3px;
	}

	#PhoneInput {
		display: table;
		flex: 1;
		width: 100%; height: 30px;
		color: rgb(19, 19, 19);
		font-family: Advent Pro;
		font-size: 20px;
		letter-spacing: 2px;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195); border-left: none;
		padding-top: 2px; padding-left: 3px; padding-right: 3px;
		transition: border 0.3s, box-shadow 0.5s;
	}

	#PhoneInput:focus {
		border: 2px solid rgb(146, 146, 185); border-left: none;
		box-shadow: 0 0 4px 0 grey;
	}

	#ProblemWithPhoneContainer {
		display: table;
		position: relative;
		color: red;
		font-family: flamenco;
		font-size: 16px;
		font-weight: bold;
		margin-top: 4px; margin-left: 6px;
	}

	#ProblemWithPhoneContainer div {
		display: table;
		float: left;
		font-family: Arial;
		font-style: italic;
		margin-top: -1px; margin-right: 10px;
	}

	#CreateMyAccButton {
		width: 352px; height: 30px;
		color: rgb(162, 162, 195);
		background: rgb(80, 80, 124);
		font-family: flamenco;
		font-weight: bold;
		font-size: 20px;
		cursor: pointer;
		outline: none;
		border-radius: 5px;
		border: 1px solid rgb(162, 162, 195);
		margin-top: 24px; margin-bottom: 12px;
	}

	#CreateMyAccButton:hover {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#CreateMyAccButton:focus {
		color: rgb(146, 146, 185);
		background: rgb(50, 50, 78);
	}

	#CreateMyAccButton:active {
		background: rgb(30, 30, 47);
	}

	#TermsAndCondsContainer {
		display: table;
		color: rgb(53, 49, 45);
		font-family: flamenco;
		font-size: 14px;
		font-weight: bold;
		margin-left: -2px;
		padding-left: 8px;
	}
	/**/

	#LineInSignUpContainer {
		height: 2px;
		border: 1px solid rgb(208, 208, 225);
		margin-top: 25px;
	}

	#TextInLineCreateYouAccContainer {
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

	#GetMeToSignInScreenButton {
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

	#GetMeToSignInScreenButton:hover {
		color: rgb(131, 131, 175);
		background: rgb(193, 193, 215);
	}

	#GetMeToSignInScreenButton:focus {
		color: rgb(131, 131, 175);
		background: rgb(177, 177, 205);
	}

	#GetMeToSignInScreenButton:active {
		background: rgb(162, 162, 195);
	}
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
			
				<a href="http://localhost/E/Screens/MainPageScreen.php" tabindex="-1">
					<div id="ImageContainer">
						<img id="HeaderImg" title="" src="/SitePics/newMonkeyImg.png">
					</div>
				</a>

			</div>

		<div id="MidContainer">
			
			<div id="CreateYouAccContainer">

				<div id="NavigationStepsC">
					<img id="NavigationStepsImg">
				</div>
				
				<div id="CreateYouAccHeaderContainer">Create account</div>
						
				<div id="NavigationButtonsContainer">
							
					<button id="PreviousButton" onclick="PreviousButtonClick()">Previous</button>

					<button id="NextButton" onclick="NextButtonClick()">Next</button>

				</div>

					<div id="MainPartThatAlwaysStaysContainer">

						<div id="FirstPartofSignUpContainer" name="Part1">
						
							<div id="UsernameContainer">
					
								<div id="UsernameHeaderContainer">Username</div>
	
								<input id="UsernameInput" maxlength="30" spellcheck="false">
						
								<div id="ProblemWithUsernameContainer"></div>

							</div>

							<div id="PasswordContainer">
					
								<div id="PasswordHeaderContainer">Password</div>

								<input id="PasswordInput" type="password" maxlength="30" spellcheck="false">

								<button id="ShowMePasswdImageButton" tabindex="-1" onclick="PasswordClick()" title="Click&See">
									<img id="ShowMePasswdImage">
								</button>

								<div id="ProblemWithPasswordContainer"></div>

							</div>

							<div id="RePasswordContainer">

								<div id="RePasswordHeaderContainer">Re-enter Password</div>

								<input id="RePasswordInput" type="password" maxlength="30" spellcheck="false">

								<div id="ProblemWithRePasswordContainer"></div>

							</div>

						</div>

						<div id="SecondPartofSignUpContainer" name="Part2">
						
							<div id="NameContainer">
					
								<div id="NameHeaderContainer">First name</div>
	
								<input id="NameInput" tabindex="-1" maxlength="30" spellcheck="false">
						
								<div id="ProblemWithNameContainer"></div>

							</div>

							<div id="LastNameContainer">
					
								<div id="LastNameHeaderContainer">Last name</div>

								<input id="LastNameInput" tabindex="-1" maxlength="30" spellcheck="false">

								<div id="ProblemWithLastNameContainer"></div>

							</div>

							<div id="CountryContainer">

								<div id="CountryHeaderContainer">Country</div>
								
								<div class="CountriesSelectContainer">

									<select id="CountrySelect" tabindex="-1" maxlength="30" spellcheck="false" onchange="OnSelect()"></select>

								</div>

								<div id="ProblemWithCountryContainer"></div>

							</div>

						</div>

						<div id="ThirdPartofSignUpContainer" name="Part3">
						
							<div id="EmailContainer">
					
								<div id="EmailHeaderContainer">Email</div>
	
								<input id="EmailInput" type="email" maxlength="30" spellcheck="false">
						
								<div id="ProblemWithEmailContainer"></div>

							</div>

							<div id="PhoneContainer">

								<div id="PhoneHeaderContainer">Phone Number</div>

								<div id="FullPhoneContainer">

									<div id="StartingNumberContainer"></div>

									<div style="width: 100%">
										
										<input id="PhoneInput" maxlength="30" spellcheck="false">
									
										<div id="ProblemWithPhoneContainer"></div>

									</div>

								</div>

							</div>

							<button id="CreateMyAccButton" onclick="NextButtonClick()">Create My Account</button>

							<label id="TermsAndCondsContainer" for="CheckboxTermsAndCondInput">By creating an account, you agree with the <a id="TermsAndCondsLink" href="https://www.google.com/" style="cursor: pointer;">Terms and Conditions of Use</a></label>

						</div>
						
					</div>
	
					<div id="LineInSignUpContainer"></div>

					<div id="TextInLineCreateYouAccContainer">Already have an account?</div>
					
					<div id="SignInFromHereContainer">
						<button id="GetMeToSignInScreenButton" onclick="ToSignInScreenClick()">Sign-In</button>
					</div>

				</div>
			
			</div>

		</div>

		<div id="countryList"></div>

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

		//Check if it came back from changeInfo at OTPScreen
		var countryFromBefore = 0;

		function CheckIfItWasSentFromOTPScren() {

				document.getElementById("UsernameInput").value = sessionStorage.getItem('username');
				document.getElementById("NameInput").value = sessionStorage.getItem('name');
				document.getElementById("LastNameInput").value = sessionStorage.getItem('lastname');
				document.getElementById("CountrySelect").value = sessionStorage.getItem('country');
				document.getElementById("EmailInput").value = sessionStorage.getItem('email');
				document.getElementById("PhoneInput").value = sessionStorage.getItem('phone');

				countryFromBefore = 1;
		}

		if(sessionStorage.getItem('checker') == "FromOTP") {

			CheckIfItWasSentFromOTPScren();
		}

		var nowOpenedPart = 1;
		var passwdClick = 0;
		var errorFromNext = [0, 0, 0];

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

		var mainPart = document.getElementById("MainPartThatAlwaysStaysContainer");
		var firstPart = document.getElementById("FirstPartofSignUpContainer");
		var secondPart = document.getElementById("SecondPartofSignUpContainer");
		var thirdPart = document.getElementById("ThirdPartofSignUpContainer");
		var lineInSignUpC = document.getElementById("LineInSignUpContainer");

		var usrNAlreadyExists = "";
		var emailAlreadyInUse = "";
		var phoneAlreadyInUse = "";

		function PreviousButtonClick() {

			var error = [];
			var okay = 0;

			if(nowOpenedPart == 1) {
				
				
			}
			else if(nowOpenedPart == 2) {
				
				ChangePreviousPartInSignUp(secondPart);

				nameInput.style.border = "1px solid rgb(162, 162, 195)";
				nameInput.addEventListener("focus", function () {
  				this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				nameInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				probNameC.innerHTML = "";

				lastNInput.style.border = "1px solid rgb(162, 162, 195)";
					lastNInput.addEventListener("focus", function () {
  				this.style.border = "2px solid rgb(162, 162, 195)";  
				});
					lastNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				probLastNC.innerHTML = "";

				countrySelect.style.border = "1px solid rgb(162, 162, 195)";
				countrySelect.addEventListener("focus", function () {
  				this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				countrySelect.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				probCountryC.innerHTML = "";
			}
			else if(nowOpenedPart == 3) {
				
				ChangePreviousPartInSignUp(thirdPart);

				emailInput.style.border = "1px solid rgb(162, 162, 195)";
				emailInput.addEventListener("focus", function () {
  				this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				emailInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				probEmailC.innerHTML = "";

				phoneNInput.style.border = "1px solid rgb(162, 162, 195)";
				phoneNInput.style.borderLeft = "none";
				phoneNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";
  					this.style.borderLeft = "none";
				});
				phoneNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)";
  					this.style.borderLeft = "none";
				});

				probPhoneC.innerHTML = "";
			}

			NowOpenedPartStyling();
		}

		var insertedOrNot = "";

		function NextButtonClick() {

			var error = [];
			var okay = 0;
			var h1 = 0;
			var h2 = 0;

			if(nowOpenedPart == 1) {
				
				var usernameInput = $("#UsernameInput").val();

				$.ajax({
           			
           			type: 'POST',
           			url: 'http://localhost/E/HelperFolders($.AJAX)/helperUsername.php',
            		data: 'username='+ usernameInput,
            		success: function(output) {
            	
            			usrNAlreadyExists = output;
            			h1 = 1;

        				if(h1) {
					
							error = FirstPartInputAlerts();
        				}
        				else {

        					alert("Problem with FirstInputAlerts()");
        				}

						for(var i = 0; i < error.length; i++) {
						
							if(!error[i]) {
				
								okay = 1;
							}
							else {

								okay = 0;
								break;
							}
						}

						if(okay) {

							ChangeNextPartInSignUp(firstPart);
						}

						NowOpenedPartStyling();
      				}
        		});
			}
			else if(nowOpenedPart == 2) {
				
				error = SecondPartInputAlerts();

				for(var i = 0; i < error.length; i++) {
					
					if(!error[i]) {
				
						okay = 1;
					}
					else {

						okay = 0;
						break;
					}
				}

				if(okay) {

					ChangeNextPartInSignUp(secondPart);
				}

				var startNumbC = document.getElementById("StartingNumberContainer");
				startNumbC.innerHTML = phoneStartNum;

				NowOpenedPartStyling();
			}
			else if(nowOpenedPart == 3) {

				var usernameInpt = userNInput.value;
				var passwordInpt = passwdInput.value;
				var nameInpt = nameInput.value;
				var lastNameInpt = lastNInput.value;
				var countryInpt = countrySelect.value;
				var emailInpt = emailInput.value;
				var phoneInpt = phoneStartNum + phoneNInput.value;

				$.ajax({
           			
           			type: 'POST',
           			url: 'http://localhost/E/HelperFolders($.AJAX)/helperEmailAndPhoneAndFinalizeInfoBeforeOTP.php',
            		data: {username: usernameInpt, password: passwordInpt, name: nameInpt, lastName: lastNameInpt, country: countryInpt, email: emailInpt, phone: phoneInpt},
            		success: function(output) {;

            			emailAlreadyInUse = output.substring(0, output.indexOf("#"));
            			
            			if(output.includes("$")) {

            				phoneAlreadyInUse = output.substring(output.indexOf("#") + 1,output.indexOf("$"));
            				insertedOrNot = output.substring(output.indexOf("$") + 1);
	            		}
	            		else {

	            			phoneAlreadyInUse = "";
            				insertedOrNot = output.substring(output.indexOf("#") + 1);
	            		}

            			h2 = 1;

        				if(h2) {

							error = ThirdPartInputAlerts();
        				}
        				else {

        					alert("Problem with ThirdInputAlerts()");
        				}

						for(var i = 0; i < error.length; i++) {
					
							if(!error[i]) {

								okay = 1;
							}
							else {

								okay = 0;
								break;
							}
						}

						if(okay) {

							ChangeNextPartInSignUp(thirdPart);
						}

						NowOpenedPartStyling();
					}
				});
			}
		}

		//1st Screen Of Sign Up
		var userNInput = document.getElementById("UsernameInput");
		var passwdInput = document.getElementById("PasswordInput");
		var rePasswdInput = document.getElementById("RePasswordInput");

		var probUserNC = document.getElementById("ProblemWithUsernameContainer");
		var probPasswdC = document.getElementById("ProblemWithPasswordContainer");
		var probRePasswdC = document.getElementById("ProblemWithRePasswordContainer");

		function FirstPartInputAlerts() {

			var newHeight = 0;
			var error = [1, 1, 1];
			var okay = 0;

			probUserNC.innerHTML = "";
			probPasswdC.innerHTML = "";
			probRePasswdC.innerHTML = "";

			if(userNInput.value == "") {

				probUserNC.innerHTML += " Enter a Username";

				userNInput.style.border = "1px solid red";
				userNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				userNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;

				var newDiv1 = document.createElement("div");
				newDiv1.innerHTML = "!";

				probUserNC.appendChild(newDiv1);
			}
			else {

				newHeight += CheckUsernameFromDataBase(error);
			}


			if(passwdInput.value == "") {

				probPasswdC.innerHTML += " Enter a password";

				passwdInput.style.border = "1px solid red";
				passwdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				passwdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;

				var newDiv2 = document.createElement("div");
				newDiv2.innerHTML = "!";

				probPasswdC.appendChild(newDiv2);
			}
			else {

				if(passwdInput.value.length < 6) {

					probPasswdC.innerHTML += " Password needs be, at least 6 characters";

					passwdInput.style.border = "1px solid red";
					passwdInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					passwdInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					newHeight += 20;

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

					error[1] = 0;
				}
			}

			if(rePasswdInput.value == "") {
				
				probRePasswdC.innerHTML += " Enter again the password";

				rePasswdInput.style.border = "1px solid red";
				rePasswdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				rePasswdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;

				var newDiv3 = document.createElement("div");
				newDiv3.innerHTML = "!";

				probRePasswdC.appendChild(newDiv3);
			}
			else if(passwdInput.value != rePasswdInput.value) {

				probRePasswdC.innerHTML += " The passwords don't match";

				rePasswdInput.style.border = "1px solid red";
				rePasswdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				rePasswdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;

				var newDiv3 = document.createElement("div");
				newDiv3.innerHTML = "!";

				probRePasswdC.appendChild(newDiv3);
			}
			else {

				rePasswdInput.style.border = "1px solid rgb(162, 162, 195)";
				rePasswdInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				rePasswdInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				error[2] = 0;
			}

			for(var i = 0; i < error.length; i++) {

				if(!error[i]) {

					okay = 1;
				}
				else {

					okay = 0;
				}
			}

			if(!okay) {

				lineInSignUpC.style.marginTop = "15px";
			}
			else {

				lineInSignUpC.style.marginTop = "40px";
			}

			mainPart.style.height = 219 + newHeight;

			return error;
		}

		//2nd Screen Of Sign Up
		var nameInput = document.getElementById("NameInput");
		var lastNInput = document.getElementById("LastNameInput");
		var countrySelect = document.getElementById("CountrySelect");

		var probNameC = document.getElementById("ProblemWithNameContainer");
		var probLastNC = document.getElementById("ProblemWithLastNameContainer");
		var probCountryC = document.getElementById("ProblemWithCountryContainer");

		function SecondPartInputAlerts() {

			var newHeight = 0;
			var error = [1, 1, 1];
			var allOkay = 0;

			probNameC.innerHTML = "";
			probLastNC.innerHTML = "";
			probCountryC.innerHTML = "";

			if(nameInput.value == "") {

				probNameC.innerHTML += " Enter your first name";

				nameInput.style.border = "1px solid red";
				nameInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				nameInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;

				var newDiv1 = document.createElement("div");
				newDiv1.innerHTML = "!";
				
				probNameC.appendChild(newDiv1);
			}
			else {

				nameInput.style.border = "1px solid rgb(162, 162, 195)";
				nameInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				nameInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				error[0] = 0;
			}

			if(lastNInput.value == "") {

				probLastNC.innerHTML += " Enter your last name";

				lastNInput.style.border = "1px solid red";
				lastNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				lastNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;

				var newDiv2 = document.createElement("div");
				newDiv2.innerHTML = "!";
				
				probLastNC.appendChild(newDiv2);
			}
			else {

				lastNInput.style.border = "1px solid rgb(162, 162, 195)";
				lastNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				lastNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				error[1] = 0;
			}

			if(countrySelect.value == "Select Your Country:") {
				
				probCountryC.innerHTML += " Choose a country";

				countrySelect.style.border = "1px solid red";
				countrySelect.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				countrySelect.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;
				
				var newDiv3 = document.createElement("div");
				newDiv3.innerHTML = "!";
				
				probCountryC.appendChild(newDiv3);
			}
			else {

				countrySelect.style.border = "1px solid rgb(162, 162, 195)";
				countrySelect.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				countrySelect.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				error[2] = 0;
			}

			for(var i = 0; i < error.length; i++) {
			
				if(!error[i]) {

					okay = 1
				}
				else {

					okay = 0;
				}
			}

			if(!okay) {
		
				lineInSignUpC.style.marginTop = "15px";
			}
			else {

				lineInSignUpC.style.marginTop = "40px";
			}

			mainPart.style.height = 219 + newHeight;

			return error;
		}

		var countriesObjectsList = [];
		var phoneStartNum = "";

		SetCountriesListFromJSON();

		function SetCountriesListFromJSON() {

			var selectCountries = document.getElementById("CountrySelect");
			var currOption = "";
			var c = 0;

			readTextFile("/E/JSONFiles/countries.json");

			for(var i = 0; i < countriesObjectsList.length; i++) {
    	
    			currOption = document.createElement("option");
    			if(i == 0) {
    				
    				if(c < 1) {
    					
    					if(countryFromBefore) {

    						currOption.innerHTML = sessionStorage.getItem('country');
    						FromOTPOnSelect();
    					}
    					else {
    					
    						currOption.innerHTML = "Select Your Country:";
    					}
    					currOption.hidden = true;
    					i--;
    				}
    				else {

    					currOption.innerHTML = countriesObjectsList[i].name;
    				}
    				c++;
    			}
    			else {

    				currOption.innerHTML = countriesObjectsList[i].name;
    			}
    			selectCountries.appendChild(currOption);
			}
		}

		function readTextFile(file) {
    		
    		var rawFile = new XMLHttpRequest();

    		rawFile.open("GET", file, false);
    		rawFile.onreadystatechange = function () {
        	
        		if(rawFile.readyState === 4) {

            		if(rawFile.status === 200 || rawFile.status == 0) {

                		var allText = rawFile.responseText;
                		countriesObjectsList = JSON.parse(allText);
            		}
        		}
    		}
    		
    		rawFile.send(null);
		}

		function OnSelect() {

			var selectCountries = document.getElementById("CountrySelect");
			var strUser = selectCountries.options[selectCountries.selectedIndex].text;

			for(var i = 0; i < countriesObjectsList.length; i++) {

				if(countriesObjectsList[i].name == strUser) {

					phoneStartNum = countriesObjectsList[i].phoneCode;
				}
			}
		}

		function FromOTPOnSelect() {

			var strUser = sessionStorage.getItem('country');

			for(var i = 0; i < countriesObjectsList.length; i++) {

				if(countriesObjectsList[i].name == strUser) {

					phoneStartNum = countriesObjectsList[i].phoneCode;
				}
			}
		}

		/*COUNTRIES BAR*/
		function CountriesCustomBar() {

			var x, i, j, selElmnt, a, b, c;
			/*look for any elements with the class "CountriesSelectContainer":*/
			x = document.getElementsByClassName("CountriesSelectContainer");

			for (i = 0; i < x.length; i++) {
  			
  				selElmnt = x[i].getElementsByTagName("select")[0];
  				/*for each element, create a new DIV that will act as the selected item:*/
  				a = document.createElement("DIV");
  				a.setAttribute("class", "select-selected");
  				a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  				x[i].appendChild(a);
  				/*for each element, create a new DIV that will contain the option list:*/
  				b = document.createElement("DIV");
  				b.setAttribute("class", "select-items select-hide");
  				for (j = 1; j < selElmnt.length; j++) {
    		
    				/*for each option in the original select element,
    				create a new DIV that will act as an option item:*/
    				c = document.createElement("DIV");
    				c.innerHTML = selElmnt.options[j].innerHTML;
    				c.addEventListener("click", function(e) {
        				
        				/*when an item is clicked, update the original select box,
        				and the selected item:*/
        				var y, i, k, s, h;
        				s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        				h = this.parentNode.previousSibling;
        				for (i = 0; i < s.length; i++) {
          				
          					if (s.options[i].innerHTML == this.innerHTML) {
            				
            					s.selectedIndex = i;
            					h.innerHTML = this.innerHTML;
            					y = this.parentNode.getElementsByClassName("same-as-selected");
            				
            					for (k = 0; k < y.length; k++) {
             
              						y[k].removeAttribute("class");
            					}
            
            					this.setAttribute("class", "same-as-selected");
            					break;
          					}
        				}
        				h.click();
    				});
    				b.appendChild(c);
  				}
  				x[i].appendChild(b);
  				a.addEventListener("click", function(e) {
      			
      				/*when the select box is clicked, close any other select boxes,
      				and open/close the current select box:*/
      				e.stopPropagation();
      				closeAllSelect(this);
      				this.nextSibling.classList.toggle("select-hide");
      				this.classList.toggle("select-arrow-active");
    			});
			}
		}

		function closeAllSelect(elmnt) {
  			
  			/*a function that will close all select boxes in the document,
  			except the current select box:*/
  			var x, y, i, arrNo = [];
  			x = document.getElementsByClassName("select-items");
  			y = document.getElementsByClassName("select-selected");
  			
  			for (i = 0; i < y.length; i++) {
    				
    				if (elmnt == y[i]) {

      					arrNo.push(i)
    				}
    				else {
      
      					y[i].classList.remove("select-arrow-active");
    				}
  			}
  			for (i = 0; i < x.length; i++) {
    				
    			if (arrNo.indexOf(i)) {
      				
      				x[i].classList.add("select-hide");
    			}
  			}
		}
		document.addEventListener("click", closeAllSelect);
		/**/

		//3rd Screen Of Sign Up
		var emailInput = document.getElementById("EmailInput");
		var phoneNInput = document.getElementById("PhoneInput");
		var createMyAccBtn = document.getElementById("CreateMyAccButton");
		var termsAndCondsL = document.getElementById("TermsAndCondsLink");

		var probEmailC = document.getElementById("ProblemWithEmailContainer");
		var probPhoneC = document.getElementById("ProblemWithPhoneContainer");

		function ThirdPartInputAlerts() {

			var newHeight = 0;
			var error = [1, 1];
			var okay = 0;

			probEmailC.innerHTML = "";
			probPhoneC.innerHTML = "";

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
			}
			else {

				newHeight += CheckEmailFromDataBase(error);
			}

			if(phoneNInput.value == "") {

				probPhoneC.innerHTML += " Enter your phone number";

				phoneNInput.style.border = "1px solid red";
				phoneNInput.style.borderLeft = "none";
				phoneNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red";
  					this.style.borderLeft = "none";
				});
				phoneNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red";
  					this.style.borderLeft = "none";
				});

				newHeight += 18;

				var newDiv2 = document.createElement("div");
				newDiv2.innerHTML = "!";
				
				probPhoneC.appendChild(newDiv2);
			}
			else {

				newHeight += CheckPhoneFromDataBase(error);
			}

			for(var i = 0; i < error.length; i++) {
			
				if(!error[i]) {

					okay = 1
				}
				else {

					okay = 0;
				}
			}

			if(!okay) {
		
				lineInSignUpC.style.marginTop = "15px";
			}
			else {

				lineInSignUpC.style.marginTop = "40px";
			}

			mainPart.style.height = 253 + newHeight;

			return error;
		}

		var phoneNum = phoneNInput.value;

		setInputFilter(phoneNInput, function(phoneNum) {
 	 				
 			return /^\d*$/.test(phoneNum);
 			//return /^-?\d*[+|-]?\d*$/.test(phoneNum);
		});

		function validateEmail(email) {
  				
  			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  			return re.test(email);
		}

		function setInputFilter(textbox, inputFilter) {
  			
  			["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
   		 		
   		 			textbox.addEventListener(event, function() {
      		
      				if (inputFilter(this.value)) {
        	
        				this.oldValue = this.value;
        				this.oldSelectionStart = this.selectionStart;
       					this.oldSelectionEnd = this.selectionEnd;
      				}
      				else if (this.hasOwnProperty("oldValue")) {
        		
        				this.value = this.oldValue;
        				this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      				}
    			});
  			});
		}

		//GENERAL CHANGES
		var prevSituation = "";

		NowOpenedPartStyling();

		function ToSignInScreenClick() {

			document.location.href = "http://localhost/E/Screens/SignInScreen.php";
		}

		function ChangeNextPartInSignUp(partNowOpened) {

			if(partNowOpened.id == "FirstPartofSignUpContainer") {
			
				firstPart.style.transform = "translateY(-220px)";
				secondPart.style.transform = "translateX(0px)";
			}
			else if(partNowOpened.id == "SecondPartofSignUpContainer") {
			
				secondPart.style.transform = "translateY(-220px)";
				thirdPart.style.transform = "translateX(0px)";
				mainPart.style.height = 253;
			}
			else if(partNowOpened.id == "ThirdPartofSignUpContainer") {

				nowOpenedPart -= 1;
				KeepTheInfoForTheOTPCheck();
				//document.location.href = "http://localhost/E/Screens/MainPageScreen.php";
			}

			nowOpenedPart += 1;
			prevSituation = "Next";
		}

		function ChangePreviousPartInSignUp(partNowOpened) {

			if(partNowOpened.id == "SecondPartofSignUpContainer") {

				firstPart.style.transform = "translateY(0px)";
				secondPart.style.transform = "translateX(359px)";
			}
			else if(partNowOpened.id == "ThirdPartofSignUpContainer") {
			
				secondPart.style.transform = "translateY(0px)";
				thirdPart.style.transform = "translateX(359px)";
				mainPart.style.height = "229px";
			}

			nowOpenedPart -= 1;
			prevSituation = "Previous";
		}

		function NowOpenedPartStyling() {

			var prvBtn = document.getElementById("PreviousButton");
			var nextBtn = document.getElementById("NextButton");
			var imgForSteps = document.getElementById("NavigationStepsImg");

			if(nowOpenedPart == 1) {
				
				prvBtn.disabled = true;
				prvBtn.addEventListener("focus", function () {
  					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)";
				});
				prvBtn.addEventListener("focusout", function () {
  					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)"; 
				});
				prvBtn.onmousemove = function () {
					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)";
				}
				prvBtn.onmouseout = function () {
					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)";
				}
				prvBtn.style.opacity = "0.4";
				prvBtn.style.cursor = "default";
				prvBtn.tabIndex = -1;
				nextBtn.addEventListener("focus", function () {
  					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				});
				nextBtn.addEventListener("focusout", function () {
  					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)"; 
				});
				nextBtn.onmousemove = function () {
					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				}
				nextBtn.onmouseout = function () {
					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)";
				}
				nextBtn.style.opacity = "1";
				nextBtn.style.cursor = "pointer";
				nextBtn.tabIndex = 2;
				userNInput.tabIndex = 1;
				setTimeout(function () {

					userNInput.focus();
				}, 100);
				passwdInput.tabIndex = 1;
				rePasswdInput.tabIndex = 1;
				nameInput.tabIndex = -1;
				lastNInput.tabIndex = -1;
				countrySelect.tabIndex = -1;
				emailInput.tabIndex = -1;
				phoneNInput.tabIndex = -1;
				createMyAccBtn.tabIndex = -1;
				termsAndCondsL.tabIndex = -1;

				imgForSteps.style.content = "url('/SitePics/1stBarIconSignUpAfter.png')";
			}
			else if(nowOpenedPart == 2) {
				
				prvBtn.disabled = false;
				prvBtn.addEventListener("focus", function () {
  					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				});
				prvBtn.addEventListener("focusout", function () {
  					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)"; 
				});
				prvBtn.onmousemove = function () {
					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				}
				prvBtn.onmouseout = function () {
					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)";
				}
				prvBtn.style.opacity = "1";
				prvBtn.style.cursor = "pointer";
				prvBtn.tabIndex = 1;
				nextBtn.disabled = false;
				nextBtn.addEventListener("focus", function () {
  					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				});
				nextBtn.addEventListener("focusout", function () {
  					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)"; 
				});
				nextBtn.onmousemove = function () {
					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				}
				nextBtn.onmouseout = function () {
					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)";
				}
				nextBtn.style.opacity = "1";
				nextBtn.style.cursor = "pointer";
				nextBtn.tabIndex = 2;
				userNInput.tabIndex = -1;
				passwdInput.tabIndex = -1;
				rePasswdInput.tabIndex = -1;
				nameInput.tabIndex = 1;
				setTimeout(function () {

					nameInput.focus();
				}, 100);
				lastNInput.tabIndex = 1;
				countrySelect.tabIndex = 1;
				emailInput.tabIndex = -1;
				phoneNInput.tabIndex = -1;
				createMyAccBtn.tabIndex = -1;
				termsAndCondsL.tabIndex = -1;

				imgForSteps.style.content = "url('/SitePics/2ndBarIconSignUpAfter.png')";
			}
			else if(nowOpenedPart == 3) {
				
				prvBtn.addEventListener("focus", function () {
  					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				});
				prvBtn.addEventListener("focusout", function () {
  					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)"; 
				});
				prvBtn.onmousemove = function () {
					this.style.color = "rgb(177, 177, 205)";
					this.style.background = "rgb(131, 131, 175)";
				}
				prvBtn.onmouseout = function () {
					this.style.color = "rgb(208, 208, 225)";
					this.style.background = "rgb(162, 162, 195)";
				}
				prvBtn.style.opacity = "1";
				prvBtn.style.cursor = "pointer";
				prvBtn.tabIndex = 0;
				nextBtn.disabled = true;
				nextBtn.addEventListener("focus", function () {
  					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)";
				});
				nextBtn.addEventListener("focusout", function () {
  					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)"; 
				});
				nextBtn.onmousemove = function () {
					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)";
				}
				nextBtn.onmouseout = function () {
					this.style.color = "rgb(236, 236, 243)";
					this.style.background = "rgb(218, 218, 231)";
				}
				nextBtn.style.background = "rgb(162, 162, 195)";
				nextBtn.style.opacity = "0.4";
				nextBtn.style.cursor = "default";
				nextBtn.tabIndex = -1;
				userNInput.tabIndex = -1;
				passwdInput.tabIndex = -1;
				rePasswdInput.tabIndex = -1;
				nameInput.tabIndex = -1;
				lastNInput.tabIndex = -1;
				countrySelect.tabIndex = -1;
				emailInput.tabIndex = 0;
				setTimeout(function () {
					
					emailInput.focus();
				}, 100);
				phoneNInput.tabIndex = 0;
				createMyAccBtn.tabIndex = 0;
				termsAndCondsL.tabIndex = 0;

				imgForSteps.style.content = "url('/SitePics/3rdBarIconSignUpAfter.png')";
			}
		}

	</script>

	<!--<script src="http://localhost/E/JSFiled/scriptForCountries.js"></script>-->

	<script>
		
		function CheckUsernameFromDataBase(error) {

			var newHeight = 0;

			if(usrNAlreadyExists != "") {
					
					probUserNC.innerHTML += usrNAlreadyExists;

					userNInput.style.border = "1px solid red";
					userNInput.addEventListener("focus", function () {
  						this.style.border = "2px solid red"; 
					});
					userNInput.addEventListener("focusout", function () {
  						this.style.border = "1px solid red"; 
					});

					newHeight += 20;

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

				error[0] = 0;
			}

			return newHeight;
		}

		function CheckEmailFromDataBase(error) {

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
			}
			else if(emailAlreadyInUse != "") {

				probEmailC.innerHTML += emailAlreadyInUse;

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
			}
			else {

				emailInput.style.border = "1px solid rgb(162, 162, 195)";
				emailInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";  
				});
				emailInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)"; 
				});

				error[0] = 0;
			}

			return newHeight;
		}

		function CheckPhoneFromDataBase(error) {

			var newHeight = 0;

			if(phoneAlreadyInUse != "") {

				probPhoneC.innerHTML += phoneAlreadyInUse;

				phoneNInput.style.border = "1px solid red";
				phoneNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid red"; 
				});
				phoneNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid red"; 
				});

				newHeight += 20;

				var newDiv1 = document.createElement("div");
				newDiv1.innerHTML = "!";
				
				probPhoneC.appendChild(newDiv1);
			}
			else {

				phoneNInput.style.border = "1px solid rgb(162, 162, 195)";
				phoneNInput.style.borderLeft = "none";
				phoneNInput.addEventListener("focus", function () {
  					this.style.border = "2px solid rgb(162, 162, 195)";
  					this.style.borderLeft = "none";
				});
				phoneNInput.addEventListener("focusout", function () {
  					this.style.border = "1px solid rgb(162, 162, 195)";
  					this.style.borderLeft = "none";
				});

				error[1] = 0;
			}

			return newHeight;
		}

		function KeepTheInfoForTheOTPCheck() {

			console.log(userNInput.value);
			console.log(passwdInput.value);
			console.log(rePasswdInput.value);
			console.log(nameInput.value);
			console.log(lastNInput.value);
			console.log(countrySelect.value);
			console.log(emailInput.value);
			console.log(phoneStartNum + phoneNInput.value);

			alert(insertedOrNot);

			if(insertedOrNot.includes("Not Inserted")) {

			}
			else if(insertedOrNot.includes("Inserted")) {

				//window.open('mailto:bvb4ever1908@outlook.com');
				sessionStorage.clear();
				sessionStorage.setItem('situation', 'FromCreateAnAccount');
				sessionStorage.setItem('username', userNInput.value);
				sessionStorage.setItem('name', nameInput.value);
				sessionStorage.setItem('lastname', lastNInput.value);
				sessionStorage.setItem('country', countrySelect.value);
				sessionStorage.setItem('email', emailInput.value);
				sessionStorage.setItem('phone', phoneNInput.value);

				document.location.href = "http://localhost/E/Screens/OTPScreen.php";
			}
		}

	</script>

</body>
</html>