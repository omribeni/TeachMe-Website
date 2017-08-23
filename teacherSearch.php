<?php 
session_start();
if (!isset($_SESSION['login_user'])){ 
		header("location: index.php"); }// Redirecting To Other Page if not log in(came from back clicks or entered specific url}
?>

<html>
<head>
	<title dir="rtl">TeachMe - תוצאות החיפוש</title>
	<!-- fontAwsome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
	<!-- external style -CSS -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/designSearchResult.php">
	<!-- Hebrew -->
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<!-- javaScript -->
	<script type="text/javascript" src="assets/JS/teacherSearch.php"></script>
	<script type="text/javascript" src="assets/JS/connection_condition.php"></script>

</head>
<!-- navigation bar -->
<div id="navbar">
	<ul id="ulNavbar">
		<li id="siteName" class="liNavbar right">
			<a href="index.php">TeachMe <i class="fa fa-book" aria-hidden="true"></i>
			</a>
		</li>
		<!-- if user is unconnected display alert -->
		<li class="liNavbar right" dir="rtl"><a  id="canlog" onclick="checkIfConected(<?php echo isset($_SESSION['login_user'])?>)">מצא מורה</a></li>
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
<div id="searchBar">
	<p id="sentBar" dir="rtl"><span id="sitenameBar">TeachMe</span> - רק עוד צעד קטן לשיעור גדול...</p>
</div>
<div class="searchResults">
	<!-- filling search results using php -->
	<?php
	$connection = mysqli_connect("localhost", "root", "", "teachme");
	mysqli_query($connection, "SET NAMES 'utf8'");
	$searchSubject = $_POST['subject'];
	$searchLocation = $_POST['location'];
	$sql = "SELECT * from teachers where fields LIKE '%{$searchSubject}%' AND area LIKE '%{$searchLocation}%'";
	if(mysqli_num_rows(mysqli_query($connection, $sql))==0){
		// in case search finds none
		echo "<p id='sry'>מצטערים! אין מורים לבחירה. נסה בחירה אחרת</p>";
	}else{
		// loop for iterating over the query results and displaying
		foreach (mysqli_query($connection, $sql) as $row) {
			$email = $row['email'];
			$likeQuery = "SELECT * FROM preferences WHERE emailofteacher='$email'";
			$likeNum = mysqli_num_rows(mysqli_query($connection, $likeQuery));
			echo '
			<hr>
			<div class="teacherContainer">
				<img class="teacherPic" src="'.$row['pic'].'">
				<div class="right">
					<form action="teacherProfile.php" method="get">
						<input type="hidden" name="teachId" value='.$row['email'].'>
						<input dir="rtl" type="submit" name="submit" id="likeLink" value="'.$row['fname'].' '.$row['lname'].'">
					</form>
					<span class="sMarg">כתובת מייל:<span>'.$row["email"].'</span></span><br>
					<span class="sMarg">מחיר:<span>'.$row["price"].'</span></span><br>
					<span class="sMarg">אהבו אותי:<span>'.$likeNum.'</span></span><br>
				</div>
			</div>
			';
		}
	}
	mysqli_close($connection);
	?>
</div>

<!-- jump up button -->
<button id="jumpToTop" onclick="goUp()" dir="rtl"><i class="fa fa-arrow-up" aria-hidden="true"></i> קפוץ למעלה</button>

</body>
</html>
