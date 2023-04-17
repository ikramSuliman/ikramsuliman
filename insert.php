<?php 
include('res.php');

$username = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
//$gender=$_POST['gender'];

// $sql='insert into users( name,email,password ) values
// ("'.$username.'","'.$email.'","'.$password.'" )';
// if($con->query($sql)=== true)
// echo "  Inserted";
// else
// echo "No   Inserted";


$que = $con->prepare("insert into users( name,password,email )values(?,?,?)");
$sql=$que->bind_param("sss", $username,$password,$email);
if($sql=== true)
echo "  Inserted";
else
echo "No   Inserted";

$que->execute();
$que->close();


?>