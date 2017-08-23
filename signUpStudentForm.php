<!-- handling signUp studnet -->
<?php 
$con = mysqli_connect("localhost", "root", "", "teachme");
mysqli_query($con,"SET NAMES 'utf8'");

if( !$con ) {
	echo "<script>console.log('Could not connect: ');</script>";
}
	// sanitizing the data
$fname = $_POST['fname'];
$fname = filter_var($fname, FILTER_SANITIZE_STRING);
$fname = htmlspecialchars($fname, ENT_QUOTES);     //prevent xss
$lname = $_POST['lname'];
$lname = filter_var($lname, FILTER_SANITIZE_STRING);
$password = $_POST['password'];
$password = filter_var($password, FILTER_SANITIZE_STRING);
 $password = filter_var($password, FILTER_SANITIZE_MAGIC_QUOTES);
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_SANITIZE_MAGIC_QUOTES);
$address = $_POST['address'];
$address = filter_var($address, FILTER_SANITIZE_STRING);
$gender = $_POST['gender'];
$gender = filter_var($gender, FILTER_SANITIZE_STRING);
$bdate = $_POST['bdate'];
$bdate = filter_var($bdate, FILTER_SANITIZE_STRING);
$question = $_POST['question'];
$question = filter_var($question, FILTER_SANITIZE_STRING);
$question = filter_var($question, FILTER_SANITIZE_MAGIC_QUOTES);
	// sql querys
$sql = "select * from users where email='$email'";
$sql2 = "select * from teachers where email='$email'";
$row =  mysqli_fetch_array(mysqli_query($con, $sql));
$row2 = mysqli_fetch_array(mysqli_query($con, $sql2));
if ($row || $row2){
			// in case the mail is already taken
	header('location: takenMail.php');
}
else{
		  // insert into the DB
	$insert_sql = "INSERT INTO users (fname, lname, email, bdate, password, gender, address ,question ) VALUES ('$fname','$lname','$email', '$bdate', '$password', '$gender', '$address', '$question')";

	mysqli_query($con,"$insert_sql");
		mysqli_close($con); // Closing Connection	
		header('location: signIn.php');
	}
	?>
