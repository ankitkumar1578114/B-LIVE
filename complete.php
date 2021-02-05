<?php
$mono=$_GET['mono'];
echo $mono;
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
else {$sql="UPDATE book 
SET del='1'
WHERE mono='$mono'";
if($conn->query($sql))
{
echo "Delivered";
}
else
{
echo "sorry";
}
}
?>