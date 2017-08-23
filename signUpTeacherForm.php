<!-- handling signUp teacher -->
<?php 

$con = mysqli_connect("localhost", "root", "", "teachme");
mysqli_query($con,"SET NAMES 'utf8'");


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

$area = implode(" ",$_POST['locations']);
$area = filter_var($area, FILTER_SANITIZE_STRING);
$fields=implode(" ",$_POST['subjects']);
$fields = filter_var($fields, FILTER_SANITIZE_STRING);
$price = $_POST['price'];
$price = filter_var($price, FILTER_VALIDATE_INT);
 $price = filter_var($price, FILTER_SANITIZE_NUMBER_INT);
$aboutMe= $_POST['aboutMyself'];
$aboutMe = filter_var($aboutMe, FILTER_SANITIZE_STRING);
 $aboutMe = htmlspecialchars($aboutMe, ENT_QUOTES);     //prevent xss
$question= $_POST['question'];
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
	$extension = pathinfo($_FILES["profilepicture"]["name"])['extension'];
	$folder="upload_images/";
	$newfilename=$folder.$email.".".$extension;
	move_uploaded_file($_FILES["profilepicture"]['tmp_name'], $newfilename);	
		// insert into the DB
	$insert_sql = "INSERT INTO teachers (fname, lname, email, bdate, password, gender, address, area ,fields , price, pic, aboutMe, question) VALUES ('$fname','$lname','$email', '$bdate', '$password', '$gender', '$address', '$area', '$fields', '$price','$newfilename','$aboutMe' ,'$question' )";

	
	mysqli_query($con,"$insert_sql");
	echo " $insert_sql ";
		mysqli_close($con); // Closing Connection	
		header('location: signIn.php');
	}
	?>
	