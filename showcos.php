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
$sq="SELECT * FROM book WHERE address='$mono' AND del='0' GROUP BY mono";
$result=$conn->query($sq);
$total=0;
$i=1;
while($r=$result->fetch_assoc())
{
$s="SELECT * FROM detail where mono=$r[mono]";
$ra=$conn->query($s);
while($ro=$ra->fetch_assoc())
{
$mono=$r['mono'];   
echo "<div id='he'> Mobile Number: ".$mono."&nbsp;&nbsp&nbsp;".$ro['name']."</div>";
}
$sql="SELECT * FROM book where mono='$mono' AND del='0'";
$res=$conn->query($sql);
$total=0;
$i=1;
echo "<table>";
echo "<tr><th style='width:15%'>S. No.</th><th style='width:65%;''>Details</th><th style='width:20%'>Rate</th><th>Availablity</th></tr>";
while($row=$res->fetch_assoc())
{
$address = $row['address'];
$total= $total+($row['rate']*$row['num']);
echo "<tr><th style='width:15%'>".$i."</th><th style='width:65%;''>".$row['what']."</th><th style='width:20%'>";
if($row['num']==0)
{
echo "<span style='opacity:0.3;'>".$row['rate']."</span>"."</th><th>";
?>
<span style="color:red;">Cancelled</span>
<?php
}
else{
echo $row['rate']."</th><th>";
?>
Available
<?php
}
echo "</th></tr>";
$i++;
}
echo "<tr><th style='width:15%'></th><th style='width:65%;''>Total</th><th style='width:20%'>".$total."</th></tr>";
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
echo "<tr><th style='width:15%'></th><th style='width:65%;''>D Charge</th><th style='width:20%'>".($total/20)."+".$ex."=".(($row/20)+$ex) ."</th></tr>";
$total=$total+($total/20)+$ex;
echo "<tr><th style='width:15%'></th><th style='width:65%;''>Total</th><th style='width:20%'>".$total."</th></tr>";
echo "</table><br>";
if($r['del']==0)
{
?>
<div onclick="
var xml=new XMLHttpRequest();
xml.open('GET','complete.php?mono='+'<?php echo $r['mono']?>',true);
xml.send();
xml.onreadystatechange= function(){
if(xml.readyState==4&&xml.status==200)
{
}
}
" style="margin:auto;width:100px;text-align:center;border-radius:5px;color:white;background-color:rgb(50,0,130);padding:10px">Complete</div>
<br>
<br>
<?php
}
else{
?>
<div style="text-align:center;font-weight:700;">Completed</div>
<br>
<br>
<?php
}
}
}
?>