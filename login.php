<!DOCTYPE html>
<html>
<head>
	<title>B_LIVE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function login(){
$(document).ready(function(){
var mono= document.getElementById("mono").value;
var pass= document.getElementById("pass").value;
var xml=new XMLHttpRequest();
xml.open("GET","checkpass.php?mono="+mono+"&pass="+pass,true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
if(xml.responseText=="yes")
{
window.location.href="home.php";
}
else{
window.location.href="index.php";
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
background-repeat:no-repeat;
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
#mono{
margin-top:140px;    
}
#x{
margin-top:15px;
margin-bottom:5px;
font-size:16px;
font-family:arial;
}
#back,#coo{
background-color:rgb(200,150,0);
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

</style>
</head>
<body>
<div id="title"><img src="blive.png" style="height:43px;float:left;padding-left:20px;padding-right:10px;"><div style="padding-top:7px;margin-left:10px;">B-LIVE</div><form>
<input  type="text" placeholder="Enter Your Mobile No" id="mono">
<input type="password" placeholder="Enter Your Password" id="pass">
</div>
<div id="back" style="background-color:rgb(0,150,0);color:white;" onclick="login()">Login</div>
</form>
</body>
</html>