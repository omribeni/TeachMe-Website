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


#whorweBar{
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

#we{
	font-family: 'Secular One', sans-serif;
    border: none;
    border-radius: 15px;
    font-size: 18px;
	width: 45%;
    margin-top: 60px;
    margin-right: 5%;
    float: right;
    display: inline-block;	
}
	

#us{
    border: 2px solid #003366;
    float: left;
    margin-top: 60px;
    margin-left: 15%;
    margin-bottom: 10px;
    width: 300px;
    height: 300px;
    border-radius: 10px;
    box-shadow:10px 10px 5px #888888 ;
}
.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}