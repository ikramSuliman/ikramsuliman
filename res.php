<?php 
$sever='localhost';
$username='root';
$password='';
$db='web';

$con=new mysqli($sever,$username,$password,$db);

if($con->connect_error)
echo "Error connecting";

?>