<!DOCTYPE php>
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
		/*background: url("/SitePics/herbaBody.jpg");
		background-position: center;
		background-position: 0 1vw;
		background-size: 20% 30%;*/
		background: black;
		background-attachment: fixed;
 		background-size: cover;
		max-width: 100%;
		margin: 0;
		padding: 0; 
	}

/*HEADER MOVING LOGO*/
	#MenuLogoContainer {
		position: relative;
		z-index: 21;
		background: transparent;
		margin-top: 0px; margin-left: 10%;
	}

	#MenuLogo1 {
		float: left;
		width: 105px; height: 105px;
		animation: RoundMenuLogoRight 10s linear infinite;
		margin-top: 4px;
	}

	#MenuLogo2 {
		float: left;
		width: 88px; height: 88px;
		animation: RoundMenuLogoLeft 10s linear infinite;
		margin-left: -97px; margin-top: 13px;
	}

	#MenuLogo3 {
		float: left;
		width: 71px; height: 71px;
		animation: RoundMenuLogoRight 10s linear infinite;
		margin-left: -88px; margin-top: 21.5px;
	}

	#MenuLogo4 {
		float: left;
		width: 54px; height: 54px;
		animation: RoundMenuLogoLeft 10s linear infinite;
		margin-left: -79.5px; margin-top: 30.5px;
	}
/**/

/*MAIN HEADER CONTAINER*/
	#HeadTitle {
		position: relative;
		z-index: 14;
		width: 100%; height: 112px;
		background: white;
		box-shadow: 0 0 0.8vh grey;
		padding: 0.01px;
	}

	#MenuContainer {
		float: left;
		width: 30%; height: 90%;
		margin-left: 18%;
		margin-top: 11.2px;
	}

	#HomeButton {
		float: left;
		width: 100px; height: 90%;
		background: transparent;
		display: flex;
  		align-items: center;
  		justify-content: center;
  		outline: none;
  		border: none;
  		border-bottom: 5px solid transparent;
  		margin-right: 1vw; margin-top: 10px;
	}

	#HomeButton:hover {
		border-bottom: 3px solid rgb(0, 46, 77);
	}

	#HomeButton p {
		color: rgb(136, 170, 239);
		font-size: 27px;
		font-family: Architects Daughter;
		margin-top: 18px;
		transform: translateY(0);
		transition: transform 0.5s;
	}

	#HomeButton:hover p {
		transform: translateY(5px);
	}

	#StoreButton {
		float: left;
		width: 100px; height: 80%;
		background: transparent;
		display: flex;
  		align-items: center;
  		justify-content: center;
  		outline: none;
  		border: none; 
  		border-bottom: 5px solid transparent;
  		margin-top: 20px;
	}

	#StoreButton:hover {
		border-bottom: 3px solid rgb(0, 46, 77);
	}

	#StoreButton p {
		color: rgb(0, 46, 77);
		font-size: 25px;
		font-family: Architects Daughter;
		margin-top: 18px;
		transform: translateY(0);
		transition: transform 0.5s;
	}

	#StoreButton:hover p {
		transform: translateY(5px);
	}

	#WannaHearMusicContainer {
		position: absolute;
		height: 100%;
		margin-left: 70%;
	}

	#AudioPlayContainer {
		float: left;
		position: relative;
		width: 25px; height: 23px;
		color: rgb(136, 170, 239);
		background: black;
		border-radius: 3vw 0 0 3vw;
		left: 25px;
		margin-top: 57px;
		padding: 0 0 0 7px;
		transition: left 0.4s;
	}

	#AudioPlayImg {
		width: 80%; height: 70%;
		content: url("/SitePics/pauseLightBlueButton.png");
		margin: 3px 0 0 -2px;
	}

	#WantMusicButton {
		float: left;
		position: relative;
		cursor: pointer;
		background: black;
		outline: none;
		border-radius: 3vw;
		border: 1px solid rgb(136, 170, 239);
		margin-top: 43px;
		padding: 0 6px 0 6px;
	}

	#WantMusicPar {
		color: rgb(136, 170, 239);
		font-size: 15px;
		font-family: Architects Daughter;
		font-weight: bold;
	}
/**/

/*FULL SHOWROOM CONTAINER*/
	#MainContainer { 
		width: 100%;
		background: rgb(240, 240, 245);
		/*background: rgb(40, 41, 35);*/
		padding-top: 100px; padding-bottom: 30px;
	}

	/*UP CONTAINER*/
	#UpContainer {
		position: absolute;
		z-index: 25;
		width: 100%; height: 100px;
		margin-top: -100px;
		padding: 0.1px;
		transition: margin 0.3s;
	}

		/*UP CONTAINER OPEN WHEN SCREEN IS SMALL*/
	#OpenedMenuContainer {
		position: sticky;
		top: 0;
	}

	#OpenMenuBtnsContainer {
		position: absolute;
		z-index: 21;
		width: 100%; height: 100px;
		opacity: 0;
		min-width: 230px;
		transition: opacity 0.2s, width 0.4s, transform 0.25s;
	}

	#OpenCatgrsBtn {
		display: block;
		position: sticky;
		top: 0;
		width: 36px; height: 40px;
		background: transparent;
		cursor: pointer;
		outline: none;
		border-radius: 7px;
		border: none;
		margin: auto; margin-top: 30px;
	}

	#OpenCatgrsBtn img {
		width: 40.5px; height: 45px;
		content: "url('/SitePics/MenuIconDarkBlue.png')";
		margin: -5.5px 0 0 -9px;
	}
		
	#LeftMenuContainer {
		position: absolute;
		width: 0;
		opacity: 0;
		padding-left: 0.9%; padding-right: 0.9%;
		transform: translate3d(-100%, 0, 0);
		min-width: 230px;
		box-shadow: 0 0.7vw 01vw -0.9vw grey;
		transition: transform 0.4s;
	}

	#MenuButtonContainer {
		width: 100%; height: 90px;
		background: rgb(228, 228, 231);
		border: 2px solid rgb(241, 241, 243); border-bottom: none;
		margin-top: 5px; margin-bottom: 15px;
		box-shadow: 0 0.7vw 0.6vw -0.9vw grey;
	}

	#SidePicksMenuContainer {
		position: sticky;
		top: 0;
	}
		
			/*SPECIAL CATEGORY MENU CONTAINER*/
	#SpecialCategoriesMenuContainer {
		width: 100%;
		opacity: 1;
		padding-top: 5px; padding-bottom: 10px;
	}

	#SpecialCategoriesMenuContainer h1 {
		width: 94%;
		color: rgb(0, 61, 102);
		font-size: 20px;
		font-family: Arbutus;
		cursor: crosshair;
		margin: auto; margin-left: 9px; margin-bottom: 10px;
	}

	#SpecialCategoriesMenuContainer h1:hover {
		color: rgb(255, 140, 26);
	}

	.SpecCatgrMenuButton {
		width: 75%;
		display: block;
  		position: relative;
		background: transparent;
  		cursor: pointer;
		outline: none;
		border-radius: 0 40px 40px 0;
		border: none;
		padding: 0;
		margin-left: 12px; margin-bottom: 8px;
	}

	.SpecCatgrMenuPar {
		color: rgb(0, 92, 153);
		float: left;
		font-size: 18px;
		font-family: Archivo;
		margin: 0;
		border-radius: 0 0 50% 50%;
	}

	.SpecCatgrMenuPar:hover {
		color: rgb(0, 61, 102);
	}

	.SpecCatgrMenuButton:hover .ImgArrow {
		content: url("/SitePics/orangeArrow.png");
		transform: translateX(5px) rotateZ(0deg);
	}
			/**/

			/*MAIN CATEGORY CONTAINER*/
	#MainCategoriesMenuContainer {
		width: 100%;
		opacity: 0;
		/*color: rgb(0, 92, 153);*/
		color: rgb(108, 158, 196);
		font-family: Flamenco;
		box-shadow: 0 0.7vw 0.6vw -0.9vw grey;
		margin-top: 1vw;
		padding-top: 10px; padding-bottom: 10px;
		transition: 0.3s;
	}

	#MainCategoriesMenuContainer h1 {
		width: 94%;
		color: rgb(0, 61, 102);
		font-size: 18px;
		font-family: Arbutus;
		cursor: crosshair;
		text-align: center;
		margin: auto; margin-left: 9px; margin-bottom: 15px;
	}

	#MainCategoriesMenuContainer h1:hover {
		color: rgb(255, 140, 26);
	}

	#NoItemFoundMenuContainer {
		text-align: center;
		font-size: 20px;
	}
			/**/
		/**/

		/*LEFT CONTAINER STARTING ONE*/
	#LeftDownContainer {
		position: absolute;
		z-index: 19;
		float: left;
		width: 0;
		background: transparent;
		opacity: 0;
		padding-left: 0.9%; padding-right: 0.9%;
	}

	#SidePicksContainer {
		position: sticky;
		top: 1vw;
	}

			/*SPECIAL CATEGORY MENU CONTAINER*/
	#SpecialCategoriesContainer {
		width: 100%;
		box-shadow: 0 0.7vw 0.6vw -0.9vw grey;
		padding-top: 5px; padding-bottom: 10px;
	}

	#SpecialCategoriesContainer h1 {
		width: 94%;
		color: rgb(0, 61, 102);
		font-size: 20px;
		font-family: Arbutus;
		cursor: crosshair;
		margin: auto; margin-left: 9px; margin-bottom: 10px;
	}

	#SpecialCategoriesContainer h1:hover {
		color: rgb(255, 140, 26);
	}

	.SpecCatgrButton {
		width: 75%;
		display: block;
  		position: relative;
		background: transparent;
  		cursor: pointer;
		outline: none;
		border-radius: 0 40px 40px 0;
		border: none;
		padding: 0;
		margin-left: 12px; margin-bottom: 8px;
	}

	.SpecCatgrPar {
		color: rgb(0, 92, 153);
		float: left;
		font-size: 18px;
		font-family: Archivo;
		margin: 0;
		border-radius: 0 0 50% 50%;
	}

	.SpecCatgrPar:hover {
		color: rgb(0, 61, 102);
	}

	.ImgArrow {
		float: right;
		width: 18px; height: 18px;
		content: url("/SitePics/seaBlueArrow.png");
		border-radius: 0 50% 50% 0;
		transform: rotateZ(180deg);
		margin-top: 3px; margin-right: 0.2vw;
		transition: transform 0.4s;
	}

	.SpecCatgrButton:hover .ImgArrow {
		content: url("/SitePics/orangeArrow.png");
		transform: translateX(5px) rotateZ(0deg);
	}
			/**/

			/*MAIN CATEGORY MENU CONTAINER*/
	#MainCategoriesContainer {
		width: 100%;
		opacity: 0;
		/*color: rgb(0, 92, 153);*/
		color: rgb(108, 158, 196);
		font-family: Flamenco;
		box-shadow: 0 0.7vw 0.6vw -0.9vw grey;
		margin-top: 1vw;
		padding-top: 10px; padding-bottom: 10px;
		transition: 0.3s;
	}

	#MainCategoriesContainer h1 {
		width: 94%;
		color: rgb(0, 61, 102);
		font-size: 18px;
		font-family: Arbutus;
		cursor: crosshair;
		text-align: center;
		margin: auto; margin-left: 9px; margin-bottom: 15px;
	}

	#MainCategoriesContainer h1:hover {
		color: rgb(255, 140, 26);
	}

	#NoItemFoundMenuContainer {
		text-align: center;
		font-size: 20px;
	}

				/*CHECKBOXES*/
	.Container {
		display: table;
  		position: relative;
 	 	cursor: pointer;
  		font-size: 18px;
  		border-radius: 50% 0 0 50%;
  		padding-left: 25px;
  		margin-bottom: 8px; margin-left: 10px;
   		-webkit-use8-select: none;
  		-moz-user-select: none;
  		-ms-user-select: none;
  		user-select: none;
	}

	.ContainerPar {
		display: table;
		word-break: break-all;
		border: 1px solid red;
	}

				/* Hide the browser's default checkbox */
	.Container input {
  		position: absolute;
  		opacity: 0;
  		cursor: pointer;
  		height: 0;
  		width: 0;
	}

				/* Create a custom checkbox */
	.Checkmark {
  		position: absolute;
  		top: -3px;
  		left: -1.5px;
  		height: 18px;
  		width: 18px;
  		background-color: transparent;
  		border-radius: 50%;
  		border: 1px solid rgb(0, 92, 153);
  		margin-top: 4px;
	}

	.Container:hover input ~ .Checkmark {
		background-color: rgba(0, 46, 77, 0.5);
	}

				/* Create the checkmark/indicator (hidden when not checked) */
	.Checkmark:after {
  		content: "";
  		position: absolute;
  		display: none;
	}

				/* Show the checkmark when checked */
	.Container input:checked ~ .Checkmark:after {
	 	display: block;
	 	background: rgb(0, 92, 153);
	 	border: solid rgb(0, 92, 153);
	}

				/* Style the checkmark/indicator */
	.Container .Checkmark:after {
  		left: 3.5px;
  		top: 3.75px;
  		width: 6px;
  		height: 6px;
  		border-radius: 50%;
	}
				/**/
			/**/
		/**/

		/*RIGHT CONTAINER*/
	#RightDownContainer {
		position: relative;
		z-index: 20;
		display: inline-block;
		float: right;
		width: 100%;
		height: auto;
		background: white;
		overflow: hidden;
		box-shadow: -0.7vw 0 0.6vw -0.9vw grey;
		border-radius: 1vw 0 0 0;
	}

			/*FIRST ELEMENT*/
	#CategoryContainer {
		float: left;
		width: 60%; height: 100px;
		overflow: hidden;
	}

	#ParHeaderOfCategrC {
		float: left;
		position: relative;
		display: block;
		width: auto;
		color: rgb(0, 61, 102);
		font-size: 30px;
		font-family:  Advent Pro;
		font-weight: bold;
		letter-spacing: -0.5px;
		top: 21%;
		margin: 0; margin-left: 1vw;
		padding: 10px 8px 10px 10px;
		transition: transform 0.25s;
	}

	#DashC {
		float: left;
		position: relative;
		display: block;
		width: auto;
		color: rgb(205, 222, 234);
		font-size: 22px;
		font-family: Advent Pro;
		font-weight: bold;
		letter-spacing: -1px;
		top: 27%;
		margin: 0;
		padding: 10px 1px 10px 0;
		transition: opacity 0.3s;
	}

	#AllItemsC {
		float: left;
		position: relative;
		display: block;
		width: auto;
		color: rgb(205, 222, 234);
		font-size: 26px;
		font-family: Advent Pro;
		letter-spacing: 1px;
		top: 28%;
		margin: 0;
		padding: 5px 5px 5px 2px;
		transition: opacity 0.3s;
	}
			/**/

			/*SECOND ELEMENT*/
	#SortByContainer {
		float: right;
		width: 40%; height: 100px;
		overflow: hidden;
	}

	/*#SortByGeneralPar {
		float: left;
		position: relative;
		color: rgb(18, 58, 84);
		top: 30%;
		text-align: left;
		font-size: 16px;
		font-family: Archivo;
		letter-spacing: 1px;
		border: 1px solid red;
		margin-left: 5vw;
	}*/

	#SortByPlaceGeneralButton {
		float: right;
		position: relative;
		display: block;
		overflow: hidden;
		width: 150px; height: 35px;
		background: transparent;
		top: 30%;
		outline: none;
		border-radius: 0.2vw;
		border: none;
		margin-right: 19%;
		padding: 0;
		transform: translateY(-100px);
		transition: transform 0.4s, height 0.1s;
	}

	#SortByPlaceGeneralButton:hover {
		background: rgba(0, 0, 0, 0.1);
	}

	.SortByButton {
		position: relative;
		cursor: pointer;
		width: 100%; height: 33px;
		background: transparent;
		outline: none;
		border: none;
		margin: 0;
		padding: 0;
	}

	.SortByPar {
		float: left;
		position: relative;
		width: 150px; height: 100%;
		color: rgb(18, 58, 84);
		line-height: 34px;
		text-align: left;
		font-size: 18px;
		font-family: Archivo;
		letter-spacing: 1px;
		margin: 0;
		padding-left: 8px;
	}
	
	#SortBy1stImgArrow {
		float: right;
		position: relative;
		content: url("/SitePics/darkblueArrowSortBy.png");
		width: 18px; height: 12px;
		margin-right: 8%; margin-top: 8%;
	}
			/**/

			/*THIRD ELEMENT*/
	#ExtraThingsContainer {
		display: inline-block;
		height: 40px;
		overflow: hidden;
		margin-left: 1.7vw;
	}

	#ButtonsContainer {
		height: 40px;
		padding: 0 20px 0 0;
		transform: translateY(100px);
		transition: transform 0.2s;
	}

	.ExtraInSCButton {
		float: left;
		position: relative;
		display: block;
		cursor: pointer;
		background: transparent;
		color: rgb(136, 170, 239);
		font-size: 20px;
		font-family: Advent Pro;
		letter-spacing: 1px;
		top: 6%;
		outline: none;
		border: none;
		margin-left: 20px;
		padding: 0;
	}

	.ExtraInSCButton:active {
		color: rgb(0, 61, 102);
	}
			/**/

			/*FOURTH ELEMENT - SHOWROOM WRAPPER*/
	#ShowRoomContainer {
		width: 98%;
		box-shadow: 0 -0.7vh 0.8vh -0.9vh grey;
		margin: auto;
		padding: 1vw;
	}

	#ShowRoomWrapperContainer {
		width: 100%;
		display: inline-block;
	}
			/**/

		/**/
	/**/
/**/

/*ITEMS CONTAINERS*/

	/*COMPANY'S CONTAINER*/
	.CompanyBut {
		float: center;
		position: relative;
		width: 98%; height: 300px;
		background: transparent;
		outline: none;
		cursor: pointer;
		border: 2px solid rgb(232, 232, 232);
		border-radius: 2px 2px 2px 2px;
		margin-top: 10px; margin-left: 1%;
		padding: 2px;
		box-shadow: 150px 0 0 0 transparent;
		transition: border 2.0s, box-shadow 0.3s;
	}

	.CompanyBackgroundC {
		position: relative;
		width: 100%; height: 85%;
		background: orange;
		border-radius: 0.2vw 0.2vw 0 0;
		padding: 0.007px;
	}

	.CompanyMapC {
		position: relative;
		width: 50%; height: 80%;
		background: white;
		border: 1px solid black;
		margin-top: 2%; margin-left: 15%;
	}

	.CompanyDownInfoC {
		width: 100.4%; height: 15%;
		color: rgb(122, 122, 82);
		background: transparent;
		font-size: 29px;
		transform: translate3d(-0.2%, 0, 0);
		border-top: 2px solid rgb(107, 107, 71);
		padding-bottom: 40px;
	}
	/**/

	/*LUCKY PRODUCT'S CONTAINER*/
	.LuckyProdBut {
		float: center;
		position: relative;
		width: 98%; height: 300px;
		background: transparent;
		outline: none;
		cursor: pointer;
		border: 2px solid rgb(232, 232, 232);
		border-radius: 2px 2px 2px 2px;
		margin-top: 10px; margin-left: 1%;
		padding: 2px;
	}

	.LuckyProdBackgroundC {
		position: relative;
		width: 100%; height: 85%;
		background: green;
		border-radius: 0.2vw 0.2vw 0 0;
		padding: 0.007px;
	}

	.LuckyProdMapC {
		position: relative;
		width: 50%; height: 80%;
		background: white;
		border: 1px solid black;
		margin-top: 2%; margin-left: 15%;
	}

	.LuckyProdDownInfoC {
		width: 100.4%; height: 15%;
		color: rgb(122, 122, 82);
		background: transparent;
		font-size: 29px;
		transform: translate3d(-0.2%, 0, 0);
		border-top: 2px solid rgb(107, 107, 71);
		padding-bottom: 40px;
	}
	/**/
	
	/*BANK'S CONTAINER*/
	.BankBut {
		float: center;
		position: relative;
		width: 98%; height: 300px;
		background: transparent;
		outline: none;
		cursor: pointer;
		border: 2px solid rgb(232, 232, 232);
		border-radius: 2px 2px 2px 2px;
		margin-top: 10px; margin-left: 1%;
		padding: 2px;
	}

	.BankBackgroundC {
		position: relative;
		width: 100%; height: 85%;
		background: darkblue;
		border-radius: 0.2vw 0.2vw 0 0;
		padding: 0.007px;
	}

	.BankMapC {
		position: relative;
		width: 50%; height: 80%;
		background: white;
		border: 1px solid black;
		margin-top: 2%; margin-left: 15%;
	}

	.BankDownInfoC {
		width: 100.4%; height: 15%;
		color: rgb(122, 122, 82);
		background: transparent;
		font-size: 29px;
		transform: translate3d(-0.2%, 0, 0);
		border-top: 2px solid rgb(107, 107, 71);
		padding-bottom: 40px;
	}
	/**/

	/*CHARITY'S CONTAINER*/
	.CharityOrganBut {
		float: center;
		position: relative;
		width: 98%; height: 300px;
		background: transparent;
		outline: none;
		cursor: pointer;
		border: 2px solid rgb(232, 232, 232);
		border-radius: 2px 2px 2px 2px;
		margin-top: 10px; margin-left: 1%;
		padding: 2px;
	}

	.CharityOrganBackgroundC {
		position: relative;
		width: 100%; height: 85%;
		background: yellow;
		border-radius: 0.2vw 0.2vw 0 0;
		padding: 0.007px;
	}

	.CharityOrganMapC {
		position: relative;
		width: 50%; height: 80%;
		background: white;
		border: 1px solid black;
		margin-top: 2%; margin-left: 15%;
	}

	.CharityOrganDownInfoC {
		width: 100.4%; height: 15%;
		color: rgb(122, 122, 82);
		background: transparent;
		font-size: 29px;
		transform: translate3d(-0.2%, 0, 0);
		border-top: 2px solid rgb(107, 107, 71);
		padding-bottom: 40px;
	}
	/**/

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

	<title>E+Web</title>

</head>
<body>

	<div id="MenuLogoContainer">

		<img id="MenuLogo1" src="/SitePics/DarkBlueLogo1.png">
				
		<img id="MenuLogo2" src="/SitePics/DarkBlueLogo1.png">

		<img id="MenuLogo3" src="/SitePics/DarkBlueLogo1.png">

		<img id="MenuLogo4" src="/SitePics/DarkBlueLogo1.png">

	</div>


	<div id="HeadTitle">

		<div id="MenuContainer">

			<button id="HomeButton" onclick="HomeClick()">
				<p>Home</p>
			</button>

			<button id="StoreButton">
				<p>Store</p>
			</button>

		</div>

		<div id="WannaHearMusicContainer">
			
			<div id="AudioPlayContainer">
				<img id="AudioPlayImg">
			</div>

			<button id="WantMusicButton">
				<p id="WantMusicPar">Want music? Hover here</p>
			</button>

		</div>

	</div>

	<div id="MainContainer">
		
		<div id="UpContainer">
			
			<div id="OpenedMenuContainer">
				
				<div id="OpenMenuBtnsContainer">
			
					<button id="OpenCatgrsBtn">
						<img id="OpenCatgrsImg">
					</button>
				
				</div>

				<div id="LeftMenuContainer">
					
					<div id="MenuButtonContainer"></div>

					<div id="SidePicksMenuContainer">

						<div id="SpecialCategoriesMenuContainer">
							<h1>ACTIONS</h1>
						</div>
	
						<div id="MainCategoriesMenuContainer"></div>
	
					</div>

				</div>
		
			</div>

		</div>

		<div id="LeftDownContainer">
			
			<div id="SidePicksContainer">

				<div id="SpecialCategoriesContainer">
					<h1>ACTIONS</h1>
				</div>

				<div id="MainCategoriesContainer">
				</div>

			</div>

		</div>

		<div id="RightDownContainer">
			
			<div id="CategoryContainer"></div>
			<div id="SortByContainer"></div>
			<div id="ExtraThingsContainer"></div>
			<div id="ShowRoomContainer"></div> 

		</div>

		<audio id="AudioPlay" src="\SiteMusic\No1.mp3" loop>
			If you're reading this, audio isn't supported. 
		</audio>

	</div>

<!--MENU CODE HERE-->
	<script>
		
		function HomeClick() {

			sessionStorage.setItem('situation', 'LeftMyAccount');
			document.location.href = "http://localhost/E/Screens/SignInScreen.php";
		}

	</script>

<!--AUDIO CODE HERE-->
	<script>

		var audioSit = false;

		var audioMainC = document.getElementById("WantMusicButton");
		var audioPlay = document.getElementById("AudioPlay");
		var audioPlayImg = document.getElementById("AudioPlayImg");
		var audioPlayC = document.getElementById("AudioPlayContainer");

		audioMainC.onclick = AudioButton;
		AudioContainerBehavior();

		function AudioContainerBehavior() {

			audioMainC.onmouseover = function() {	
													this.style.background = "white";
													this.style.borderColor = "black";
													audioPlayC.style.left = "6px";
													this.children[0].style.color = "orange";

													if(audioSit) {
														
														this.children[0].innerHTML = "Click here to stop playing"
													}
													else {
													
														this.children[0].innerHTML = "Click here to start playing"}
									};

			audioMainC.onmouseout = function() {	
													this.style.background = "black";
													this.style.borderColor = "rgb(136, 170, 239)";
													audioPlayC.style.left = "25px"; 
													this.children[0].innerHTML = "Want music? Hover here";
													this.children[0].style.color = "rgb(136, 170, 239)";
									};
		}

		function AudioButton() {

			if(audioSit) {

				audioSit = false;
			}
			else {

				audioSit = true;
			}

			if(audioSit) {

				audioPlay.play();
				audioMainC.children[0].innerHTML = "Click here to stop playing";
				audioPlayImg.style.content = "url('/SitePics/playLightBlueButton.png')";
				audioPlayImg.style.width = "90%";
				audioPlayImg.style.height = "99%";
				audioPlayImg.style.margin = "0 0 0 -2px";
			}
			else {

				audioPlay.pause();
				audioMainC.children[0].innerHTML = "Click here to start playing";
				audioPlayImg.style.content = "url('/SitePics/pauseLightBlueButton.png')";
				audioPlayImg.style.width = "80%";
				audioPlayImg.style.height = "70%";
				audioPlayImg.style.margin = "3px 0 0 -2px";
			}
		}

	</script>

<!--Check For Session-->
	<script>
	
	sessionStorage.setItem('situation', 'FromMainPageAlreadySignedIn');

	</script>

<!--Resize broswer window functions-->
	<script>
		
		var mainCatgrsPTW = [];
		var specialCatgrs = [];
		var h = 0;

		var mainCatgrPTWNo1 = new MainCategory("Electronics");
		var mainCatgrPTWNo2 = new MainCategory("Computers");
		var mainCatgrPTWNo3 = new MainCategory("Video Games");
		var mainCatgrPTWNo4 = new MainCategory("Fashion");
		var mainCatgrPTWNo5 = new MainCategory("Furnitures");
		var mainCatgrPTWNo6 = new MainCategory("Toys & Games");

		mainCatgrsPTW.push(mainCatgrPTWNo1);
		mainCatgrsPTW.push(mainCatgrPTWNo2);
		mainCatgrsPTW.push(mainCatgrPTWNo3);
		mainCatgrsPTW.push(mainCatgrPTWNo4);
		mainCatgrsPTW.push(mainCatgrPTWNo5);
		mainCatgrsPTW.push(mainCatgrPTWNo6);

		var specialCatgrNo1 = new SpecialCategory("Invest To Earn", [new XtraThing("About This"), new XtraThing("Play & Earn"), new XtraThing("Buy Credits")], mainCatgrsPTW);
		var specialCatgrNo2 = new SpecialCategory("Just Luck", [new XtraThing("About This"), new XtraThing("Play & Earn"), new XtraThing("Buy Credits")], [new MainCategory("Electronics"), new MainCategory("Toys & Games")]);
		var specialCatgrNo3 = new SpecialCategory("More, Pays More", [new XtraThing("About This"), new XtraThing("Play & Earn"), new XtraThing("Buy Credits")], [new MainCategory("National Bank"), new MainCategory("Bank Of Us")]);
		var specialCatgrNo4 = new SpecialCategory("Give Back", [new XtraThing("About This"), new XtraThing("Play & Earn"), new XtraThing("Buy Credits")], []);

		specialCatgrs.push(specialCatgrNo1);
		specialCatgrs.push(specialCatgrNo2);
		specialCatgrs.push(specialCatgrNo3);
		specialCatgrs.push(specialCatgrNo4);

		var headT = document.getElementById("HeadTitle");
		var mainC = document.getElementById("MainContainer");
		var upC = document.getElementById("UpContainer");
		var openedMenuC = document.getElementById("OpenedMenuContainer");
		var openMenuBtnC = document.getElementById("OpenMenuBtnsContainer");
		var btnForCatgrs = document.getElementById("OpenCatgrsBtn");
		var btnForCatgrsImg = document.getElementById("OpenCatgrsImg");
		var leftMenuC = document.getElementById("LeftMenuContainer");
		var specCtgrMenuC = document.getElementById("SpecialCategoriesMenuContainer");
		var leftDownC = document.getElementById("LeftDownContainer");
		var rightDownC = document.getElementById("RightDownContainer");
		
		var checkForResOpened = 0;
		var checkIfMenuIsOpen = 0;
		var openCloseMenu = 0;
		var checkMenuLeftTimesOpen = 0;
		var changedSit = 0;
		var nowSitOfWindow = 0;

		NowOpenedPartStyling();

		setInterval(ResizeBroswer, 100);

		function ResizeBroswer() {

			if(mainC.offsetWidth < 1235) {

				if(mainC.offsetWidth < 769) {

					if(!checkIfMenuIsOpen) {

						upC.style.display = "block";
						upC.style.width = "100%";
						upC.style.height = "100px";
						upC.style.background = "transparent";
						upC.style.marginTop = "-100px";

						openMenuBtnC.style.width = "100%";
						openMenuBtnC.style.opacity = "1";

						btnForCatgrs.onmouseover = function() {
							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnHoverLightBlue.png')";
						};
						btnForCatgrs.onmouseout = function() {
							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlue.png')";
						};
						btnForCatgrs.onfocus = function () {
  							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnHoverLightBlue.png')";
						};
						btnForCatgrs.onclick = function () {
  							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnClickBlue.png')";
  							
  							ShowLeftDownContainerWithCatgrs();
  							ChangesOnStart();
						};
						btnForCatgrs.addEventListener("focusout", function () {
  							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlue.png')";
						});

						leftMenuC.style.transform = "translate3d(-100%, 0, 0)";

						leftDownC.style.display = "none";
						leftDownC.style.height = "0%";
						leftDownC.style.opacity = "0";

						rightDownC.style.width = "100%";
						//rightDownC.style.background = "green";
					}
					else {

						upC.style.width = mainC.offsetWidth;
						upC.style.height = mainC.offsetHeight;
						upC.style.background = "rgba(153, 153, 153, 0.3)";
						upC.style.marginTop = -100;

						openMenuBtnC.style.width = "33%";

						btnForCatgrs.onmouseover = function() {
							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnHoverLightBlue.png')";
						};
						btnForCatgrs.onmouseout = function() {
							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnClickBlue.png')";
						};
						btnForCatgrs.onfocus = function () {
  							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnHoverLightBlue.png')";
						};
						btnForCatgrs.onclick = function () {
  							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlue.png')";
  							ShowLeftDownContainerWithCatgrs();
  							ChangesOnFirstClick();
						};
						btnForCatgrs.addEventListener("focusout", function () {
  							btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlue.png')";
						});

						leftMenuC.style.width = "33%";
						leftMenuC.style.height = "400px";
						leftMenuC.style.background = "rgba(255, 255, 255, 0.5)";
						leftMenuC.style.opacity = "1";
						leftMenuC.style.transform = "translate3d(0, 0, 0)";

						//rightDownC.style.background = "blue";
					}

					if(!checkForResOpened) {

						upC.style.background = "transparent";
						btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlue.png')";

						checkForResOpened = 1;
					}

				}
				else {

				}
			}
			else {

				upC.style.display = "none";
				upC.style.zIndex = "15";
				upC.style.width = "100%";
				upC.style.height = "100px";
				upC.style.background = "transparent";
				upC.style.marginTop = "-100px";

				openMenuBtnC.style.opacity = "0";

				leftMenuC.style.zIndex = "-10";
				leftMenuC.style.height = "0%";
				leftMenuC.style.opacity = "0";
				leftMenuC.style.transform = "translate3d(-100%, 0, 0)";

				leftDownC.style.display = "block";
				leftDownC.style.width = "20%";
				leftDownC.style.opacity = "1";

				rightDownC.style.width = "80%";

				checkForResOpened = 0;
				checkIfMenuIsOpen = 0;
				openCloseMenu = 0;
			}
		}

		function ShowLeftDownContainerWithCatgrs() {

			if(openCloseMenu == 0) {

				checkIfMenuIsOpen = 1;
				openCloseMenu = 1;
			}
			else {

				checkIfMenuIsOpen = 0;
				openCloseMenu = 0;
			}
		}

		function ChangesOnFirstClick() {

			setTimeout(function() {
				
				btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnHoverLightBlue.png')";
			}, 200);

			setTimeout(function() {

				upC.style.zIndex = "10";
			}, 300);
		}

		function ChangesOnStart() {

			setTimeout(function() {
				
				btnForCatgrsImg.style.content = "url('/SitePics/MenuIconDarkBlueOnHoverLightBlue.png')";
			}, 200);

			upC.style.zIndex = "25";

			if(!checkMenuLeftTimesOpen) {
				
				for(var i = 0; i < specialCatgrs.length; i++) {

					CreateANewSpecialCategorySmallWindow(specialCatgrs[i]);

					/*//PUT THE ITEMS OF THIS SPECIAL CATEGORY IN AN ARRAYLIST
					for(var j = 0; j < items.length; j++) {
				
						if(specialCatgrs[i].name == items[j].specialCategory) {

							specialCatgrs[i].addItem(items[j]);
						}
					}*/
				}
			}
			checkMenuLeftTimesOpen = 1;
		}

		function CreateANewSpecialCategorySmallWindow(categoryObject) {

			//Already existing elements
			var specCatgrsMenuC = document.getElementById("SpecialCategoriesMenuContainer");

			//Created here elements
			var specCatgrMenuBut = document.createElement("button")
			specCatgrMenuBut.className = "SpecCatgrMenuButton";
			specCatgrMenuBut.name = h;
			specCatgrMenuBut.id = "No" + h;

			//specCatgrMenuBut.onclick = OnlyOneButtonAtATime;
			h++;

			var imgArrow = document.createElement("img");
			imgArrow.className = "ImgArrow";

			var specCatgrMenuPar = document.createElement("p");
			specCatgrMenuPar.className = "SpecCatgrMenuPar";
			specCatgrMenuPar.innerHTML = categoryObject.name;

			specCatgrsMenuC.appendChild(specCatgrMenuBut);
			specCatgrMenuBut.appendChild(specCatgrMenuPar);
			specCatgrMenuBut.appendChild(imgArrow);
		}

		function NowOpenedPartStyling() {
			
			if(mainC.offsetWidth < 1235) {


			}
			else {

			}
		}

//<!--Objects SCRIPT-->
		
		var items = [];
		var compsOpen = [];

		var i1 = new Company("Moba Co.", 20, "Invest To Earn", "Electronics", 2);
		var i2 = new Company("Pc Firm", 5, "Invest To Earn", "Computers", 5);
		var i3 = new Company("T-shirt Buds", 2, "Invest To Earn", "Fashion", 5);
		var i4 = new Company("The Wooden-Co.", 2.5, "Invest To Earn", "Furnitures", 4);
		var i5 = new Company("Active Rebels", 1.5, "Invest To Earn", "Electronics", 5);
		var i6 = new Company("Kid Smith", 2, "Invest To Earn", "Toys & Games", 3);
		var i7 = new Company("Diantre.Com", 2, "Invest To Earn", "Computers", 3);
		var i8 = new Company("Angeli", 2, "Invest To Earn", "Fashion", 1);
		var i9 = new Company("Mr Fizz", 2, "Invest To Earn", "Toys & Games", 0);
		var i10 = new Company("Gamer's World", 10, "Invest To Earn", "Video Games", 3);
		var i11 = new LuckyProduct("Beats By Dre", 2, "Just Luck", "Electronics", 5);
		var i12 = new LuckyProduct("Monopoly", 2, "Just Luck", "Toys & Games", 3);
		var i13 = new Bank("Union Bank", 9, "More, Pays More", "National Bank", 2);
		var i14 = new Bank("East Bank", 19, "More, Pays More", "Bank Of Us", 5);
		
		items.push(i1);
		items.push(i2);
		items.push(i3);
		items.push(i4);
		items.push(i5);
		items.push(i6);
		items.push(i7);
		items.push(i8);
		items.push(i9);
		items.push(i10);
		items.push(i11);
		items.push(i12);
		items.push(i13);
		items.push(i14);

	//IF IT IS IN A SPECIAL CATEGORY 

		//COMPANIES
		function Company(name, priceCost, specialCategory, mainCategory, rating) {

			this.name = name;
			this.priceCost = priceCost;
			var possibleProfit = 3 * this.priceCost;
			this.specialCategory = specialCategory;
			this.mainCategory = mainCategory;
			this.rating = rating;

			this.GetPossibleProfit = function() {

				return possibleProfit;
			}

			this.HaveMainCatgr = function() {

				if(this.mainCategory == "") {

					return 0;
				}
				else {

					return 1;
				}
			}
		}

		function CreateANewCompany(companyObject) {

			//Already existing elements
			var showRoomWrapperC = document.getElementById("ShowRoomWrapperContainer");

			//Created here elements
			var itemBut = document.createElement("button");
			itemBut.className = "CompanyBut";

			//UP SIDE OF ITEM
			var itemBackgrC = document.createElement("div");
			itemBackgrC.className = "CompanyBackgroundC";

			var itemMapC = document.createElement("div");
			itemMapC.className = "CompanyMapC";
			itemMapC.innerHTML = "Rating: " + companyObject.rating + " ,Possible profit: " + companyObject.GetPossibleProfit();

			//DOWN SIDE OF ITEM
			var itemDownInfoC = document.createElement("div");
			itemDownInfoC.className = "CompanyDownInfoC";
			itemDownInfoC.innerHTML = companyObject.name;

			itemBackgrC.appendChild(itemMapC);
			itemBut.appendChild(itemBackgrC);

			itemBut.appendChild(itemDownInfoC);
			showRoomWrapperC.appendChild(itemBut);
			
			itemBut.onclick = function() {

												this.style.border = "2px solid rgb(0, 230, 0)";
												this.style.boxShadow = "0px 0 3px 0px rgba(0, 230, 0, 0.5)";
												compsOpen.push(companyObject.name);
								}

			for(var i = 0; i < compsOpen.length; i++) {

				if(compsOpen[i] == itemDownInfoC.innerHTML) {

					itemBut.style.border = "2px solid rgb(0, 230, 0)";
					itemBut.style.boxShadow = "0px 0 3px 0px rgba(0, 230, 0, 0.5)";
				}
			}
		}

		//LUCKY PRODUCTS
		function LuckyProduct(name, priceCost, specialCategory, mainCategory, rating) {

			this.name = name;
			this.priceCost = priceCost;
			this.specialCategory = specialCategory;
			this.mainCategory = mainCategory;
			this.rating = rating;

			this.HaveMainCatgr = function() {

				if(this.mainCategory == "") {

					return 0;
				}
				else {

					return 1;
				}
			}
		}

		function CreateANewLuckyProduct(luckyProdObject) {

			//Already existing elements
			var showRoomWrapperC = document.getElementById("ShowRoomWrapperContainer");

			//Created here elements
			var itemBut = document.createElement("button");
			itemBut.className = "LuckyProdBut";

			//UP SIDE OF ITEM
			var itemBackgrC = document.createElement("div");
			itemBackgrC.className = "LuckyProdBackgroundC";

			var itemMapC = document.createElement("div");
			itemMapC.className = "LuckyProdMapC";
			itemMapC.innerHTML = "Rating: " + luckyProdObject.rating + " , Price: " + luckyProdObject.priceCost;

			//DOWN SIDE OF ITEM
			var itemDownInfoC = document.createElement("div");
			itemDownInfoC.className = "LuckyProdDownInfoC";
			itemDownInfoC.innerHTML = luckyProdObject.name;

			itemBackgrC.appendChild(itemMapC);
			itemBut.appendChild(itemBackgrC);

			itemBut.appendChild(itemDownInfoC);
			showRoomWrapperC.appendChild(itemBut);
			
			itemBut.onclick = function() {
												this.style.border = "2px solid rgb(0, 230, 0)";
								}
		}

		//BANKS
		function Bank(name, priceCost, specialCategory, mainCategory, rating) {

			this.name = name;
			this.priceCost = priceCost;
			this.specialCategory = specialCategory;
			this.mainCategory = mainCategory;
			this.rating = rating;

			this.HaveMainCatgr = function() {

				if(this.mainCategory == "") {

					return 0;
				}
				else {

					return 1;
				}
			}
		}

		function CreateANewBank(bankObject) {

			//Already existing elements
			var showRoomWrapperC = document.getElementById("ShowRoomWrapperContainer");

			//Created here elements
			var itemBut = document.createElement("button");
			itemBut.className = "BankBut";

			//UP SIDE OF ITEM
			var itemBackgrC = document.createElement("div");
			itemBackgrC.className = "BankBackgroundC";

			var itemMapC = document.createElement("div");
			itemMapC.className = "BankMapC";
			itemMapC.innerHTML = "Rating: " + bankObject.rating + " ,Possible profit: " + bankObject.priceCost;

			//DOWN SIDE OF ITEM
			var itemDownInfoC = document.createElement("div");
			itemDownInfoC.className = "BankDownInfoC";
			itemDownInfoC.innerHTML = bankObject.name;

			itemBackgrC.appendChild(itemMapC);
			itemBut.appendChild(itemBackgrC);

			itemBut.appendChild(itemDownInfoC);
			showRoomWrapperC.appendChild(itemBut);
			
			itemBut.onclick = function() {
												this.style.border = "2px solid rgb(0, 230, 0)";
								}
		}

		//CHARITY ORGANIZATION
		function CharityOrgan(name, priceCost, specialCategory, mainCategory, rating) {

			this.name = name;
			this.priceCost = priceCost;
			this.specialCategory = specialCategory;
			this.mainCategory = mainCategory;
			this.rating = rating;

			this.HaveMainCatgr = function() {

				if(this.mainCategory == "") {

					return 0;
				}
				else {

					return 1;
				}
			}
		}

		function CreateANewCharityOrgan(charityOrganObject) {

			//Already existing elements
			var showRoomWrapperC = document.getElementById("ShowRoomWrapperContainer");

			//Created here elements
			var itemBut = document.createElement("button");
			itemBut.className = "CharityOrganBut";

			//UP SIDE OF ITEM
			var itemBackgrC = document.createElement("div");
			itemBackgrC.className = "CharityOrganBackgroundC";

			var itemMapC = document.createElement("div");
			itemMapC.className = "CharityOrganMapC";
			itemMapC.innerHTML = "Rating: " + charityOrganObject.rating + " ,Possible profit: " + charityOrganObject.priceCost;

			//DOWN SIDE OF ITEM
			var itemDownInfoC = document.createElement("div");
			itemDownInfoC.className = "CharityOrganDownInfoC";
			itemDownInfoC.innerHTML = charityOrganObject.name;

			itemBackgrC.appendChild(itemMapC);
			itemBut.appendChild(itemBackgrC);

			itemBut.appendChild(itemDownInfoC);
			showRoomWrapperC.appendChild(itemBut);
			
			itemBut.onclick = function() {
												this.style.border = "2px solid rgb(0, 230, 0)";
								}
		}

//CREATING THE CATEGORIES
		var lastOpenedSpecCategrNumb = -1;
		var lastOpenedSpecCategrName = "This_Is-The_FirstOne";
		var nowOpenedSpecCategrNumb = -1;
		var nowOpenedSpecCategrName = "";
		var checkForSpecsPlayAndEarnXtra = [];
		var c = 0;
		var buttonsCheckList = [];
		var butSit = [];
		var bC = [];
		var b1 = 0;
		var c1 = 0;
		var b2 = 0;
		var c2 = 0;
		var v = 0;
		var countBut = 2;
		var sortByOne = "Profit";
		var sortByTwo = "Rating";
		var sortByIsOpen = "false";
		var sortByBut = [];
		var searchInfoSortBy;
		//FOR THE MAIN CATEGORIES
		var checkerMainCatgrsClicks = [];
		var countPosOfMainCatgrs = 0;
		var mainCatgrsOfThis = [];
		var searchInfoMainCatgrs = [];
		//FOR THE EXTRA BUTTONS
		//var countPosOfXtraButtons = 0;
		var findXtraButtons = [];
		var xtraButtonsThatDecideShwrCont = [];
		var xtraButtonsList = [];
		var xtraButtonsNamesConstr = [];
		var xtraButtonCurrentClick;
		var xtraButtonLastClick = null;

		var itemsOfThisSpecCat = [];
		var counterForLastClick = "";
		var specCatgrNow;

		var mainCPadTop = Number($('#MainContainer').css("padding-top").slice(0, -2));
		var mainCPadBot = Number($('#MainContainer').css("padding-bottom").slice(0, -2));

	//<!--STARTING SCREEN OF THE RIGHT DOWN CONTAINER-->
	/*MAKE THE STARTING WIDTHS/HEIGHTS OF SITE*/
	StartingSizes();

	function StartingSizes() {

		var mainC = document.getElementById("MainContainer");
		var showRC = document.getElementById("ShowRoomContainer");
		var leftDownCont = document.getElementById("LeftDownContainer");

		showRC.style.height = "500px";
		mainC.style.height = $('#RightDownContainer').height() + mainCPadTop + mainCPadBot + "px";
		leftDownCont.style.height = $('#RightDownContainer').height();
	}
	/**/

	//<!--MAIN CATEGORIES SCRIPT-->

		for(var i = 0; i < specialCatgrs.length; i++) {

			CreateANewSpecialCategoryBigWindow(specialCatgrs[i]);

			//PUT THE ITEMS OF THIS SPECIAL CATEGORY IN AN ARRAYLIST
			for(var j = 0; j < items.length; j++) {
				
				if(specialCatgrs[i].name == items[j].specialCategory) {

					specialCatgrs[i].addItem(items[j]);
				}
			}
		}

		//MAIN CATEGORY CONSTRUCTOR
		function MainCategory(name) {

			var itemsOfThisMC = [];

			this.name = name;

			this.addItem = function (item) {

				itemsOfThisMC.push(item);
			};
		}

		function CreateANewMainCategory(categoryObject) {

			//Already existing elements
			var mainCatgrsC = document.getElementById("MainCategoriesContainer");

			//Created here elements
			var mainCatgrC = document.createElement("label")
			mainCatgrC.className = "Container";
			mainCatgrC.innerHTML = categoryObject.name;

			var inputCheckbox = document.createElement("input");
			inputCheckbox.className = "InputCheck";
			inputCheckbox.id = countPosOfMainCatgrs;
			inputCheckbox.type = "Checkbox";
			inputCheckbox.name = categoryObject.name;

			inputCheckbox.onclick = CheckboxesEvents;

			if(checkerMainCatgrsClicks[inputCheckbox.id]) {

				inputCheckbox.checked = true;
			}

			mainCatgrsOfThis.push(categoryObject.name);

			var checkMarkTik = document.createElement("span");
			checkMarkTik.className = "Checkmark";

			mainCatgrsC.appendChild(mainCatgrC);
			mainCatgrC.appendChild(inputCheckbox);
			mainCatgrC.appendChild(checkMarkTik);
		}

	//<!--EXTRA THINGS BUTTONS SCRIPT-->

		//SPECIAL CATEGORIES CONSTRUCTOR
		function XtraThing(name) {

			this.name = name;

			/*SHOWROOM CHANGES*/
			this.FoundInnerOfEachXtraBut = function () {

				var shwRoomC = document.getElementById("ShowRoomContainer");
				shwRoomC.innerHTML = "";

				var mainCatgrC = document.getElementById("MainCategoriesContainer");
				mainCatgrC.style.opacity = 0;
				mainCatgrC.innerHTML = "";

				if(this.name != "Play & Earn") {

					if(counterForLastClick == "Play &amp; Earn") {
								
						SortByChangesOnInActiveClickEarnAndPlay();
						if(nowOpenedSpecCategrNumb == lastOpenedSpecCategrNumb) {
							
							ItemsClosing();
						}
					}
				}

				if(this.name == "About This") {

					for(var i = 0; i < c; i++) {

						if(butSit[buttonsCheckList[i].name] == "true") {
						
							DownShowRoomContainerChangesOnClickInAboutThis(specialCatgrs[i]);
						}
					}
				}
				else if(this.name == "Play & Earn") {

					for(var i = 0; i < c; i++) {

						if(butSit[buttonsCheckList[i].name] == "true") {

							if(checkForSpecsPlayAndEarnXtra[nowOpenedSpecCategrNumb] == 1) {
								
								SortByChangesOnActiveClickEarnAndPlay();
							}
							SortByClickInAnimation();
							DownShowRoomContainerChangesOnClickInPlayAndEarn(specialCatgrs[i]);
							LeftDownContainerChangeOnClickInPlayAndEarn(specialCatgrs[i]);
							checkForSpecsPlayAndEarnXtra[nowOpenedSpecCategrNumb]++;
						}
					}
				}
				else if(this.name == "Buy Credits") {

					for(var i = 0; i < c; i++) {

						if(butSit[buttonsCheckList[i].name] == "true") {
							
							DownShowRoomContainerChangesOnClickInBuyCredits(specialCatgrs[i]);	
						}
					}
				}
				else {

					
				}
			}
			/**/
		}

	//<!--SPECIAL CATEGORIES SCRIPT-->

		//SPECIAL CATEGORIES CONSTRUCTOR
		function SpecialCategory(name, allExtrasOfThisSC, mainCatgrs) {

			var itemsOfThisSC = [];

			this.name = name;
			this.allExtrasOfThisSC = allExtrasOfThisSC;
			this.mainCatgrs = mainCatgrs;

			this.addItem = function (item) {
				
				itemsOfThisSC.push(item);
			};

			this.countItems = function () {

				var c = 0;

				for(var i = 0; i < itemsOfThisSC.length; i++) {

					c++;
				}

				return c;
			};

			this.getItemsArray = function () {

				return itemsOfThisSC;
			}

			this.showI = function () {

				for(var i = 0; i < itemsOfThisSC.length; i++) {

					return itemsOfThisSC[i].name;
				}
			}

			this.createMainCategories = function () {

				var mainCatgrCont = document.getElementById("MainCategoriesContainer");
				var header = document.createElement("h1");
				var checkerOfClicks = 0;
				var checkerCounterButs = 0;

				//checkerMainCatgrsClicks = [];
				mainCatgrsOfThis = [];

				mainCatgrCont.innerHTML = "";
				mainCatgrCont.style.opacity = 1;
				if(nowOpenedSpecCategrName == "Invest To Earn") {
					
					header.innerHTML = "COMPANIES";
				}
				else if(nowOpenedSpecCategrName == "Just Luck") {
					
					header.innerHTML = "PRODUCTS";
				}
				else if(nowOpenedSpecCategrName == "More, Pays More") {
					
					header.innerHTML = "BANKS";
				}
				else {

					header.innerHTML = "CHARITIES";
				}

				mainCatgrCont.appendChild(header);

				if(this.mainCatgrs.length == 0) {

					var par = document.createElement("div");
					par.id = "NoItemFoundContainer";
					par.innerHTML = "No category found";

					mainCatgrCont.appendChild(par);
				}
				else {

					for(var i = 0; i < this.mainCatgrs.length; i++) {
					
						if(checkForSpecsPlayAndEarnXtra[nowOpenedSpecCategrNumb] == 1) {
							
							checkerMainCatgrsClicks.push(0);
						}
						countPosOfMainCatgrs = checkerCounterButs;
						CreateANewMainCategory(this.mainCatgrs[i]);
						checkerCounterButs++;
					}
				}
			}	
		}

		function CreateANewSpecialCategoryBigWindow(categoryObject) {

			//Already existing elements
			var specCatgrsC = document.getElementById("SpecialCategoriesContainer");

			//Created here elements
			var specCatgrBut = document.createElement("button")
			specCatgrBut.className = "SpecCatgrButton";
			specCatgrBut.name = c;
			specCatgrBut.id = "No" + c;

			buttonsCheckList[c] = specCatgrBut;
			butSit[c] = "false";
			bC[c] = "1";

			specCatgrBut.onclick = OnlyOneButtonAtATime;
			c++;

			var imgArrow = document.createElement("img");
			imgArrow.className = "ImgArrow";

			var specCatgrPar = document.createElement("p");
			specCatgrPar.className = "SpecCatgrPar";
			specCatgrPar.innerHTML = categoryObject.name;

			specCatgrsC.appendChild(specCatgrBut);
			specCatgrBut.appendChild(specCatgrPar);
			specCatgrBut.appendChild(imgArrow);
		}

		function OnlyOneButtonAtATime() {

			checkForSpecsPlayAndEarnXtra[this.name] = 1;
			searchInfoMainCatgrs = [];

			bC[this.name]++;

			if(bC[this.name] % 2 == 0) {

				this.children[1].style.transform = "translateX(2.5vw)";
				this.onmouseover = function() {this.children[1].style.transform = "translateX(2.5vw) rotateZ(180deg)";};
				this.onmouseout = function() {this.children[1].style.transform = "translateX(2.5vw) rotateZ(90deg)";};
				this.style.width = "90%";
				this.children[1].style.marginRight = "3vw";
				butSit[this.name] = "true";
			}
			else if(bC[this.name] % 2 == 1) {

				this.children[1].style.transform = "translateX(0px) rotateZ(180deg)";
				this.onmouseover = function() {this.children[1].style.transform = "translateX(0px) rotateZ(0deg)";};
				this.onmouseout = function() {this.children[1].style.transform = "translateX(0px) rotateZ(180deg)";};
				this.style.width = "75%";
				this.children[1].style.marginRight = "0.2vw";
				butSit[this.name] = "false";
			}

			if(butSit[this.name] == "true") {

				for(var i = 0; i < c; i++) {

					if(this.name != buttonsCheckList[i].name) {

						butSit[buttonsCheckList[i].name] = "false";
						checkForSpecsPlayAndEarnXtra[buttonsCheckList[i].name] = 0;
					}
				}
			}

			for(var i = 0; i < c; i++) {

				if(butSit[buttonsCheckList[i].name] == "false") {

					buttonsCheckList[i].children[1].style.transform = "translateX(0px) rotateZ(180deg)";
					buttonsCheckList[i].onmouseover = function() {this.children[1].style.transform = "translateX(0px) rotateZ(0deg)";};
					buttonsCheckList[i].onmouseout = function() {this.children[1].style.transform = "translateX(0px) rotateZ(180deg)";};
					buttonsCheckList[i].style.width = "75%";
					buttonsCheckList[i].children[1].style.marginRight = "0.2vw";
					if(bC[buttonsCheckList[i].name] % 2 != 1) {
						
						bC[buttonsCheckList[i].name]++;
					}
				}
			}

			for(var i = 0; i < c; i++) {

				if(butSit[buttonsCheckList[i].name] == "true") {

					nowOpenedSpecCategrNumb = this.name;
					nowOpenedSpecCategrName = specialCatgrs[i].name;
					compsOpen = [];
					RightDownContainerChange(specialCatgrs[i]);
					b1 = 1;
					b2 = 1;
					ChangeColorOfShadowsOnOpen(i);
					lastOpenedSpecCategrNumb = nowOpenedSpecCategrNumb;
					lastOpenedSpecCategrName = nowOpenedSpecCategrName;
				}
			}

			if(butSit[this.name] == "false") {

				c1 = 0;
				b1 = 0;
				c2 = 0;
				b2 = 0;
				LeftDownContainerStartScreen(specialCatgrs[this.name]);
				RightDownContainerStartScreen(specialCatgrs[this.name]);
				ChangeColorOfShadowsOnClose();
				SortByChangesOnInActiveClickEarnAndPlay();
				ItemsClosing();
			}

			v = 0;

			//var mainCont = document.getElementById("MainContainer");
			
			//mainCont.style.height = "100%";
		}

		/*LEFT SIDE CHAMGES AFTER CLICK*/
		function LeftDownContainerChangeOnClickInPlayAndEarn(specialCategory) {

			specialCategory.createMainCategories();
		}

		function LeftDownContainerStartScreen(specialCategory) {

			document.getElementById("MainCategoriesContainer").style.opacity = "0";
		}

		/*FULL SHOWROOM CHANGES AFTER CLICK*/

		function RightDownContainerChange(specialCategory) {

			/*FIRST ELEMENT*/

			//Already existing elements
			var categrC = document.getElementById("CategoryContainer");

			categrC.innerHTML = "";

			//Created here elements
			var headerParOfThis = document.createElement("p");
			headerParOfThis.id = "ParHeaderOfCategrC";
			headerParOfThis.innerHTML = specialCategory.name;

			headerParOfThis.style.transform = "translateX(-230px)";
			setTimeout(function() {
				
				headerParOfThis.style.transform = "translateX(0px)";
			}, 50);


			categrC.appendChild(headerParOfThis);
			/**/

			/*SECOND ELEMENT*/

			//THIS WILL GET TRIGGERED FROM 1st EXTRA BUTTON CLICK
			/**/

			/*THIRD ELEMENT*/

			//Already existing elements
			var xtraThingsC = document.getElementById("ExtraThingsContainer");
			xtraThingsC.innerHTML = "";

			//Created here elements
			var buttonsC = document.createElement("div");
			buttonsC.id = "ButtonsContainer";

			xtraButtonsThatDecideShwrCont = [];
			var countPosOfXtraButtons = 0;
			xtraButtonsList = [];
			xtraButtonsNames = [];

			checkerMainCatgrsClicks = [];

			for(var i = 0; i < specialCategory.allExtrasOfThisSC.length; i++) {
				
				//Created here elements
				var xtraBut = document.createElement("button");
				xtraBut.className = "ExtraInSCButton";
				xtraBut.innerHTML = specialCategory.allExtrasOfThisSC[i].name;
				xtraBut.id = countPosOfXtraButtons;
				xtraButtonsList.push(xtraBut);
				xtraButtonsNamesConstr.push(specialCategory.allExtrasOfThisSC[i]);

				if(i == 0) {

					xtraButtonsThatDecideShwrCont.push(1);
					xtraBut.style.marginLeft = "0";
				}
				else {

					xtraButtonsThatDecideShwrCont.push(0);
					xtraButtonsList[i].style.color = "rgb(205, 222, 234)";
					xtraButtonsList[i].onmousemove = function () {this.style.color = "orange";};
					xtraButtonsList[i].onmouseout = function () {this.style.color = "rgb(205, 222, 234)";};
					xtraButtonsList[i].onmousedown = function () {this.style.color = "rgb(0, 61, 102)";};
					xtraButtonsList[i].onkeypress = function () {this.style.color = "rgb(0, 61, 102)";};
					xtraButtonsList[i].onmouseup = function () {this.style.color = "orange";};
					xtraButtonsList[i].onkeyup = function () {this.style.color = "rgb(205, 222, 234)";};
				}

				xtraBut.onclick = XtraButtonEvents;
				countPosOfXtraButtons++;

				buttonsC.appendChild(xtraBut);
			}

			xtraThingsC.appendChild(buttonsC);

			if(b2 == 1) {

				c2 = 1;
				if(c2 == 0) {
					
					buttonsC.style.transition = "transform 0.2s";
					setTimeout(function() {
				
						buttonsC.style.transform = "translateY(0px)";
					}, 100);
				}
				else {

					buttonsC.style.transition = "transform 0s";
					buttonsC.style.transform = "translateY(0px)";
				}
			}
			else {
				
				buttonsC.style.transition = "transform 0.2s";
				setTimeout(function() {
				
					buttonsC.style.transform = "translateY(0px)";
				}, 100);
			}
			/**/

			/*FOURTH ELEMENT - SHOWROOM STARTER*/
			if(xtraButtonsList[0] != null) {

				xtraButtonsList[0].click();
			}
			else {

				alert("NO XTRAS");
			}
			/**/
			//alert(checkerMainCatgrsClicks);
		}

		/*SORT BY SCRIPT CHANGES*/
		function SortByChangesOnActiveClickEarnAndPlay() {

			var sortByC = document.getElementById("SortByContainer");
			sortByC.innerHTML = "";
			
			var sortByPlaceC = document.createElement("button");
			sortByPlaceC.id = "SortByPlaceGeneralButton";
			sortByPlaceC.onclick = SortByGeneralButton;

			var sortByImgArrow = document.createElement("img");
			sortByImgArrow.id = "SortBy1stImgArrow";

			/*var sortByGeneralPar = document.createElement("p");
			sortByGeneralPar.id = "SortByGeneralPar";
			sortByGeneralPar.innerHTML = "Sort By: ";*/

			//SORT BY PRICE BUTTON
			var sortByPriceBut = document.createElement("button");
			sortByPriceBut.className = "SortByButton";
			sortByPriceBut.name = "1st";
			sortByPriceBut.id = sortByOne;
			sortByPriceBut.style.marginTop = "-24px";
			sortByPriceBut.onclick = SortByButtonChange;

			var sortByPricePar = document.createElement("p");
			sortByPricePar.className = "SortByPar";
			sortByPricePar.innerHTML = sortByOne;

			searchInfoSortBy = sortByPricePar.innerHTML;

			//SORT BY RATING BUTTON
			var sortByRateBut = document.createElement("button");
			sortByRateBut.className = "SortByButton";
			sortByRateBut.name = "2nd";
			sortByRateBut.id = sortByTwo;
			sortByRateBut.onclick = SortByButtonChange;

			var sortByRatePar = document.createElement("p");
			sortByRatePar.className = "SortByPar";
			sortByRatePar.innerHTML = sortByTwo;

			sortByPlaceC.appendChild(sortByImgArrow);
			sortByPriceBut.appendChild(sortByPricePar);
			sortByPlaceC.appendChild(sortByPriceBut);
			sortByRateBut.appendChild(sortByRatePar);
			sortByPlaceC.appendChild(sortByRateBut);
			//sortByC.appendChild(sortByGeneralPar);
			sortByC.appendChild(sortByPlaceC);

			for(var i = 0; i < countBut; i++) {

				sortByBut[i] = document.getElementsByClassName("SortByButton")[i];
				sortByBut[i].disabled = true;
			}
		}

		function SortByClickInAnimation() {

			var sortByPlaceC = document.getElementById("SortByPlaceGeneralButton");

			if(b1 == 1) {	

				c1 = 1;
				if(c1 == 0) {
					
					sortByPlaceC.style.transition = "transform 0.4s, height 0.1s";
					setTimeout(function() {
				
						sortByPlaceC.style.transform = "translateY(0px)";
					}, 100);
				}
				else {

					sortByPlaceC.style.transition = "transform 0.4s, height 0.1s";
					setTimeout(function() {

						sortByPlaceC.style.transform = "translateY(0px)";
					}, 100);
				}
			}
			else {

				sortByPlaceC.style.transition = "transform 0.4s, height 0.1s";
				setTimeout(function() {
				
					sortByPlaceC.style.transform = "translateY(0px)";
				}, 100);
			}
		}

		function SortByChangesOnInActiveClickEarnAndPlay() {

			var sortByPlaceC = document.getElementById("SortByPlaceGeneralButton");

			sortByPlaceC.style.transition = "transform 0.4s, height 0.1s";
			sortByPlaceC.style.transform = "translateY(-100px)";
		}
		/**/

		/*IF ALL ARROWS ARE CLOSED*/

		function RightDownContainerStartScreen(specialCategory) {

			/*FIRST ELEMENT*/
			//Already existing elements
			var headerParOfThis = document.getElementById("ParHeaderOfCategrC");
			
			headerParOfThis.style.transform = "translateX(-230px)";
		
			/**/

			/*SECOND ELEMENT*/

			//THIS WILL GET TRIGGERED FROM 1st EXTRA BUTTON CLICK
			/**/

			/*THIRD ELEMENT*/
			//Already existing elements
			var buttonsC = document.getElementById("ButtonsContainer");

			buttonsC.style.transition = "transform 0.4s";
			setTimeout(function() {
					
				buttonsC.style.transform = "translateY(100px)";
			}, 100);

			/*FOURTH ELEMENT - SHOWROOM WRAPPER*/
			DownShowRoomContainerChangesOnClickOut();

		}

		//CHANGE OF BOX-SHADOWS
		function ChangeColorOfShadowsOnOpen(buttonClicked) {

			var specCatgrsC = document.getElementById("SpecialCategoriesContainer");
			var mainCatgrsC = document.getElementById("MainCategoriesContainer");
			var rightDownC = document.getElementById("RightDownContainer");
			var shwRoomC = document.getElementById("ShowRoomContainer");
			var color1 = "grey";
			var color2 = "grey";

			if(buttonClicked % 2 == 0) {

				color1 = "rgb(0, 61, 153)";
				color2 = "rgb(0, 61, 153)";
			}
			else if(buttonClicked % 2 == 1) {

				color1 = "rgb(0, 92, 153)";
				color2 = "rgb(0, 92, 153)";
			}

			specCatgrsC.style.boxShadow = "0 0.7vw 0.6vw -0.9vw " + color1;
			mainCatgrsC.style.boxShadow = "0 0.7vw 0.6vw -0.9vw " + color1;
			rightDownC.style.boxShadow = "-0.6vw 0 0.6vw -0.9vw " + color2;
			shwRoomC.style.boxShadow = "0 -0.6vh 0.8vh -0.9vh " + color2;
		}

		function ChangeColorOfShadowsOnClose() {

			var specCatgrsC = document.getElementById("SpecialCategoriesContainer");
			var mainCatgrsC = document.getElementById("MainCategoriesContainer");
			var rightDownC = document.getElementById("RightDownContainer");
			var shwRoomC = document.getElementById("ShowRoomContainer");
			var color = "grey";

			specCatgrsC.style.boxShadow = "0 0.7vw 0.6vw -0.9vw " + color;
			mainCatgrsC.style.boxShadow = "0 0.7vw 0.6vw -0.9vw " + color;
			rightDownC.style.boxShadow = "-0.7vw 0 0.6vw -0.9vw " + color;
			shwRoomC.style.boxShadow = "0 -0.7vh 0.8vh -0.9vh " + color;
		}
		//

		//EVENT OF SORT GENERAL BUTTON
		function SortByGeneralButton() {

			var sortByPlaceC = document.getElementById("SortByPlaceGeneralButton");

			if(v % 2 == 0) {

				sortByIsOpen = "true";
			}
			else {

				sortByIsOpen = "false";
			}

			if(sortByIsOpen == "true") {

				sortByPlaceC.style.height = "68px";
				sortByPlaceC.children[0].style.transform = "rotateZ(180deg)";
				sortByPlaceC.style.background = "transparent";
				for(var i = 0; i < countBut; i++) {
					
					sortByBut[i].onmousemove = function() {this.children[0].style.color = "rgb(136, 170, 239)";};
					sortByBut[i].onmouseout = function() {this.children[0].style.color = "rgb(18, 58, 84)";};

					sortByBut[i].disabled = false;
				}
				sortByPlaceC.onmousemove = function() {this.style.background = "transparent";};
				sortByPlaceC.onmouseout = function() {this.style.background = "transparent";};
			}
			else if(sortByIsOpen == "false") {

				sortByPlaceC.style.height = "35px";
				sortByPlaceC.children[0].style.transform = "rotateZ(0deg)";
				for(var i = 0; i < countBut; i++) {

					sortByBut[i].children[0].style.color = "rgb(18, 58, 84)";
					sortByBut[i].onmousemove = function() {this.children[0].style.color = "rgb(18, 58, 84";};
					sortByBut[i].onmouseout = function() {this.children[0].style.color = "rgb(18, 58, 84)";};

					sortByBut[i].disabled = true;
				}
				sortByPlaceC.onmousemove = function() {this.style.background = "rgba(0, 0, 0, 0.1)";};
				sortByPlaceC.onmouseout = function() {this.style.background = "transparent";};
			}

			v++;
		}

		//EVENT OF SORT BUTTONS
		function SortByButtonChange() {

			var sortByC = document.getElementById("SortByContainer")
			var helper = "";

			for(var i = 0; i < countBut; i++) {

				if(this.name == sortByBut[i].name && sortByBut[i].name == "2nd") {

					if(sortByBut[i-1].id == sortByOne) {
					
						sortByBut[i-1].style.top = "33px";
						sortByBut[i].style.top = "-33px";
					}
					else if(sortByBut[i-1].id == sortByTwo) {

						sortByBut[i-1].style.top = "0px";
						sortByBut[i].style.top = "0px";
					}

					helper = sortByBut[i-1];
					sortByBut[i-1] = sortByBut[i];
					sortByBut[i] = helper;

					sortByBut[i].name = "2nd";
					sortByBut[i-1].name = "1st";
				}
			}
			
			searchInfoSortBy = this.id;
			CreateFinalShowRItems(itemsOfThisSpecCat);
		}

		//WHEN 'ABOUT THIS' IS OPEN
		function DownShowRoomContainerChangesOnClickInAboutThis() {

			var mainC = document.getElementById("MainContainer");
			var shwRoomC = document.getElementById("ShowRoomContainer");
			var leftDownCont = document.getElementById("LeftDownContainer");

			shwRoomC.style.height = "500px";
			mainC.style.height = $('#RightDownContainer').height() + mainCPadTop + mainCPadBot + "px";
			leftDownCont.style.height = $('#RightDownContainer').height();
		}

		//WHEN 'PLAY & EARN' IS OPEN
		function DownShowRoomContainerChangesOnClickInPlayAndEarn(specialCategory) {
			
			var shwRoomC = document.getElementById("ShowRoomContainer");

			document.getElementById("MainCategoriesContainer").style.opacity = "1";

			var shwRoomWrapperC = document.createElement("div");
			shwRoomWrapperC.id = "ShowRoomWrapperContainer";

			shwRoomC.appendChild(shwRoomWrapperC);

			for(var i = 0; i < specialCatgrs.length; i++) {

				if(specialCatgrs[i].name == specialCategory.name) {

					itemsOfThisSpecCat = specialCatgrs[i].getItemsArray();
				}
			}

			specCatgrNow = specialCategory;

			//
			var categrC = document.getElementById("CategoryContainer");

			categrC.innerHTML = "";

			//Created here elements
			var headerParOfThis = document.createElement("p");
			headerParOfThis.id = "ParHeaderOfCategrC";
			headerParOfThis.innerHTML = specialCategory.name;

			var dashC = document.createElement("div");
			
			dashC.id = "DashC";
			dashC.innerHTML = "-";
			dashC.style.opacity = "0";
			setTimeout(function() {
				
				dashC.style.opacity = "1";
			}, 100);

			var allItems = document.createElement("div");

			allItems.id = "AllItemsC";
			allItems.style.opacity = "0";
			setTimeout(function() {
				
				allItems.style.opacity = "1";
			}, 100);
			
			categrC.appendChild(headerParOfThis);
			categrC.appendChild(dashC);
			categrC.appendChild(allItems);

			CreateFinalShowRItems(itemsOfThisSpecCat);
		}

			//CREATING ITEMS LIST EVERYTIME THIS FUNCTION IS CALLED AND RETURN THIS LIST AS AN ARRAY(WHEN CHECKBOXES AND PLAY & EARN IS CLICKED)
		function CreateFinalShowRItems(itemsOfThisSpecCatgr) {

			var mainCont = document.getElementById("MainContainer");
			var shwRoomC = document.getElementById("ShowRoomContainer")
			var shwRoomWrapC = document.getElementById("ShowRoomWrapperContainer");
			var leftDownCont = document.getElementById("LeftDownContainer");
			var allItems = document.getElementById("AllItemsC");
			var itemsShown = [];

			shwRoomWrapC.innerHTML = "";

			for(var i = 0; i < itemsOfThisSpecCatgr.length; i++) {

				if(itemsOfThisSpecCatgr[i].HaveMainCatgr()) {
					
					for(var j = 0; j < searchInfoMainCatgrs.length; j++) {
						
						if(itemsOfThisSpecCatgr[i].mainCategory == searchInfoMainCatgrs[j]) {

							itemsShown.push(itemsOfThisSpecCatgr[i]);
						}
					}
				}
				else {

					itemsShown.push(itemsOfThisSpecCatgr[i]);
				}
			}

			QuickSort(itemsShown, 0, itemsShown.length - 1);

			if(nowOpenedSpecCategrName == "Invest To Earn") {
				
				for(var i = 0; i < itemsShown.length; i++) {

					CreateANewCompany(itemsShown[i]);
				}

				if(itemsShown.length == 1) {
				
					allItems.innerHTML = itemsShown.length + " company";
				}
				else {
				
					allItems.innerHTML = itemsShown.length + " companies";
				}
			}
			else if(nowOpenedSpecCategrName == "Just Luck") {
				
				for(var i = 0; i < itemsShown.length; i++) {

					CreateANewLuckyProduct(itemsShown[i]);
				}

				if(itemsShown.length == 1) {
				
					allItems.innerHTML = itemsShown.length + " item";
				}
				else {
				
					allItems.innerHTML = itemsShown.length + " items";
				}
			}
			else if(nowOpenedSpecCategrName == "More, Pays More") {
				
				for(var i = 0; i < itemsShown.length; i++) {

					CreateANewBank(itemsShown[i]);
				}

				if(itemsShown.length == 1) {
				
					allItems.innerHTML = itemsShown.length + " bank";
				}
				else {
				
					allItems.innerHTML = itemsShown.length + " banks";
				}
			}
			else if(nowOpenedSpecCategrName == "Give Back") {
				
				for(var i = 0; i < itemsShown.length; i++) {

					CreateANewCharityOrgan(itemsShown[i]);
				}

				if(itemsShown.length == 1) {
				
					allItems.innerHTML = itemsShown.length + " organization";
				}
				else {
				
					allItems.innerHTML = itemsShown.length + " organizations";
				}
			}
			
			if(itemsShown.length < 2) {

				shwRoomC.style.height = "500px";
				mainCont.style.height = $('#RightDownContainer').height() + mainCPadTop + mainCPadBot + "px";
			}
			else {

				shwRoomC.style.height = "auto";
				mainCont.style.height = $('#RightDownContainer').height() + mainCPadTop + mainCPadBot + "px";
			}

			leftDownCont.style.height = $('#RightDownContainer').height();
		}

			/*QUICKSORT*/
		function QuickSort(items, left, right) {

			var index;
   			
   			if (items.length > 1) {
        		
        		if(searchInfoSortBy == "Profit") {

        			index = PartitionProfit(items, left, right); //index returned from partitionProfit
        		}
        		else if(searchInfoSortBy == "Rating") {

        			index = PartitionRating(items, left, right); //index returned from partitionRating
        		}
        		if (left < index - 1) { //more elements on the left side of the pivot
            		
            		QuickSort(items, left, index - 1);
        		}
        		if (index < right) { //more elements on the right side of the pivot
            		
            		QuickSort(items, index, right);
        		}
    		}
		}

		//WHEN USER IS SEARCHING WITH PROFIT SORT
		function PartitionProfit(items, left, right) {
    		
    		var pivot = items[Math.floor((right + left) / 2)]; //middle element
        	var i = left; //left pointer
        	var j = right; //right pointer
    
    		while(i <= j) {
       			
       			while(items[i].priceCost > pivot.priceCost) {
            		
            		i++;
        		}
        		while(items[j].priceCost < pivot.priceCost) {
            		
            		j--;
        		}
        	
        		if(i <= j) {
            		
            		Swap(items, i, j); //swap two elements
            		i++;
            		j--;
        		}
    		}
    		
    		return i;
		}

		//WHEN USER IS SEARCHING WITH RATING SORT
		function PartitionRating(items, left, right) {
    		
    		var pivot = items[Math.floor((right + left) / 2)]; //middle element
        	var i = left; //left pointer
        	var j = right; //right pointer
    
    		while(i <= j) {
       			
       			while(items[i].rating > pivot.rating) {
            		
            		i++;
        		}
        		while(items[j].rating < pivot.rating) {
            		
            		j--;
        		}
        	
        		if(i <= j) {
            		
            		Swap(items, i, j); //swap two elements
            		i++;
            		j--;
        		}
    		}
    		
    		return i;
		}

		function Swap(items, leftIndex, rightIndex) {
    		
    		var temp = items[leftIndex];
    		items[leftIndex] = items[rightIndex];
    		items[rightIndex] = temp;
		}
			/**/

			//WHEN EARN & PLAY IS CLOSING
		function ItemsClosing() {

			var dashC = document.getElementById("DashC");
			dashC.style.opacity = 0;

			var allItems = document.getElementById("AllItemsC");
			allItems.style.opacity = 0;	
		}

		//WHEN 'BUY CREDITS' IS OPEN
		function DownShowRoomContainerChangesOnClickInBuyCredits() {

			var mainC = document.getElementById("MainContainer");
			var shwRoomC = document.getElementById("ShowRoomContainer");
			var leftDownCont = document.getElementById("LeftDownContainer");

			shwRoomC.style.height = "500px";
			mainC.style.height = $('#RightDownContainer').height() + mainCPadTop + mainCPadBot + "px";
			leftDownCont.style.height = $('#RightDownContainer').height();
		}

		//WHEN NO SPECIAL CATEGORY IS OPEN
		function DownShowRoomContainerChangesOnClickOut() {

			var mainC = document.getElementById("MainContainer");
			var shwRoomC = document.getElementById("ShowRoomContainer");
			var leftDownCont = document.getElementById("LeftDownContainer");

			shwRoomC.innerHTML = "";

			shwRoomC.style.height = "500px";
			mainC.style.height = $('#RightDownContainer').height() + mainCPadTop + mainCPadBot + "px";
			leftDownCont.style.height = $('#RightDownContainer').height();
		}

	//<!--EVENTS-->
		//WHEN CHECKBOXES ARE CHECKED OR UNCHECKED - EVENT
		function CheckboxesEvents() {

			searchInfoMainCatgrs = [];

			if(checkerMainCatgrsClicks[this.id]) {

				checkerMainCatgrsClicks[this.id] = 0;
			}
			else if(!checkerMainCatgrsClicks[this.id]) {

				checkerMainCatgrsClicks[this.id] = 1;
			}

			for(var i = 0; i < checkerMainCatgrsClicks.length; i++) {

				if(checkerMainCatgrsClicks[i] == 1) {

					searchInfoMainCatgrs.push(mainCatgrsOfThis[i]);
				}
			}

			CreateFinalShowRItems(itemsOfThisSpecCat)
		}

		//UPDATE WHICH MAIN CATEGORIES ARE CLICKED
		function UpdateMainCatgrArray() {

			for(var i = 0; i < checkerMainCatgrsClicks.length; i++) {

				if(checkerMainCatgrsClicks[i] == 1) {

					searchInfoMainCatgrs.push(mainCatgrsOfThis[i]);
				}
			}
		}

		//WHEN EXTRA BUTTONS ARE CLICKED - EVENT
		function XtraButtonEvents() {

			findXtraButtons = [];

			xtraButtonCurrentClick = xtraButtonsList[this.id];

			if(xtraButtonsThatDecideShwrCont[this.id]) {

				for(var i = 0; i < xtraButtonsThatDecideShwrCont.length; i++) {

					if(i != this.id) {

						if(xtraButtonsThatDecideShwrCont[i]) {

							xtraButtonsThatDecideShwrCont[this.id] = 0;
							break;
						}
					}
				}
			}
			else if(!xtraButtonsThatDecideShwrCont[this.id]) {

				for(var i = 0; i < xtraButtonsThatDecideShwrCont.length; i++) {

					if(i != this.id) {

						if(xtraButtonsThatDecideShwrCont[i]) {

							xtraButtonsThatDecideShwrCont[i] = 0;
							xtraButtonsThatDecideShwrCont[this.id] = 1;
						}
					}
				}
			}

			for(var i = 0; i < xtraButtonsList.length; i++) {

				if(xtraButtonsThatDecideShwrCont[i]) {

					xtraButtonsList[i].style.color = "rgb(136, 170, 239)";
					xtraButtonsList[i].onmousemove = function () {this.style.color = "rgb(136, 170, 239)";};
					xtraButtonsList[i].onmouseout = function () {this.style.color = "gb(136, 170, 239)";};
					xtraButtonsList[i].onmousedown = function () {this.style.color = "rgb(136, 170, 239)";};
					xtraButtonsList[i].onkeypress = function () {this.style.color = "rgb(136, 170, 239)";};
					xtraButtonsList[i].onmouseup = function () {this.style.color = "rgb(136, 170, 239)";};
					xtraButtonsList[i].onkeyup = function () {this.style.color = "rgb(136, 170, 239)";};
				}
				else {

					xtraButtonsList[i].style.color = "rgb(205, 222, 234)";
					xtraButtonsList[i].onmousemove = function () {this.style.color = "orange";};
					xtraButtonsList[i].onmouseout = function () {this.style.color = "rgb(205, 222, 234)";};
					xtraButtonsList[i].onmousedown = function () {this.style.color = "rgb(0, 61, 102)";};
					xtraButtonsList[i].onkeypress = function () {this.style.color = "rgb(0, 61, 102)";};
					xtraButtonsList[i].onmouseup = function () {this.style.color = "rgb(136, 170, 239)";};
					xtraButtonsList[i].onkeyup = function () {this.style.color = "rgb(205, 222, 234)";};
				}
			}

			if(xtraButtonCurrentClick != xtraButtonLastClick) {

				if(xtraButtonLastClick == null) {
					
					counterForLastClick = "ThisIsTheFirstOne";
				}
				else {

					counterForLastClick = xtraButtonLastClick.innerHTML;
				}
				xtraButtonsNamesConstr[this.id].FoundInnerOfEachXtraBut();
			}
			else {

				
			}

			xtraButtonLastClick = xtraButtonCurrentClick;
		}

	</script>

<!--ONLY ONE CHECKBOX AT A TIME(JQUERY)-->
<!--<script>

		$(document).ready(function() {
    		
    		$('.InputCheck').click(function() {
       
        		$('.InputCheck').not(this).prop('checked', false);
    		});
		});

</script>-->

</body>
</html>