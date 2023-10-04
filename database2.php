<?php

$data_3= $_GET['data_3'];

$data_4= $_GET['data_4'];

$data_7= $_GET['data_7'];

$data_9= $_GET['data_9'];

$data_10= $_GET['data_10'];

$data_8= $_GET['data_8'];

$subject= $_GET['subject'];

 

$db= mysqli_connect("localhost","root","","nidhi");

if(!$db)

{

echo "not connected";

exit();

}

$sql= "insert into feedback values('".$data_3."','".$data_4."','".$data_7."','".$data_9."','".$data_10."','".$data_8."','".$subject."');";

echo $sql;

mysqli_query($db,$sql);

?>