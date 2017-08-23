<?php header("Content-type: text/css; charset: UTF-8");  ?>

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

.spaceContainer{
    height: 48px;
}
#ContactBar{
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


#formContainer{
    padding: 20px 0 0 0;
    margin: 30px 2% 0 0;
    width: 40%;
    float: right;
}

.contactForm{
    margin: 20px 0 0 10%;
    padding: 10px;
    width: 80%;
    float: right;
    text-align: center;
    border: 2px solid #003366;
    border-radius: 20px;
    font-family: 'Secular One', sans-serif; 
    box-shadow:10px 10px 5px #888888 ;
}

::-webkit-input-placeholder { /* WebKit browsers */
    position:0 0;
    height: 100px;
    width:400px;
    font-family:'Secular One', sans-serif;
}

.inputBox{
    margin-right: 5px;
    margin-left: 5px;
    margin-top: 10px;
    width: 60%;
    float: right;
    text-align: right;
    padding-right: 10px;
    line-height: 24px;
    border-radius: 7px;
    outline: none;
    font-family:'Secular One', sans-serif;
}

.inputBoxText{
    margin: 5px;
    width: 98%;
    height: 24%;
    float: right;
    text-align: right;
    direction: rtl;
    resize: none;
    outline: none;
    border-radius: 7px;
    font-family:'Secular One', sans-serif;
    padding-right: 10px;
}

.inputBoxSubmit{
    margin: 3% 5% 5% 5%;
    float: left;
    border-radius: 50%;
    height: 80px;
    width: 80px;
    text-align: center;
    border: 2px solid #003366;
    font-size: 36px;
    background: #3366cc;
    color: #f9f9f9;
}

.inputBoxSubmit:hover{
    float: left;
    transition: all 0.4s;
    border-radius: 50%;
    transform: scale(1.3);
    border: 2px solid #003366;
    direction: rtl;
}

img{
    margin-left: 8%;
    margin-top: 6%;
    border-radius: 25px;
    box-shadow: 10px 10px 5px #888888;
}

.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}
