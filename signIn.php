 	<?php
 	session_start();
 	?>
 	<html>
 	<head>
 		<title dir="rtl">TeachMe - התחבר</title>
 		<!-- fontAwsome CDN-->
 		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 		<!-- fonts -->
 		<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
 		<!-- external style -CSS -->
 		<link rel="stylesheet" type="text/css" href="assets/CSS/designSignIn.php">
 		<!--connection condition check  -->
 		<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
 		<!-- Hebrew -->
 		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
 	</head>
 	<body>

 		<?php
$error=''; // Variable To Store Error Message
if (isset($_POST['trytolog'])) {
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "", "teachme");
		mysqli_query($connection, "SET NAMES 'utf8'");
// Define $username and $password
		$email=$_POST['email'];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$email = filter_var($email, FILTER_SANITIZE_MAGIC_QUOTES);   // against sql injection
		$email = mysqli_real_escape_string($connection, $email);   //against sql injection
		$password=$_POST['password'];
		$password = filter_var($password, FILTER_SANITIZE_STRING);
		$password = mysqli_real_escape_string($connection,$password);
// SQL query to fetch information of registerd users and finds user match.
	$sql = "select * from users where password='$password' AND email='$email'";
	$sql2 = "select * from teachers where password='$password' AND email='$email'";
	$row =  mysqli_fetch_array(mysqli_query($connection, $sql));
	$row2 = mysqli_fetch_array(mysqli_query($connection, $sql2));
	if ($row){
			$_SESSION['login_user']= $email; // Initializing Session connectivity
			$_SESSION['user_name']= $row['fname'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['bdate'] = $row['bdate'];
			$_SESSION['userOrTeacher']= "users";
			header("location: index.php"); // Redirecting To Other Page
		}
		else if ($row2){
			$_SESSION['login_user']= $email; // Initializing Session connectivity
			$_SESSION['user_name']= $row2['fname'];
			$_SESSION['gender'] = $row2['gender'];
			$_SESSION['bdate'] = $row2['bdate'];
			 // Initializing Session user name
			$_SESSION['userOrTeacher']= "teachers";
			$_SESSION['picpath']= $row2['pic'];
			header("location: index.php"); // Redirecting To Other Page
		} else {
			$error = "שם משתמש או סיסמא אינם נכונים";
		}
mysqli_close($connection); // Closing Connection
}

?>

<!-- navigation bar -->
<div id="navbar">
	<ul id="ulNavbar">
		<li id="siteName" class="liNavbar right">
			<a href="index.php">TeachMe <i class="fa fa-book" aria-hidden="true"></i>
			</a>
		</li>
		<!-- if the user is unconnected display alert -->
		<li class="liNavbar right" dir="rtl"><a onclick=checkIfConected(<?php echo isset($_SESSION['login_user'])?>)>מצא מורה</a></li>
		<li class="liNavbar right" dir="rtl"><a href="faq.php">שאלות נפוצות</a></li>
		<li class="liNavbar right" dir="rtl"><a href="WhoAreWe.php">מי אנחנו</a></li>

		<li id="drop" class="left dropdown">
			<a href="#" id="dropbtn" dir="rtl">צור קשר</a>
			<div class="dropdown-content">
				<a href="https://www.facebook.com/TeachMeIL/">Facebook</a>
				<a href="contact.php" dir="rtl">דרך האתר</a>
			</div>
		</li>
		<li id="drop" class="left dropdown" dir="rtl">
			<a href="#" id="dropbtn">הוסף פרופיל</a>
			<div class="dropdown-content">
				<a href="signUpStudent.php" dir="rtl" >תלמיד חדש</a>
				<a href="signUpTeacher.php" dir="rtl" >מורה חדש</a>
			</div>
		</li>
		<!-- if the user is connected display login o.w, display log-out -->
		<li class="liNavbar left"><a href=
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
			echo '<li class="liNavbar left greenBackground"><a href="myDetails.php"dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			else{
				echo '<li class="liNavbar left  greenBackground"><a href="myDetailsTeacher.php"dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			}
			?>
		</ul>
	</div>
	<div class="spaceContainer"></div>
	<div id="SignInBar">
		<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> - רק עוד צעד קטן לשיעור גדול...</p>
	</div>
	<!-- signIn form -->
	<div id="formContainer" dir="rtl"> 
		<form class="sign-up-form" action="" method="post">
			<div >
				<span>שם משתמש או כתובת מייל<span/><br>	
					<input id="input-box-style" type="email" maxlength="50" name="email" dir="ltr" required>
				</div>
				<div>
					<span>סיסמא<span/><br>	
						<input id="input-box-style" type="password" maxlength="30" name="password" dir="ltr" required>

					</div>
					<input id="subBtn" type="submit" name="trytolog">
					<p><?php echo $error; ?></p>
				</form>

			</div>
			<!-- retrieve password -->
			<div id="passwordRet">
				<a href="forgotPassword.php" >שכחתי סיסמא </a>
			</div>
			<!-- lower images -->
			<div id="imgsHolder">
				<img src="assets/img/signIn1.jpg" id="img1">
				<img src="assets/img/signIn2.jpg" id="img2">
				<img src="assets/img/signIn3.jpg" id="img3">
			</div>


		</body>
		</html>
