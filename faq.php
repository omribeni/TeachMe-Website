<?php 
session_start();
?>
<html>
<head>
	<title dir="rtl">TeachMe - שאלות נפוצות</title>
	<!-- fontAwsome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
	<!-- external style -CSS -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/designFaq.php">
	<!-- connectivity functions  -->
	<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
	<!-- Hebrew -->
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<!-- jsvsScript -->
	<script type="text/javascript" src="assets/JS/accScript.php"></script>
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
			<li class="liNavbar right" dir="rtl"><a id="canlog" onclick="checkIfConected(<?php echo isset($_SESSION['login_user'])?>)"> מצא מורה </a></li>
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
			<!-- if user is connected display login o.w display log-out -->
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
	</li>
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
	<div class="spaceContainer"></div>

	<div id="FAQbar">
		<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> - שאלות, תשובות ומה שביניהן...</p>
	</div>

	<img id="FAQimg" src="assets/img/FAQ.jpg">

	<!-- questions and answers -->
	<div id="question-box" dir="rtl">
		<button class="accordion" onclick="toggle()">איך אוכל למצוא מורה? <i class="left fa fa-chevron-down" aria-hidden="true" ></i></button>
		<div class="panel">
			<p>בקלות! כל שעליך לעשות בכדי למצוא מורה הוא להכנס ללשונית "מצא מורה", לבחור אזור ותחום אותו תרצה ללמוד – ולהקיש חיפוש. רשימת המורים תוצג לפניכם תוך רגע, וכל שנשאר לכם לעשות הוא ליצור קשר עם המורה אצלו תרצו ללמוד!</p>
		</div>
		<button class="accordion" onclick="toggle()">איך אוכל למצוא תלמיד? <i class="left fa fa-chevron-down" aria-hidden="true"></i></button>
		<div class="panel">
			<p>בזכות TeachMe – אינכם צריכים עוד לרדוף אחרי התלמידים, אלא פשוט לתת לתלמידים למצוא אתכם! כל שעליכם לעשות הוא להמתין – ובמידה ותתאימו לחיפוש תלמיד – הוא כבר יצור איתכם קשר.</p>
		</div>
		<button class="accordion" onclick="toggle()">כיצד נרשמים לאתר? <i class="left fa fa-chevron-down" aria-hidden="true"></i></button>
		<div class="panel">
			<p>ההרשמה לאתר היא פשוטה מאוד, כל שעליכם הוא לבחור בין הרשמת פרופיל מורה לפרופיל תלמיד – למלא את הפרטים הנדרשים – וזהו, כעת אתם חלק מTeachMe.</p>
		</div>
	</div>

</body>
</html>