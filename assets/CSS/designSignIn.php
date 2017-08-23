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

#SignInBar{
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
  	padding-top: 20px;
	margin: auto;
	width: 100%;
}

.sign-up-form{
	margin: auto;
	width: 40%;
	text-align: center;
	border: 2px solid #003366;
	border-radius: 20px;
    font-family: 'Secular One', sans-serif; 
}

#input-box-style{
	width: 90%;
	font-size: 20px;
	border: 2px solid #003366;
    border-radius: 7px;

}


::-webkit-input-placeholder { /* WebKit browsers */
	text-indent: 10px;
}

#subBtn{
	margin: 8px;
    background-color: #40D754;
    color: black;
    font-family: 'Secular One', sans-serif; 
   	font-size: 20px; 
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    outline: none;
    border: none;
    text-decoration: none;
    transition: all 0.4s;
}

#subBtn:hover{
    transform: scale(1.2);
    margin: 8px;
    background-color: #40D754;
    color: black;
    font-family: 'Secular One', sans-serif; 
    font-size: 20px; 
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    outline: none;
    border: none;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.4s;
}
#subBtn:active{
    transform: scale(1.1);
}

#passwordRet{
    text-align: center;
    padding-top: 5px;
}

#imgsHolder{
    display: inline-block;
    width: 100%;
    text-align: center;
    margin-top: 5px;
}

#img1{
    width: 160px;
    height: 160px;
    border-radius: 50%;
    border: 2px solid black;
    margin: 10px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}


#img2{
    width: 160px;
    height: 160px;
    border-radius: 50%;
    border: 2px solid black;
    margin: 10px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}



#img3{
    width: 160px;
    height: 160px;
    border-radius: 50%;
    border: 2px solid black;
    margin: 10px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}

