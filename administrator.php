<html>
<head>
<title>Administrator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function change(){
$(document).ready(function(){
var what= document.getElementById("what").value;
var rate= document.getElementById("rate").value;
var xml=new XMLHttpRequest();
xml.open("GET","change.php?what="+what+"&rate="+rate,true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
alert(xml.responseText);
}
}
});
}    
</script>
<style>
body{
background-color:rgb(150,150,0,0.1);
}
</style>
</head>
<body>
<div id="list">
<?php
$host="localhost";
$dbusername="id11493426_ankit";
$dbpassword ="Ankit@123";
$dbname="id11493426_userdetail";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error('.mysqli_connect_errno().')'
	.mysqli_connect_error());
}
else {
?>
Change
<form>
<select id="what" style="width:100%;font-size:20px;">
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
<option>Milk(दूध)</option>    
<option>Cheese(पनीर)</option>
<option>Ghee(घी)</option>    
<option>Curd(दही)</option>

</select>
<input type="text" style="width:100%;font-size:20px;" id="rate">
<input type="button" onclick="change();" value="Change">
</form>
<table>
<?php
echo "<table>";
$sq="SELECT * FROM book where del='1' and num='1'";
$result=$conn->query($sq);
$x=1;
echo "<tr><th style='background-color:white;width:10%'>"."S No."."</th><th style='background-color:white;width:30%'>"."Mobile No."."</th><th style='background-color:white;width:10%'>"."Detail"."</th><th style='background-color:white;width:10%'>"."Rate"."</th></tr>";
$total =0;
while($row=$result->fetch_assoc())
{
echo "<tr><th style='background-color:white;width:10%'>".$x."</th><th style='background-color:white;width:30%'>".$row['mono']."</th><th style='background-color:white;width:10%'>".$row['what']."</th><th style='background-color:white;width:10%'>".$row['rate']."</th></tr>";
$x++;    
$total = $total + $row['rate'];
}
$dc= $total/20;
echo "<tr><th style='background-color:white;width:10%'></th><th style='background-color:white;width:30%'></th><th style='background-color:white;width:10%'>Total</th><th style='background-color:white;width:10%'>".$total."</th></tr>";
echo "<tr><th style='background-color:white;width:10%'></th><th style='background-color:white;width:30%'></th><th style='background-color:white;width:10%'>D Charge</th><th style='background-color:white;width:10%'>".$dc."</th></tr>";echo "<tr><th style='background-color:white;width:10%'></th><th style='background-color:white;width:30%'></th><th style='background-color:white;width:10%'>Total</th><th style='background-color:white;width:10%'>".$total+$dc."</th></tr>";
echo "</table>";
?>
</table>
<?php
}
?>
</div>
</body>
</html>