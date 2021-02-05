<?php
session_start();
$mono=$_SESSION['mono'];
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
$sq="SELECT * FROM book where address='$mono' and del='0'";
$result=$conn->query($sq);
$total=0;
$i=1;
echo "<table>";
echo "<tr><th style='width:15%'>S. No.</th><th style='width:30%'>Mobile No.</th><th style='width:35%;''>Details</th><th style='width:20%'>Rate</th><th>Availablity</th></tr>";
while($row=$result->fetch_assoc())
{
$address=$row['address'];
$total= $total+($row['rate']*$row['num']);
echo "<tr><th style='width:15%'>".$i."</th><th style='width:30%'>".$row['mono']."</th><th style='width:35%;'>".$row['what']."</th><th style='width:20%'>".$row['rate']."</th>";
if($row['num']==1)
{

?>
<th onclick="
$(document).ready(function(){
var xml=new XMLHttpRequest();
xml.open('GET','cancel.php?what='+'<?php echo $row['what'] ?>'+'&mono='+'<?php echo $row['mono'] ?>',true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
}
}
});
">Cancel</th>
<?php
}
else{
?>
<th style="color:red;">
Cancelled
</th>
<?php
}
echo "</tr>";
$i++;
}
$ex=0;
if($address=="Terhi")
{
$ex=20;
}
if($address=="Garauti")
{
$ex=20;
}
if($address=="Dhousan")
{
$ex=20;
}
if($total==0)
{
$ex=0;
}
echo "<tr><th style='width:15%'></th><th style='width:65%;''>Total</th><th style='width:20%'></th><th style='width:20%'>".$total."</th></tr>";
echo "<tr><th style='width:15%'></th><th style='width:65%;''>D Charge</th><th style='width:20%'></th><th style='width:20%'>".($total/20)."+".$ex."=".(($row['rate']/20)+$ex)."</th></tr>";
$total=$total+($total/20)+$ex;
echo "<tr><th style='width:15%'></th><th style='width:65%;''>Total</th><th style='width:20%'></th><th style='width:20%'>".$total."</th></tr>";

echo "</table>";
    
}
?>