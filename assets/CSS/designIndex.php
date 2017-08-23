<?php  session_start();
header("Content-type: text/css; charset: UTF-8");  
if(isset($_SESSION['gender'])){
	if($_SESSION['gender']=="male"){
		$color = "#3366CC;";
	}elseif($_SESSION['gender']=="female"){
		$color = "#FB52E5;";
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

.right{
    float: right;
}


#siteName{
	font-family: 'Lobster', cursive;
	font-size: 20px;
}

.liNavbar a{
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



li a, #dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    cursor: pointer;
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

.spaceContainer{
    height: 48px;
}

#img-container{
    border-top: 2px solid #003366;
    border-bottom: 2px solid #003366;
    width: 100%;
    margin-top: 20px;

}

#tutur-pic{
    width: 100%;
    height: 250px;
}

#findTeacher{
    text-align: center;
    padding: 50px;
}

#findTeacherBtn{
    width: 120px;
    height: 120px;
    margin: auto;
    line-height: 120px;
    border-radius: 50%;
    direction: rtl;
    border: 1px solid #003366;
    background-color: #D8D8D8;
    font-family: 'Suez One', sans-serif; 
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    display: block;
    text-decoration: none;
    color: black;
    transition: all 0.6s;
    cursor: pointer;
}

#findTeacherBtn:hover{
    direction: rtl;
    transition: all 0.6s;
    transform: scale(1.5);
    outline: none;
    border: 1px solid #003366;
    background-color: <?php echo $color;?>;
    text-align: center;    
}

.findTeacherBtn:active {

    background-color: black;

}

#copyContainer{
    position: absolute;
    margin: auto;
    bottom: 0;
    text-align: center;
    direction: rtl;
    width: 100%;
}

#copyrights{
    text-align: center;
    color: gray;
}


.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}






