<?php 
session_start();

?>

<html>
<head>
	<title>TeachMe</title>
	<!-- fontAwsome CDN-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Secular+One|Suez+One"" rel="stylesheet">
	<!-- external style -CSS -->
	<link rel="stylesheet" type="text/css" href="assets/CSS/designManager.php">
	<!-- connectivity functions  -->
	<script type="text/javascript" src="assets/JS/connection_condition.php"></script>
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
			<li class="liNavbar right" dir="rtl"> <a id="canlog" onclick="checkIfConected(<?php echo isset($_SESSION['login_user'])?>)"> מצא מורה </a></li>
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
			echo '<li class="liNavbar left greenBackground" dir="rtl"><a href="myDetails.php" dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			else{
				echo '<li class="liNavbar left greenBackground dir="rtl"><a href="myDetailsTeacher.php" dir="rtl"> שלום, '.$_SESSION['user_name']. ' </a><li>  ';}
			}
			?>
		</ul>
	</div>
	<div class="spaceContainer"></div>

        <?php
		if(!(isset($_SESSION['login_user']) && $_SESSION['login_user']=="manager@teachme.co.il")){exit();}
        $con = mysqli_connect("localhost", "root", "", "teachme");  #openning the connection
        mysqli_query($con, "SET NAMES 'utf8'");
       
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		if(isset($_POST['del'])){
			$id = $_POST['del'];
			$sqldel = "delete from contacts where id='$id'" ;
			$ans = mysqli_query($con, $sqldel);
		}
			
        (count($_GET) == 0) ? $page = 1 : $page = $_GET['page'];

        #setting the page number
        //var_dump($_GET);
        $rowSpan = 3;
        $startRow = $rowSpan * ($page - 1);
        
        $sql = "SELECT * FROM contacts LIMIT $rowSpan offset $startRow ";
        $queryData = mysqli_query($con, $sql);
		
		$sql2 = "SELECT * FROM contacts";
		$allData = mysqli_query($con, $sql2);
        $totalRows = mysqli_num_rows($allData);
        $lastPage = ceil($totalRows/$rowSpan);  //rounds up number

        #defining the table header
        echo "<div class='tableCont'><table class='tableCotntact'>"
            . "<h4 class='cmntH'>CONTACTS (Page $page of $lastPage)</h4>"
            . "<thead><tr><th>מס</th><th>אימייל</th><th>מאת</th><th>טלפון</th><th>תוכן</th>"
            . "</tr></thead>";
        $counter = $startRow + 1;
        echo "<tbody>";
        while ($row = mysqli_fetch_array($queryData)) {
            #fetching each row as assoc and numeric array

            echo "<tr><td>" . $counter++ . "</td>";
            for ($i = 1; $i < count($row)/2; $i++) {
                echo "<td dir='rtl'>$row[$i]</td>";
            }
			echo '<td><form action = "manager.php" method = "post"><button type = "submit" name="del" value="'.$row["id"].'">מחק</button></form></td>'; 
            echo  "</tr>" ;
        }
        echo "</tbody></table><div>";
        #set the nav arrows
        $url = $_SERVER["PHP_SELF"];
		$url = htmlspecialchars($url, ENT_QUOTES);     //prevent xss
        $backPage = $page - 1;
        $nextPage = $page + 1;
        if ($page != 1) {
            echo "<a class='aNon' href='".$url."?page=1'> <i class='fa fa-backward' aria-hidden='true'></i> </a>";     // nbsp is space 
            echo "<a class='aNon' href='".$url."?page=".$backPage."'> <i class='fa fa-arrow-left' aria-hidden='true'></i> </a>";
        }
        echo "-";
        if ($page != $lastPage) {
            echo "<a class='aNon' href='".$url."?page=".$nextPage."'> <i class='fa fa-arrow-right' aria-hidden='true'></i> </a>";
            echo "<a class='aNon' href='".$url."?page=".$lastPage."'> <i class='fa fa-forward' aria-hidden='true'></i> </a>";
        }
        mysqli_close($con);
        ?>
    </body>
</html>
