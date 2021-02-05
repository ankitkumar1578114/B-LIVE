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
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
var i=1;
var k=0;
function show() {
$(document).ready(function(){
$("#input").hide();
$("#list").show();
var xml=new XMLHttpRequest();
xml.open("GET","show.php",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
document.getElementById("list").innerHTML=xml.responseText;
}
}

});

}
function second(){
$(document).ready(function(){
$("#first").hide();
$("#second").show();
});
}
function third(){
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
}
function add(){
$(document).ready(function(){
var what=document.getElementById("what").value;
var rate=document.getElementById("rate").value;
document.getElementById("what").value="";
document.getElementById("rate").value="";
var xml=new XMLHttpRequest();
xml.open("GET","add.php?what="+what+"&rate="+rate+"&kya="+"kirana",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
k++;
document.getElementById("not").innerHTML=k;
$("#not").show();
}
}
});

}
function addveg(){
$(document).ready(function(){
var what=document.getElementById("whatveg").value;
var rate=document.getElementById("rateveg").value;
document.getElementById("what").value="";
document.getElementById("rate").value="";
var xml=new XMLHttpRequest();
xml.open("GET","add.php?what="+what+"&rate="+rate+"&kya="+"veg",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
k++;
document.getElementById("not").innerHTML=k;
$("#not").show();    
    
}
}
});

}
function addmilk(){
$(document).ready(function(){
var what=document.getElementById("whatmilk").value;
var rate=document.getElementById("ratemilk").value;
document.getElementById("what").value="";
document.getElementById("rate").value="";
var xml=new XMLHttpRequest();
xml.open("GET","add.php?what="+what+"&rate="+rate+"&kya="+"veg",true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
k++;
document.getElementById("not").innerHTML=k;
$("#not").show();
//document.getElementById("list").innerHTML=xml.responseText;
}
}
});

}

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
#not{
display:none;
position:fixed;
top:14px;
right:18px;
text-align:center;
z-index:1;    
width:18px;
height:20px;
background-color:red;
color:white;
font-size:18px;
border-radius:30px;
font-family:arial;
}

#title1{
background-color:rgb(0,97,138);
position:fixed;
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
#what,#rate,#rateveg,#ratemilk{
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
#rate,#rateveg,#ratemilk{
font-family:arial;
width:40%;
margin-left:10%;
}
#whatveg,#whatmilk{
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
</style>
</head>
<body>
<div id="second">
<div id="title1">
<div style="margin-right:15px;float:right;font-size:35px;" id="cart" onclick ="show();"><div id="not">1</div>
<i class="fa fa-shopping-cart fa-2x;"></i></div>
<img src="blive.png" style="height:43px;float:left;padding-left:20px;padding-right:10px;"><div style="padding-top:7px;margin-left:10px;">B-LIVE</div>
</div>
<div id="lis" style="margin-top:10px;"><div id="input">
<div style="color:white;font-family:arial;font-size:30px;margin-left:10%;margin-top:70px;">Vegitables</div>
<select id="whatveg">
<option>Potato(आलू)</option>    
<option>Tomato(टमाटर)</option>
<option>Brinjal(बैंगन)</option>    
<option>Pumpkin(कद्दू)</option>
<option>Onion(प्याज)</option>
<option>Gourd(लौकी)</option>
<option>Lady finger(भिंडी)</option>
<option>Bitter Gaurd(करेला)</option>
<option>Jack Fruit(कटहल)</option>
<option>Taro Root(अरबी)</option>
<option>Spinach(पालक)</option>
<option>Radish(मूली)</option>
<option>Chilli(हरी मिर्च)</option>
<option>Beet(चुकंदर)</option>
<option>Coriander(धनिया)</option>
</select>
<select id="rateveg">
<option value="0.05">50g</option>    
<option value="0.1">100g</option>
<option value="0.2">200g</option>    
<option value="0.25">250g</option>    
<option value="0.5">500g</option>
<option value="1">1Kg</option>    
<option value="2">2Kg</option>
<option value="2.5">2.5Kg</option>    
<option value="3">3Kg</option>
<option value="5">5Kg</option>    

</select>
<div id="add" onclick="addveg();">Add</div>
<div style="color:white;font-family:arial;font-size:30px;margin-left:10%;margin-top:30px;">Dairy Shop</div>
<select id="whatmilk">
<option>Milk(दूध)</option>    
<option>Cheese(पनीर)</option>
<option>Ghee(घी)</option>    
<option>Curd(दही)</option>
</select>
<select id="ratemilk">
<option value="0.05">50g</option>    
<option value="0.1">100g</option>
<option value="0.2">200g</option>    
<option value="0.25">250g</option>    
<option value="0.5">500g</option>
<option value="1">1Kg(Liter)</option>    
<option value="2">2Kg(Liter)</option>
<option value="2.5">2.5Kg(Liter)</option>    
<option value="3">3Kg(Liter)</option>
<option value="5">5Kg(Liter)</option>    
</select>
<div id="add" onclick="addmilk();">Add</div>
<div style="color:white;font-family:arial;font-size:30px;margin-left:10%;margin-top:20px;">Extra Things</div>
<input type="text" id="what"  placeholder="Detail of Thing">
<input type="text" id="rate" placeholder="Rate">
<div id="add" onclick="add();">Add</div>
</div>
<div id="list" style="padding-top:60px;padding-bottom:30px;">
</div>
</div>
</div>
</body>
</html>