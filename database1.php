<?php

$firstname= $_GET['firstname'];

$lastname= $_GET['lastname'];

$houseaddress= $_GET['houseaddress'];

$email= $_GET['email'];

$state= $_GET['state'];

$pincode= $_GET['pincode'];

$city= $_GET['city']; 

$mobilenumber= $_GET['mobilenumber'];

$sex= $_GET['gender'];

 

$db= mysqli_connect("localhost","root","","databasename");

if(!$db)

{

echo "not connected";

exit();

}

//$sql="insert into donate values('h','p','c','e','p',4,'m',74,'m')";
$sql="insert into donate values('".$firstname."','".$lastname."','".$houseaddress."','".$email."','".$state."',".$pincode.",'".$city."',".$mobilenumber.",'".$sex."')";
echo $sql;

//mysqli_query($db,$sql);

?>