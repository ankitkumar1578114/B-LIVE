<?php
$mono= $_GET['mono'];
$address= $_GET['address'];
$pass= $_GET['pass'];
$name= $_GET['name'];
$otp= $_GET['eno'];
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
if($row['otp']==$otp)
{
$sql="UPDATE detail
SET name='$name', address='$address', pass= '$pass',ec='1'
WHERE mono='$mono'
";
if($conn->query($sql))
{
$mo="mono";
$pa="pass";
setcookie($mo, $mono, time() + (86400 * 30), "/");
setcookie($pa, $pass, time() + (86400 * 30), "/");
echo "yes";
}
}
else {
echo "no";
}
}
}
?>