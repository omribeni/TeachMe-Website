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



.spaceContainer{
    height: 48px;
}

#searchBar{
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
.searchResults{
    margin: 0 auto;
    height: 100%;
    width: 60%;
    direction: rtl;
    font-family: 'Secular One', sans-serif;
    font-size: 20px;
}

.teacherContainer{
    margin: 1%;
    height: 160px;
    width: 90%;
}


.teacherPic{
    float: right;
    width: 100px;
    height: 100px;
    margin-top: 30px;
    border-radius: 50%;
}

.score{
    float: left;
    width: 180px;
    margin-top: 40px;
    margin-left: 100px;
}

.teacherName{
    margin-right: 20px;
    margin-top: 40px;
    float: right;
}

.phone{
    font-size: 15px;
    margin-right: 30px;
}

.price{
    margin-right: 30px;
    font-size: 15px;
}

hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}


#jumpToTop{
    position: fixed;
    left: 125px;
    top: 600px;
    width: 100px;
    height: 50px;
    border-radius: 10px;
    background: #003366;
    color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

}

#sry{
    margin: 40px auto;
    font-size: 40px;

}
.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}

span.sMarg{
    margin: 5px;
    padding-right: 15px;
}
#likeLink{
    background: none;
    text-decoration: underline;
    border: none;
    font-family: 'Secular One', sans-serif;
    font-size: 20px;
    cursor: pointer;
    color: #003366;
}

#likeLink:focus{
    outline: none;
}