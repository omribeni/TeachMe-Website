<?php  session_start();
header("Content-type: text/css; charset: UTF-8");  
if(isset($_SESSION['gender'])){
    if($_SESSION['gender']=="male"){
        $image = 'url("../img/male.png")';
        $background = '#3366cc';
    }elseif($_SESSION['gender']=="female"){
        $image = 'url("../img/female.png")';
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
    cursor: pointer;
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


#profileBar{
  height: 18%;
  margin-top: 20px;
  padding: 8px;
  border-top: 6px solid #003366;
  border-bottom: 6px solid #003366;
  background: <?php echo $background; ?>;
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

.container{
    margin: 10 auto;
    width: 80%;
    height: 60%;
}

#imageCont{
    float: right;
    margin: 20px;
    pointer:none;
}

#profImg{
    height: 210px;
    width: 210px;
    position:center;
    background-size: 210px 210px;
    background-image: <?php echo $image;?>;
    background-repeat:no-repeat;
}

#detailsCont{
    float: right;
    margin: 30px;
    width: 65%;
}

.details{
    display: inline-block;
    text-align: right;
    direction: rtl;
    width: 100%;
    margin: 5px;
    font-family: 'Secular One', sans-serif;
    font-size: 20px;
}



input{
    font-family: 'Secular One', sans-serif;
    width: 160px;    
}

input.width{
    width: 40px;
}
button{
        font-family: 'Secular One', sans-serif;
        font-size: 12px;
        height: 25px;
        width: 60px;
        color:#f9f9f9;
        background-color:<?php echo $background; ?>;
        border-radius:10px ;  
}

form{
    margin:0;
    width:300px;
}

.long-btn {
    width:100px;
    height: 30px;
}

.rightTd{
    width: 150px;
    display: inline-block;
}

.middleTd{
    width: 300px;
    display:inline-block;
}
.redBackground:hover{
    background-color: red  ; 
}
.greenBackground:hover{
    background-color: #2add50  ; 
}
