<html>
<head>
<title>B-LIVE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
background-color:rgb(0,97,138);
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
<table>
<?php
echo "<table>";
$sq="SELECT * FROM price";
$result=$conn->query($sq);
$x=1;
echo "<tr><th style='background-color:white;width:10%'>"."S No."."</th><th style='background-color:white;width:30%'>"."Thing"."</th><th style='background-color:white;width:10%'>"."Price"."</th></tr>";
$total =0;
while($row=$result->fetch_assoc())
{
echo "<tr><th style='background-color:white;width:10%'>".$x."</th><th style='background-color:white;width:30%'>".$row['what']."</th><th style='background-color:white;width:10%'>".$row['rate']."</th></tr>";
$x++;    
}
echo "</table>";
?>
</table>
<?php
}
?>
</div>
</body>
</html>