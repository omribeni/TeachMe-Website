// functions for details edition

function validpic(form){
var File = document.getElementById("pic2");
	var oFile = document.getElementById("pic2").files[0];

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


function changeFname(){
	document.getElementById("fname").innerHTML = "<span><form method='post' action=''><input type='text' minlength='2' maxlength='30' name='changedFname'></input><input class='width' type='submit' value='עדכן'></input></form></span>";
}

function changeLname(){
	document.getElementById("lname").innerHTML = "<span><form method='post' action=''><input type='text' minlength='2' maxlength='30' name='changedLname'></input><input class='width' type='submit' value='עדכן'></input></form></span>";
}

function changeAdd(){
	document.getElementById("address").innerHTML = "<span><form method='post' action=''><input type='text' minlength='3' maxlength='70' name='changedAdd'></input><input class='width' type='submit' value='עדכן'></input></form></span>";
}

function changePass(){
	document.getElementById("password").innerHTML = "<span><form method='post' action=''><input type='text' minlength='6' maxlength='30' name='changedPass'></input><input class='width' type='submit' value='עדכן'></input></form></span>";
}

function changePrice(){
	document.getElementById("price").innerHTML = "<span><form method='post' action=''><input type='number' min='0' name='changedPrice'></input><input class='width' type='submit' value='עדכן'></input></form></span>";
}

function changePic(){
	document.getElementById("pic1").innerHTML = "<span><form method='post' onsubmit='return validpic(this);' enctype='multipart/form-data' action=''><input type='file' id='pic2' name='changedPic' accept='image/x-png,image/gif,image/jpeg'></input><input class='width' type='submit' value='עדכן' name='submitt'></input></form></span>";
}

function changebdate(){
document.getElementById("bdate").innerHTML = '<span><form method="post" action=""><input type="date" min="1900-01-01" max="2016-06-01" name="changedbdate" required></input><input class="width" type="submit" value="עדכן"></input></form></span>';
}