<?php
session_start();
$mono= $_GET['mono'];
$pass= $_GET['pass'];
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
$sq="SELECT * FROM detail where mono=$mono";
$result=$conn->query($sq);
while($row=$result->fetch_assoc())
{
if($row['pass']==$pass)
{
echo "yes";
$_SESSION['mono']=$mono;
$_SESSION['pass']=$pass;
$_SESSION['name']=$row['name'];
}
else {
echo "no";
}
}
}
?>