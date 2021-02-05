<?php
$mono= $_GET['mono'];
$otp= '1000';
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
$x=1;
$sq="SELECT * FROM detail where mono=$mono";
$result=$conn->query($sq);
while($row=$result->fetch_assoc())
{
if($row['mono']==$mono){
$x=0;
if($row['ec']==0)
{
$x=1;
}
}
}
if($x==1)
{
$sql="INSERT INTO detail (mono,name,address,pass,otp,ec) 
values('$mono','','','','$otp','0')
";
if($conn->query($sql))
{
/*$mobileNumber=$mono;
$textMessage=$otp;
$apiKey = urlencode('JUDYZL85aNc-NBOb12f0M32q8B3cFREcRr8ZhQBchM');
   // Message details
   $numbers = array($mobileNumber);
   $sender = urlencode('TXTLCL');
   $message = rawurlencode($textMessage);
   $numbers = implode(',', $numbers);
   // Prepare data for POST request
   $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
   // Send the POST request with cURL
   $ch = curl_init('https://api.textlocal.in/send/');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($ch);
   curl_close($ch);   
   // Process your response here
   echo $response;
*/
}
else{

}
}
else{
echo "Okk";
}
}
?>