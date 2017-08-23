// change href depending on user status
function checkIfConected(isConnected){
	if(isConnected){
		if(document.getElementById("findTeacherBtn"))
			document.getElementById("findTeacherBtn").href="findTeacher.php";
		document.getElementById("canlog").href="findTeacher.php";
	}else{
	alert("תחילה עליך להתחבר");
	}	
	
}