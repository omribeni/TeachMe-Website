// password and mail validation
function checkForm(form){
    if(form.password.value == form.fname.value) {
    	alert("שגיאה: אנא בחר סיסמא שונה משם המשתמש!");
    	form.password.focus();
    	return false;
    }
    if(form.password.value != form.confirm_password.value) {
    	alert("שגיאה: אנא וודא כי שתי הסיסמאות שהכנסת זהות!");
        form.password.focus();
        return false;
    }
    var x = form.email.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        form.email.focus();
        alert("שגיאה: כתובת הדואר אינה כתובת דואר תיקנית!");
        return false;
    }    
	
	
	return true; 
}

function checkpic(form){
var File = document.getElementById("profilepicturefile");
	var oFile = document.getElementById("profilepicturefile").files[0];

		if (oFile.size > 2097152) // 2 mb for bytes.
		{
			alert("אנא בחר קובץ קטן מ2 מגבייט!");
			return false;
		}
		var fileName = File.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(!(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"))
		{
			alert("Upload Gif or Jpg images only");
			return false;
		} 
		return true;	
		
}