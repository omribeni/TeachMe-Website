<?php 
session_start();
?>
<html>
<head>
	<title dir="rtl">TeachMe - שחזור סיסמא</title>
	<!-- fontAwsome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
	<!-- external style -CSS -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/forgotPasswordDesign.php">
	<!-- Hebrew -->
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
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
			<li class="liNavbar right" dir="rtl"><a onclick=checkIfConected(<?php echo isset($_SESSION['login_user'])?>)>מצא מורה</a></li>
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
			<li class="liNavbar left"><a href= "signIn.php" dir="rtl" >התחבר</a>
			</li>
		</ul>
	</div>
	<div class="padding-from-top"></div>
	<div id="FAQbar">
		<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> חשבון משתמש</p>
	</div>
	<br>
	<!-- regaining forgotten password based on question -->
	<?php 
	$thepass='';
	if ( isset($_POST['questionAnswer'])) {
		$connection = mysqli_connect("localhost", "root", "", "teachme");
		mysqli_query($connection, "SET NAMES 'utf8'");
			$questionAnswer = $_POST['questionAnswer'];   //email is primery key
			$questionAnswer = filter_var($questionAnswer, FILTER_SANITIZE_STRING);
			 $questionAnswer = mysqli_real_escape_string($connection, $questionAnswer);
			$email = $_POST['email'];  
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $email = mysqli_real_escape_string($connection, $email);   //against sql injection
			$sql = "select * from users where question='$questionAnswer' AND email='$email'";
			$sql2 = "select * from teachers where question='$questionAnswer' AND email='$email'";
			$row =  mysqli_fetch_array(mysqli_query($connection, $sql));
			$row2 = mysqli_fetch_array(mysqli_query($connection, $sql2));

			if($row){
				$thepass = $row['password'];
			}elseif($row2){
				$thepass=$row2['password'];
			}
			if($thepass==''){ 
			// print sorry no such email record

				echo '<form action = "" method = "post" class="forgot-password-form text-font" dir="rtl">
				<div class="form-content">
					<p class="grey-text" dir="rtl"><b> שכחת סיסמא? </b>הזן את כתובת הדואר שלך ואת החיה האהובה עלייך, וקבל את הסיסמא שלך!</p>			
					<hr>
					<p class="sign-up-header"> מצטערים, הפרטים שהזנתם לא קיימים במערכת </p>
					<input type="text" placeholder="כתובת דואר" name="email" required>
					<input type="text" placeholder="חיה אהובה" name="questionAnswer" required>
					<br><br>
					<div class="submit-button">
						<input id="round-button" type="submit" value="שלח">
					</div>
				</div>
			</form>' ;
		}
		//print thepass
		else{
			echo "<div action = '' method = 'post' class='forgot-password-form text-font sign-up-header' dir='rtl'>
			<div class='form-content'>
				<p class='grey-text' dir='rtl'><b> שכחת סיסמא? </b>הזן את כתובת הדואר שלך ואת החיה האהובה עלייך, וקבל את הסיסמא שלך!</p>			
				<hr>
				<p> האימות התבצע בהצלחה, להלן הסיסמא עבור משתמש $email היא $thepass </p>
				<br><br>
			</div>
		</div>
	</div>";
}

}else 
	//if there was a problam with submitting the question
echo
'<form action = "" method = "post" class="forgot-password-form text-font" dir="rtl">
<div class="form-content">
	<p class="grey-text"><b> שכחת סיסמא? </b>הזן את כתובת הדואר שלך ואת החיה האהובה עלייך, וקבל את הסיסמא שלך!</p>			
	<hr>
	<input type="text" placeholder="כתובת דואר" name="email" dir="ltr" required>
	<input type="text" placeholder="חיה אהובה" name="questionAnswer" dir="ltr" required>
	<br><br>
	<div class="submit-button">
		<input id="round-button" type="submit" value="שלח">
	</div>
</div>
</form>';

?>
</body>
</html>
