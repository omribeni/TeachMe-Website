<?php
header("Content-type: text/css; charset: UTF-8");  
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

.aNon{
    text-decoration: none;
}

.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}
.tableCont{
    width: 60%;
    margin: 0 auto;
    text-align: center;
}
h4{
    font-family: 'Secular One', sans-serif;
    color: #0033CC; 
}

.tableCotntact, th ,td{
    border: 1px solid black;
    margin: 0 auto;
}






