</html><!DOCTYPE html>
<html>
<head>
	<title>B-LIVE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function sendotp(){
$(document).ready(function(){
var mono= document.getElementById("mono").value;
if(mono>1000000000 && mono<10000000000)
{
var xml=new XMLHttpRequest();
xml.open("GET","sendotp.php?mono="+mono,true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
if(xml.responseText!="Okk")
{
//$("#eno").show();
//$("#coo").show();
//$("#back").hide();
conotp();
}
else 
{
alert("mobile Number Allready Exist.");
}
    
}
}
}
else{
alert("Enter Correct Number");
}
});
}
function conotp(){
$(document).ready(function(){
//$("#eno").show();
//$("#coo").show();
//$("#back").hide();
var mono= document.getElementById("mono").value;
var eno= '1000';
var name= document.getElementById("name").value;
var address= document.getElementById("address").value;
var pass= document.getElementById("pass").value;
if(address=='Address'||name==''||pass=='')
{
alert("Fill all details plz.");
}
else{
var xml=new XMLHttpRequest();
xml.open("GET","conotp.php?mono="+mono+"&eno="+eno+"&name="+name+"&address="+address+"&pass="+pass,true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
if(xml.responseText=="yes")
{

window.location.href="login.php";
}
else{
window.location.href="index.php";
}
}
}
}
});
}

</script>
<style>
body,html{
margin:0px;
padding:0px;
background-color:rgb(0,97,138);
height:100%;
}
#title{
width:100%;
height:auto;
color:white;
padding-top:15px;
padding-bottom:15px;
font-size:25px;
}
#name,#eno,#mono,#pass,#address{
font-size:22px;
border-radius:15px;
padding:10px;
padding-left:15px;
width:80%;
margin-left:10%;
margin-top:25px;
border:0 solid white;
outline:none;
}
#back,#coo{
background-color:rgb(0,150,0);
width:80%;
text-align:center;
font-family:arial;
font-size:22px;
padding:10px;
margin-left:10%;
border-radius:5px;
margin-top:25px;
color:white;
}
#eno,#coo{
margin-top:15px;
display:none;
}
#coo{
background-color:rgb(0,150,0);
}    
#x{
margin-left:10%;
margin-top:15px;
margin-bottom:5px;
font-size:16px;
}
</style>
</head>
<body>
<div id="title"><img src="blive.png" style="height:43px;float:left;padding-left:20px;padding-right:10px;"><div style="padding-top:7px;margin-left:10px;">B-LIVE</div>
<form>
<input id="name" type="text" placeholder="Enter Your Name">
<select id="address">
<option>Address</option>
<option>Kabir Nagar</option>
<option>Ram Nagar</option>
<option>Prem Nagar</option>
<option>Santoshi Nagar</option>
<option>Shri Nagar</option>
<option>Bhagwati Nagar</option>
<option>Hanuman Nagar</option>
<option>Shankar Nagar</option>
<option>Sikandar Purva</option>
<option>Purani Tindwari</option>
</select>
<input type="password" placeholder="Enter Your Password" id="pass">
<input  type="text" placeholder="Enter Your Mobile No" id="mono"><div id="back" onclick="sendotp()">Submit</div>
<input id="eno" type="text" placeholder="Enter OTP"><div id="coo" onclick="conotp();">Confirm OTP</div>
</form>
</body>
</html>