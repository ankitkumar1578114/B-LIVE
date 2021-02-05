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
var i=1;
function second(){
$(document).ready(function(){
$("#first").hide();
$("#second").show();
});
}
$(document).ready(function(){
$("#first").hide();
$("#third").show();
var xml=new XMLHttpRequest();
xml.open("GET","show.php",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
document.getElementById("lis").innerHTML=xml.responseText;
}
}

});
function add(){
$(document).ready(function(){
var what=document.getElementById("what").value;
var rate=document.getElementById("rate").value;
document.getElementById("what").value="";
document.getElementById("rate").value="";
var xml=new XMLHttpRequest();
xml.open("GET","add.php?what="+what+"&rate="+rate,true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
document.getElementById("list").innerHTML=xml.responseText;

}
}
});

}
function first(){
$(document).ready(function(){
$("#third").hide();
$("#second").hide();
$("#first").show();
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
display:none;

}
#second{
display:block;    

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

<div id="third">
<div id="title1"><img src="blive.png" style="height:43px;float:left;padding-left:20px;padding-right:10px;"><div style="padding-top:7px;margin-left:10px;">B-LIVE</div></div>
<div id="lis" style="margin-top:10px;padding-bottom:35px;">
</div>
</div>	
</body>
</html>