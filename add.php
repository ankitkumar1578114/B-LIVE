<?php
session_start();
$mono=$_SESSION['mono'];
$what=$_GET['what'];
$rate=$_GET['rate'];
$kya=$_GET['kya'];
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
if($kya=="veg")
{
$sq="SELECT * FROM price where what='$what'";
$result=$conn->query($sq);
while($row=$result->fetch_assoc())
{
$rate=$rate*$row['rate'];
}    

}
if(!empty($mono) && !empty($what) &&!empty($rate))
{
$sq="SELECT * FROM detail where mono=$mono";
$result=$conn->query($sq);
while($row=$result->fetch_assoc())
{
$address= $row['address'];
}    
$sql="INSERT INTO book (mono,what,rate,address,num,del) 
values('$mono','$what','$rate','$address','1','0')";
if($conn->query($sql))
{
$sq="SELECT * FROM book where mono='$mono' and del='0'";
$result=$conn->query($sq);
$i=1;
$total = 0;
echo "<table>";
echo "<tr><th style='width:15%'>S. No.</th><th style='width:65%;''>Details</th><th style='width:20%'>Rate</th></tr>";
while($row=$result->fetch_assoc())
{
$total= $total+($row['rate']*$row['num']);
if($row['num']==1)
{
echo "<tr><th style='width:15%'>".$i."</th><th style='width:65%;''>".$row['what']."</th><th style='width:20%'>".$row['rate']."</th></tr>";
}
else{
echo "<tr><th style='width:15%'>".$i."</th><th style='width:65%;''>".$row['what']."</th><th style='width:20%'>"."Unavailable"."</th></tr>";
}
$i++;
}
echo "<tr><th style='width:15%'></th><th style='width:65%;''>Total</th><th style='width:20%'>".$total."</th></tr>";
$sq="SELECT * FROM detail where mono='$mono'";
$result=$conn->query($sq);
while($row=$result->fetch_assoc())
{
if($row['address']=="Dhousan")
{
$ex="20";
}
if($row['address']=="Garauti")
{
$ex="20";
}
if($row['address']=="Terhi")
{
$ex="20";
}
}
echo "<tr><th style='width:15%'></th><th style='width:65%;''>D Charge</th><th style='width:20%'>".($total/20)."+".$ex."=".(($total/20)+$ex)."</th></tr>";
$total=$total+($total/20)+$ex;
echo "<tr><th style='width:15%'></th><th style='width:65%;''>Total</th><th style='width:20%'>".$total."</th></tr>";
echo "</table>";
}
else
{
echo "sorry";
}
}
}
?>