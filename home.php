<?php
session_start();
$mono= $_SESSION['mono'];
$pass= $_SESSION['pass'];
$name= $_SESSION['name'];
setcookie("mono", $mono, time() + (86400 * 30)); // 86400 = 1 day
setcookie("pass", $pass, time() + (86400 * 30)); // 86400 = 1 day
setcookie("name", $name, time() + (86400 * 30)); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
	<title>DOC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
function logout(){
$(document).ready(function(){
document.getElementById("what").value="";
document.getElementById("rate").value="";
var xml=new XMLHttpRequest();
xml.open("GET","logout.php",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
window.location.href="index.php";

}
}
});

}
</script>
<style>
body,html{
margin:0px;
padding:0px;
height:100%;    
background-color:rgb(0,97,138);
}
#title1{
width:100%;
height:auto;
color:white;
padding-top:15px;
padding-bottom:15px;
font-size:25px;
}
#title{
width:100%;
height:auto;
color:white;
text-align:center;
padding-top:5px;
padding-bottom:5px;
font-size:25px;
}
#book,#tomar{
background-color:rgb(0,70, 110);
width:48%;
text-align:center;
color:white;
border-radius:300px;
padding:10px;
margin-top:40px;
margin-left:26%;
font-family:arial;
font-size:18px;
}
#tomar{
margin-top:30px;
}
#first{
display:block;

}
#second{
display:none;    

position:absolute;
width:100%;
}
#add{
float:right;
width:30%;
margin-right:5%;
background-color:rgb(0,0,150);
text-align:center;
color:white;
font-size:18px;
font-family:ubuntu;
padding:10px;
border-radius:100px;
margin-top:20px;
}
#input{
margin-top:15px;
margin-bottom:10px;
}
th{
background-color:white;
}
table{
width:100%;
}
#third{
display:none;
}
#back{
background-color:white;
width:20%;
text-align:center;
font-family:roboto;
font-size:15px;
padding:3px;
margin-left:1%;
border-radius:5px;
}
#what,#rate{
font-family:arial;
font-size:18px;
border-radius:5px;
padding:3px;
width:80%;
margin-left:10%;
font-family:;
padding:10px;
margin-top:20px;
border-radius:20px;
border:0 solid white;
outline:none;    
}
#rate{
font-family:arial;
width:40%;
margin-left:10%;
}
</style>
</head>
<body>
<div id="first">
<div style="color:white;font-size:30px;text-align:center;padding-top:50px;">
Welcome!
<?php
session_start();
$mono=$_SESSION['name'];
echo $mono;
?>
</div>

<img src="blive.png" style="width:35%;margin-left:32.5%;margin-top:30px;">
<div id="title">Believe In B-Live</div>
<a style="text-decoration:none;" href="book.php"><div id="book" onclick="second();">BOOK</div></a>
<a style="text-decoration:none;" href="list.php"><div id="tomar" onclick="third();">My Booking</div></a>
<a style="text-decoration:none;" href="todaymar.php"><div id="tomar">Today's Market</div></a>
<div id="tomar" onclick="logout();">Log Out</div>
</div>
<div id="second">
<div id="title1"><img src="blive.png" style="height:43px;float:left;padding-left:20px;padding-right:10px;"><div style="padding-top:7px;margin-left:10px;">B-LIVE</div></div>
<div id="lis" style="margin-top:10px;"><div id="input">
<input type="text" id="what"  placeholder="Detail of Thing">
<input type="text" id="rate" placeholder="Rate">
<div id="add" onclick="add();">Add</div>
</div>
<div id="list">
</div>
<div style="margin:10px;font-family:roboto;text-align:center;">You will get Your delivery after 3 hour after booking.</div>
<div id="back" onclick="first();">Back</div>
</div>
</div>
<div id="third">
<div id="title1"><img src="blive.png" style="height:43px;float:left;padding-left:20px;padding-right:10px;"><div style="padding-top:7px;margin-left:10px;">B-LIVE</div></div>
<div id="lis" style="margin-top:10px;">
</div>
<div id="back" onclick="first();" style="margin-top:10px;">Back</div>
</div>	
</body>
</html>