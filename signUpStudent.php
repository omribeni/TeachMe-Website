<?php 
session_start();
?>
<html>
<head>
	<title dir="rtl">TeachMe - רישום תלמיד</title>
	<!-- fontAwsome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
	<!-- external style -CSS -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/signUpStudentDesign.php">
	<!-- Hebrew -->
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<!-- JAvA-SCriPt -->
	<script type="text/javascript" src="assets/JS/password_js.php"></script>
	<!-- JS -->
	<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
</head>
<body>
	<!-- navigation bar -->
	<div id="navbar">
		<ul id="ulNavbar">
			<li id="siteName" class="liNavbar right">
				<a href="index.php">TeachMe <i class="fa fa-book" aria-hidden="true"></i>
				</a>
			</li>
			<!-- if user is unconnected display alert -->

			<li class="liNavbar right" dir="rtl"><a id="canlog" onclick=checkIfConected(<?php echo isset($_SESSION['login_user'])?>)>מצא מורה</a></li>
			<li class="liNavbar right" dir="rtl"><a href="faq.php">שאלות נפוצות</a></li>
			<li class="liNavbar right" dir="rtl"><a href="WhoAreWe.php">מי אנחנו</a></li>

			<li id="drop" class="left dropdown">
				<a href="#" id="dropbtn" dir="rtl">צור קשר</a>
				<div class="dropdown-content">
					<a href="https://www.facebook.com/TeachMeIL/">Facebook</a>
					<a href="contact.php" dir="rtl">דרך האתר</a>
					 						<?php
 							if(isset($_SESSION['login_user'])){
 								if($_SESSION['login_user']=="manager@teachme.co.il"){
 									echo "<a href='manager.php' dir='rtl' >הודעות שהתקבלו</a>";
 								}
 							}
 						?>
				</div>
			</li>
			<li id="drop" class="left dropdown" dir="rtl">
				<a href="#" id="dropbtn">הוסף פרופיל</a>
				<div class="dropdown-content">
					<a href="signUpStudent.php" dir="rtl" >תלמיד חדש</a>
					<a href="signUpTeacher.php" dir="rtl" >מורה חדש</a>
				</div>
			</li>
			<!-- if user is connected display login o.w display log-out + switch classes-->
			<li class="<?php 
			if(isset($_SESSION['login_user'])){
				$classes="liNavbar left redBackground";
				echo $classes; 
			}else{
				$classes="liNavbar left";
				echo $classes; 
			}
			?>"><a href=
			<?php
			if(!isset($_SESSION['login_user'])){
				$link = "signIn.php";
				echo $link;
			}else{
				$link = "logout.php";
				echo $link;
			}
			?>
			dir="rtl" >
			<?php
			if(isset($_SESSION['login_user'])){
				echo "התנתק";
			}else{
				echo "התחבר";
			}
			?>	
		</a>
	</li dir="rtl">
	<!-- if user is connected display user-name -->
	<?php
	if(isset($_SESSION['login_user'])){
		if($_SESSION['userOrTeacher']== "users"){
			echo '<li class="liNavbar left greenBackground"><a href="myDetails.php"dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			else{
				echo '<li class="liNavbar left greenBackground"><a href="myDetailsTeacher.php"dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			}
			?>
		</ul>
	</div>
	<div class="padding-from-top"></div>
	<div id="FAQbar">
		<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> הוספת פרופיל תלמיד</p>
	</div>
	<!-- signUp student form -->
	<form name="student-form" method="post" action="signUpStudentForm.php" onsubmit="return checkForm(this)&&checkpic(this);" class="sign-up-student-form text-font" dir="rtl">
		<div class="form-content">
			<h1 class="font-family sign-up-header">הרשמה</h1>
			<div class="sign-up-spacing form-spacing full-width">
				<input type="text" class="half-width" minlength="2" maxlength="30" name="fname" placeholder="שם פרטי" required>
				<input type="text" class="half-width" minlength="2" maxlength="30" name="lname" placeholder="שם משפחה" required>
			</div>
			<div class="form-spacing full-width">
				<input type="text" class="full-width" name="address" minlength="3" maxlength="70" placeholder="כתובת" required>
				<input type="email" class="full-width" name="email" maxlength="50" placeholder="אימייל" dir="ltr" required>
				<input type="password" value="" minlength="6" maxlength="30" name="password" placeholder="סיסמא" dir="ltr" required>
				<input type="password" minlength="6" maxlength="30" name="confirm_password" placeholder="וידוא סיסמא" dir="ltr" required>
				<div>
					<label for="male">זכר</label>
					<input type="radio" name="gender" value="male" required>
					<label for="female">נקבה</label>
					<input type="radio" name="gender" value="female" required>
					<input type="date" name="bdate" min="1900-01-01" max="2016-06-01" placeholder="גיל" required>
					<h6 class="no-bottom-margin">למען שחזור סיסמא, אנא הכנס:</h6>
					<input type="text" name="question" minlength="2" maxlength="30" placeholder="שם חיה אהובה" required><br>
					<div class="submit-button">
						<input id="round-button" type="submit" value="הירשם">
					</div><br><br>
				</div>
			</div>
		</div>
	</form>
</body>
</html>

