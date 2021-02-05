<?php
$mono=$_GET['mono'];
$what=$_GET['what'];
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
$sql="UPDATE book
SET num='0'
WHERE mono='$mono' and what='$what'
";
if($conn->query($sql))
{
echo "yes";
}
else{
echo "no";
}
}

?>