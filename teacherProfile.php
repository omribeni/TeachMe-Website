	<?php
	session_start();
	if (!isset($_SESSION['login_user'])){ 
		header("location: index.php"); }// Redirecting To Other Page if not log in(came from back clicks or entered specific url}
	$connection = mysqli_connect("localhost", "root", "", "teachme");
// getting the data for the current teacher
	mysqli_query($connection, "SET NAMES 'utf8'");
	$teacheremail = $_GET['teachId'];;
	$sql = "SELECT * FROM teachers WHERE email='$teacheremail'";
	$row = mysqli_fetch_array(mysqli_query($connection, $sql));
	$name = $_GET['submit'];
// query for "likes" number
	$sql2 = "select * from preferences where emailofteacher='$teacheremail'";
	$likers =  mysqli_num_rows(mysqli_query($connection, $sql2));

	$studentemail = $_SESSION['login_user'];
// query for checking if already liked
	$sql1or0 = "select * from preferences where emailofteacher='$teacheremail' AND emailofstudent='$studentemail'";
	$ifIliked =  mysqli_num_rows(mysqli_query($connection, $sql1or0));

	if(isset($_POST['like']))	{
// query in case of like
		$sql3 = "INSERT INTO preferences (emailofstudent ,emailofteacher ) VALUES ('$studentemail','$teacheremail')";
		mysqli_query($connection, $sql3);
		$likers =  mysqli_num_rows(mysqli_query($connection, $sql2));
		$ifIliked=1;
	}

	if(isset($_POST['unlike']))	{

		$sql3 = "delete from preferences where emailofstudent='$studentemail' AND emailofteacher='$teacheremail'" ;
		mysqli_query($connection, $sql3);
		$likers =  mysqli_num_rows(mysqli_query($connection, $sql2));
		$ifIliked=0;
	}			
	?>
	<html>
	<head>
		<title>TeachMe - פרופיל מורה</title>
		<!-- fontAwsome CDN-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
		<!-- external style -CSS -->
		<link rel="stylesheet" type="text/css" href="assets/CSS/designTeacherProfile.php">
		<!-- Hebrew -->
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<!-- javsScript -->
		<script type="text/javascript" src="assets/JS/teacherSearch.php"></script>
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
		<div id="teacherBar">
			<p id="sentBar" dir="rtl">
				<?php 
				echo $name;
				?>
			</p>
		</div>
		<!-- teacher profile data -->
		<div id="container">
			<div id="upperContainer">
				<img id="teacherPic" src="<?php echo $row['pic']?>">
				<div>
					<?php
					$aboutMe = $row['aboutMe'];
					$price = $row['price'];
					$locations = $row['area'];
					?>
					<div id="detailsCont">
						<table dir="rtl" id="details">
							<tr>
								<td class="padd">על עצמי:</td>
								<td class="padd"><?php echo $aboutMe;?></td>
							</tr>
							<tr>
								<td class="padd">צור קשר:</td>
								<td class="padd"><?php echo $teacheremail;?></td>				
							</tr>
							<tr>
								<td class="padd">מחיר:</td>
								<td class="padd"><?php echo $price;?></td>
							</tr>
							<tr>
								<td class="padd">הלייקים שלי:</td>
								<td class="padd"><?php echo "$likers";?></td>
							</tr> <!-- //only student can prefer teachers -->
							<?php if($_SESSION['userOrTeacher'] == 'users'){
							//liked/disliked preview options 
								if(!$ifIliked){
									echo '     
									<tr>
										<td id="like"><form action = "" method = "post">  <button class="likeBtn" type = "submit" name="like" ><i class="fa fa-thumbs-up " aria-hidden="true"></i></button> </form></td>
									</tr>';}
									else{
										echo '     
										<tr>
											<td id="unlike"><form action = "" method = "post"> <button type = "submit" name="unlike" class="likeBtn" ><i class="fa fa-thumbs-down like-sizing" aria-hidden="true"></i></button> </form></td>
										</tr>';}
									}
									?>
								</table>

							</div>

						</div>
					</div>

				</div>


			</body>
			</html>
