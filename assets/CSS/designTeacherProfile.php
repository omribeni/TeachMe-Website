<?php  session_start();
header("Content-type: text/css; charset: UTF-8");  
if(isset($_SESSION['gender'])){
    if($_SESSION['gender']=="male"){
      
        $background = '#3366cc';
    }elseif($_SESSION['gender']=="female"){
      
        $background ="#FB52E5";
    }
}
?>
body{
	width: 100%;
	margin: 0;
    background: #f9f9f9;
}
#ulNavbar{
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background: #3366cc;
    font-family: 'Secular One', sans-serif; 
	border: none;
}

.left{
	float: left;
}

#siteName{
	font-family: 'Lobster', cursive;
	font-size: 20px;
}

.liNavbar a{
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	transition: all 0.8s
	border: none;
	line-height: 20px;
    cursor: pointer;
}

.liNavbar a:hover{
	background: #003366;
	transition: all 0.8s;
}

#navbar{
	margin: 0;
	padding: 0;
	position: fixed;
	top: 0;
	width: 100%;
}

.right{
	float: right;
}


li a, #dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, #drop:hover #dropbtn {
    background-color: #003366;
	transition: all 0.8s;    
}

li.dropdown {
    line-height: 20px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: #666666;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: all 0.8s;
}

.dropdown-content a:hover {
	background-color: #003366;
	color: #f9f9f9;
	transition: all 0.8s;
}

#drop:hover .dropdown-content {
    display: block;
}
tr{
    height: 35px;
}

.spaceContainer{
    height: 48px;
}

#teacherBar{
  height: 18%;
  margin-top: 20px;
  padding: 8px;
  border-top: 6px solid #003366;
  border-bottom: 6px solid #003366;
  background: #3366cc;
}

#sentBar{
    margin: 25px;
    font-size: 48px;
    text-align: center;
    font-family: 'Secular One', sans-serif;
    letter-spacing: -1px;
    color: #f9f9f9;

}

#sitenameBar{
    font-family: 'Lobster', cursive;
    font-size: 50px;
    color: #f9f9f9; 
}

#container{
    margin: 0 auto;
    width: 80%;
}
#upperContainer{
    height: 200px;
    margin-top: 20px;

}
#teacherPic{
    float: right;
    margin: 10px;
    width: 200px;
    height: 200px;
    border-radius: 10px;
    box-shadow: 10px 10px 5px #888888;
}


#details{
    float: right;
    font-family: 'Secular One', sans-serif;
    font-size: 25px;
    margin-right: 90px;
    margin-top: 30px;
    width: 60%;
}

.padd{
    padding: 5px;
}

.likeBtn{
    background-color: #003366;
    color: #f9f9f9;
    border-radius: 50%;
    height: 50px;
    width: 50px;
    font-size: 25px;
    margin-right: 5%;
}


.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}
