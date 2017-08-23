 	<?php
 	session_start();
	if (!isset($_SESSION['login_user'])){ 
		header("location: index.php"); }// Redirecting To Other Page if not log in(came from back clicks or entered specific url}
 	?>
 	<html>
 	<head>
 		<title dir="rtl">TeachMe - הפרופיל שלי</title>
 		<!-- fontAwsome CDN-->
 		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 		<!-- fonts -->
 		<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
 		<!-- external style -CSS -->
 		<link rel="stylesheet" type="text/css" href="assets/CSS/designMyDetails.php">
 		<!--connection condition check  -->
 		<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
 		<!-- Hebrew -->
 		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
 		<!-- JS -->
 		<script type="text/javascript" src="assets/JS/changes.php"></script>
 	</head>
 	<body>

 		<?php
 		if (!isset($_SESSION['login_user'])){ 
		header("location: index.php"); }// Redirecting To Other Page if not log in(came from back clicks or entered specific url}
		
		$msg = ""; 
		$changed=0;
		$connection = mysqli_connect("localhost", "root", "", "teachme");
		mysqli_query($connection, "SET NAMES 'utf8'");

		if (isset($_POST['changedFname'])) {
			$changed=$_POST['changedFname'];
			$changed = filter_var($changed, FILTER_SANITIZE_STRING);
			$culom="fname";
			$_SESSION['user_name'] = $changed;
		}elseif (isset($_POST['changedLname'])){
			$changed=$_POST['changedLname'];
			$changed = filter_var($changed, FILTER_SANITIZE_STRING);
			$culom="lname";
		}elseif (isset($_POST['changedAdd'])){
			$changed=$_POST['changedAdd'];
			$changed = filter_var($changed, FILTER_SANITIZE_STRING);
			$culom="address";
		}elseif (isset($_POST['changedPass'])){
			$changed=$_POST['changedPass'];
			$changed = filter_var($changed, FILTER_SANITIZE_STRING);
			$culom="password";
		}elseif (isset($_POST['changedbdate'])){
			$changed=$_POST['changedbdate'];
			$changed = filter_var($changed, FILTER_SANITIZE_NUMBER_INT);
			$culom="bdate";
		}elseif (isset($_POST['changedPrice'])){
			$changed=$_POST['changedPrice'];
			$changed=filter_var($changed, FILTER_VALIDATE_INT);
			$changed=filter_var($changed, FILTER_SANITIZE_NUMBER_INT);
			$culom="price";
		}elseif (isset($_FILES["changedPic"]["tmp_name"])){
			chmod($_SESSION['picpath'],0755); //Change the file permissions if allowed
			unlink($_SESSION['picpath']); //remove the file
			$extension = pathinfo($_FILES["changedPic"]["name"])['extension'];
			$folder="upload_images/";
			$email=$_SESSION['login_user'];
			$newfilename=$folder.$email.".".$extension;
			move_uploaded_file($_FILES["changedPic"]["tmp_name"], $newfilename);
			$_SESSION['picpath'] = $newfilename;
			$changed=$newfilename; 
			$culom="pic";
		}elseif (isset($_POST['deleteme'])){
			$email = $_SESSION['login_user'];
			$sql = "delete from teachers where email='$email'";
			$ans = mysqli_query($connection, $sql);	
			chmod($_SESSION['picpath'],0755); //Change the file permissions if allowed
			unlink($_SESSION['picpath']); //remove the file
			$sql2 = "delete from preferences where emailofteacher='$email'";
			$ans = mysqli_query($connection, $sql2);		
			header("location: logout.php"); // Redirecting To Other Page						
		}

		if($changed){
		$email = $_SESSION['login_user'];   //email is primery key
		$table = $_SESSION['userOrTeacher'];   
		$changed = htmlspecialchars($changed, ENT_QUOTES);     //prevent xss
		$sql = "update $table set $culom = '$changed' where email='$email'";
		$ans = mysqli_query($connection, $sql);
	}		
	mysqli_close($connection); // Closing Connection	
	?>
	<!-- navigation bar -->
	<div id="navbar">
		<ul id="ulNavbar">
			<li id="siteName" class="liNavbar right">
				<a href="index.php">TeachMe <i class="fa fa-book" aria-hidden="true"></i>
				</a>
			</li>
			<!-- if user is unconnected display alert -->
			<li class="liNavbar right" dir="rtl"> <a id="canlog" onclick="checkIfConected(<?php echo isset($_SESSION['login_user'])?>)">מצא מורה</a></li>
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

	<!-- retriving the correct teacher data based on the unique email passed from search page -->
	<?php
	$connection = mysqli_connect("localhost", "root", "", "teachme");
	mysqli_query($connection, "SET NAMES 'utf8'");
	$email = $_SESSION['login_user'];
	$sql4 = "select * from teachers where email= '$email'";
	$row =  mysqli_fetch_array(mysqli_query($connection, $sql4));
	
	$sql3 = "select * from preferences where emailofteacher='$email'";
	$likers =  mysqli_num_rows(mysqli_query($connection, $sql3));
	mysqli_close($connection);
	?>

	<div id="profileBar">
		<p id="sentBar" dir="rtl"> <span id="sitenameBar">TeachMe</span> - הפרופיל שלי</p>
	</div>
	<div class="container" >
		<div id="imageCont">
			<img id="profImg" src=" <?php echo $row['pic']?> ">
		</div>
		<div id="detailsCont">
			
			
			<table class="details">
				<tr>
					<td class="rightTd">שם פרטי: </td>
					<td id="fname" class="middleTd"><?php echo $row['fname'] ?> </td>
					<td><button onclick="changeFname()">ערוך</button></td>
				</tr>
				<tr>
					<td class="rightTd">שם משפחה: </td>
					<td id="lname" class="middleTd"><?php echo $row['lname'] ?></td>
					<td><button onclick="changeLname()">ערוך</button></td>
				</tr>
				<tr>
					<td class="rightTd">כתובת: </td>
					<td id="address" class="middleTd"><?php echo $row['address'] ?></td>
					<td><button onclick="changeAdd()">ערוך</button></td>
				</tr>
				<tr>
					<td class="rightTd">מחיר: </td>
					<td id="price" class="middleTd"><?php echo $row['price'] ?></td>
					<td><button onclick="changePrice()">ערוך</button></td>
				</tr>
				<tr>
					<td class="rightTd">תמונה: </td>
					<td id="pic1" class="middleTd"></td>
					<td><button onclick="changePic()">ערוך</button></td>
				</tr>
				<tr>
					<td class="rightTd">תאריך לידה: </td>
					<td id="bdate" class="middleTd"><?php echo $row['bdate'] ?> </td>
					<td><button onclick="changebdate()">ערוך</button></td>
				</tr>
				<tr>
					<td id="password" class="rightTd"><button class="long-btn" onclick="changePass()">שנה סיסמא</button></td>
				</tr>
				<tr>
					<td id="deleteme" class="rightTd"><form action = ""  method = "post"> <button  class="long-btn" onclick="return confirm('Are you sure you want to delete this account?')" type = "submit" name="deleteme" >מחק חשבון</button> </form></td>
				</tr>
				
				<tr>
					<td>כמות האנשים שמעדיפים אותך: </td>
					<td> <?php echo $likers ?> </td>
				</tr>
				
			</table>
		</div>
	</div>

</body>
</html>