<?php
session_start();
$mono=$_SESSION['mono'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>B-LIVE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
var i=1;
function third(){
$(document).ready(function(){
$("#first").hide();
$("#third").show();
setInterval(function(){
var xml=new XMLHttpRequest();
xml.open("GET","showfd.php",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
document.getElementById("lis").innerHTML=xml.responseText;
}
}    
},100);

});
}
function showcos(){
$(document).ready(function(){
$("#first").hide();
$("#show").show();
setInterval(function(){
var xml=new XMLHttpRequest();
xml.open("GET","showcos.php",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
document.getElementById("lis1").innerHTML=xml.responseText;
}
}
},100);
});
}

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
$("#show").hide();
$("#first").show();
});
}
</script>
<style>
body{
margin:0px;
padding:0px;
background-color:rgb(0,97,138);
}
#he{
font-weight:600;
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
position:absolute;
width:100%;
display:none;
}
#add{
float:right;
width:20%;
background-color:rgb(0,0,150);
text-align:center;
color:white;
font-size:15px;
font-family:ubuntu;
padding:5px;
border-radius:100px;
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
#third,#show{
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
</style>
</head>
<body>
<div id="first">
<img src="blive.png" style="width:35%;margin-left:32.5%;margin-top:50px;">
<div id="title">Believe In B-Live</div>
<div id="book" onclick="third();">My Booking</div>
<div id="tomar" onclick="showcos();">My Costumers</div>
<div id="tomar">Today's Market</div>
</div>
<div id="second">
<div id="title">B-Live</div>
<div id="input">
<input type="text" id="what" style="font-family:arial;font-size:15px;border-radius:5px;padding:3px;" placeholder="Detail">
<input type="text" id="rate" style="font-family:arial;width:10%;font-size:15px;border-radius:5px;padding:3px;" placeholder="rate">
<div id="add" onclick="add();">Add</div>
</div>
<div id="list">
</div>
<div style="margin:10px;font-family:roboto;text-align:center;">You will get Your delivery after 3 hour after booking.</div>
<div id="back" onclick="first();">Back</div>
</div>
<div id="third">
<div id="title">B-Live</div>
<div id="lis" style="margin-top:10px;">
</div>
<div id="back" onclick="first();" style="margin-top:10px;">Back</div>
</div>	
<div id="show">
<div id="title">B-Live</div>
<div id="lis1" style="margin-top:10px;">
</div>
<div id="back" onclick="first();" style="margin-top:10px;">Back</div>
</div>	

</body>
</html>