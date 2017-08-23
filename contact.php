 	<?php
 	session_start();
 	?>
 	<html>
 	<head>
 		<title dir="rtl">TeachMe - צור קשר</title>
 		<!-- fontAwsome CDN-->
 		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 		<!-- fonts -->
 		<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
 		<!-- external style -CSS -->
 		<link rel="stylesheet" type="text/css" href="assets/CSS/designContact.php">
 		<!-- connectivity functions  -->
 		<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
 		<!-- Hebrew -->
 		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
 	</head>
 	<body>
 		<div id="navbar">
 			<ul id="ulNavbar">
 				<li id="siteName" class="liNavbar right">
 					<a href="index.php">TeachMe <i class="fa fa-book" aria-hidden="true"></i>
 					</a>
 				</li>

 				<li class="liNavbar right" dir="rtl"><a id="canlog" onclick="checkIfConected(<?php echo isset($_SESSION['login_user'])?>)">מצא מורה</a></li>
 				<li class="liNavbar right" dir="rtl"><a href="faq.php">שאלות נפוצות</a></li>
 				<li class="liNavbar right" dir="rtl"><a href="WhoAreWe.php">מי אנחנו</a></li>

 				<li id="drop" class="left dropdown">
 					<a href="#" dir="rtl">צור קשר</a>
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
 				<li class="<?php 
 				if(isset($_SESSION['login_user'])){
 					$classes="liNavbar left redBackground";
 					echo $classes; 
 				}else{
 					$classes="liNavbar left";
 					echo $classes; 
 				}
 				?>">
 				<a href=
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
 		<?php
 		if(isset($_SESSION['login_user'])){
 			if($_SESSION['userOrTeacher']== "users"){
 				echo '<li class="liNavbar left greenBackground"><a href="myDetails.php" dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
 				else{
 					echo '<li class="liNavbar left greenBackground"><a href="myDetailsTeacher.php" dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
 				}
 				?>
 			</ul>
 		</div>
 		<div class="spaceContainer"></div>
 <!-- php script for the submission contact form into db  -->
<?php
$msg=0;
if(isset($_POST['submit'])){
$con = mysqli_connect("localhost", "root", "", "teachme");
mysqli_query($con,"SET NAMES 'utf8'");
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_STRING);// sanitizing the data
$email = filter_var($email, FILTER_SANITIZE_MAGIC_QUOTES);
$name = $_POST['name'];
$name = filter_var($name, FILTER_SANITIZE_STRING);// sanitizing the data
$name = filter_var($name, FILTER_SANITIZE_MAGIC_QUOTES);
$phone = $_POST['phone'];
$phone = filter_var($phone, FILTER_SANITIZE_STRING);// sanitizing the data
$phone = filter_var($phone, FILTER_SANITIZE_MAGIC_QUOTES);
$message = $_POST['message'];
$message = filter_var($message, FILTER_SANITIZE_STRING);// sanitizing the data
$message = filter_var($message, FILTER_SANITIZE_MAGIC_QUOTES);
	// sql querys
		$msg=1;
	$insert_sql = "INSERT INTO contacts (id, email, name, phone, content) VALUES (NULL,'$email', '$name', '$phone', '$message')";
	mysqli_query($con,"$insert_sql");
	mysqli_close($con); // Closing Connection

	}

?>		
		
		
 		<div id="ContactBar">
 			<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> - מעוניינים לשמוע מכם!</p>
 		</div>

 		<div id="formContainer">
 			<form class="contactForm" action="" method="post">
			<?php if($msg==1){echo "<p dir='rtl'>הודעתך נקלטה במערכת! תודה רבה!</p>";}
						else {echo '
 				<input class="inputBox" type="text" name="name" maxlength="30" placeholder="שם מלא" required dir="rtl">
 				<input class="inputBox" type="email" name="email" maxlength="50" required placeholder="אימייל" dir="ltr">
 				<input class="inputBox" type="number" name="phone" minlength="6" maxlength="20" placeholder="טלפון" dir="rtl">
 				<textarea class="inputBoxText" name="message" maxlength="350" required placeholder="כתוב לנו"></textarea>
						
						<button class="inputBoxSubmit" type="submit" name="submit" value="1" ><i class="fa fa-envelope" aria-hidden="true"></i></button>';} 
						?>
 			</form>
 		</div>

 		<img src="assets/img/letters.gif" id="letters">


 	</body>
 	</html>