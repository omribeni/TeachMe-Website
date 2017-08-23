<?php header("Content-type: text/css; charset: UTF-8");  ?>

body{
	width: 100%;
	margin: 0;
    background: #f9f9f9;
    font-family: 'Roboto', Helvetica, Arial, sans-serif;
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
    /*display: inline-block;*/
    line-height: 20px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    /*min-width: 160px;*/
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: #666666;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    /*text-align: left;*/
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

/*form*/

.padding-from-top{
    height: 48px;
}
#formContainer{
  	padding-top: 40px;
	margin: auto;
}

.sign-up-form-alignment{
	margin: auto;
	height: 60%;
	width: 40%;
	padding: 3	0px;
	text-align: center;
	border: 2px solid #b0c3d1;
	border-radius: 5px;
}

#input-box-style{
	width: 60%;
	height: 8%;
	border: 2px solid #b0c3d1;
    border-radius: 7px;
}
.text-font{
	font-family: 'Secular One', sans-serif; 
}


::-webkit-input-placeholder { /* WebKit browsers */
	padding-right: 10px;
    position:0 0;
    height: 100px;
    width:400px;
    font-family:'Secular One', sans-serif;
  }

.login-card {
  padding: 17px 52px 72px 52px;
  width: 274px;
  background-color: #F7F7F7;
  margin: 0 auto 10px;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
}

.login-card h2 {
	text-align: center;
	font-weight: 300;
	padding-top: -10px;
}
.login-card input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}
.login {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.login-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}
.login-help {
  width: 100%;
  text-align: center;
  font-size: 12px;
  text-color: red;
}
.login-help a{
	color: grey;
}

/*FAQ part upper BAR*/
#FAQbar{
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
.forgot-password-form{
  margin: auto;
  width: 35%;
  height: 51%;
  border: 2px solid #003366 ;
  border-radius:10px;
  box-shadow:10px 10px 5px #888888 ;
}

.form-content{
  margin: 10px 25px 0px 15px;
}

.submit-button{
  float: left;
  margin-top: -5px;
}

.submit-button #round-button{
  width: 50px;
  height: 50px;
  color: white;
  border-radius: 40%;
  background-color: #00b2c1 ;
  font-family: 'Secular One', sans-serif;
}

.full-width{
  width: 100%;
}

.forgot-password-form input{
  width: 100%;
  border-radius:7px;
  line-height:24px;
  outline: none;
  border-top: 2px solid grey;
  border-left: 2px solid grey;
  line-height: 35px;
  margin: 5px;

}

.sign-up-header{
  text-align: center; 
  color:#00b2c1;
}

.grey-text{
  width: 90%;
  color:grey;
}


