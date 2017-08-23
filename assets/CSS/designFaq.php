<?php header("Content-type: text/css; charset: UTF-8");  ?>

body{
    height: 100%;
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



#FAQimg{
    border-radius: 50%;
    border: 2px solid #003366;
    display: inline;
    float: left;
    margin-top: 20px;
    margin-left: 5%;
    margin-bottom: 10px;
    width: 362px;
    height: 374px;
}

#question-box{
    width: 45%;
    margin:120px 5% 20px 0px;
    float: right;
    border: 5px solid #003366;
    border-radius: 22px;
    display: inline-block;

}

/* Style the buttons that are used to open and close the accordion panel */
button.accordion {
    background-color: #f9f9f9;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: right;
    outline: none;
    font-family: 'Secular One', sans-serif; 
    border: none;
    border-radius: 15px;
    font-size: 18px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
button.accordion.active, button.accordion:hover {
    background-color: #3366cc;
    transition: all 0.4s;
    color: #f9f9f9;
}

/* Style the accordion panel. Note: hidden by default */
div.panel {
    padding: 0 18px;
    background-color: #f9f9f9;
    display: none;
}


/* The "show" class is added to the accordion panel when the user clicks on one of the buttons. This will show the panel content */
div.panel.show {
    display: block;
    font-family: 'Secular One', sans-serif; 
}

.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}
