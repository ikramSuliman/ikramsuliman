<?php 
include('res.php');

// $sql="SELECT * FROM users";
// $result=$con->query($sql);
// if($result->num_rows > 0){
//     echo "<table border=2";
//     echo "<tr><th>Username</th><th>Email</th><th>Password</th><th>Delete</th></tr>";
// while($row=$result->fetch_assoc()){
// echo "username: ".$row["username"]."\n"."email: ".$row["email"]."\n";

// echo '<tr><td>'.$row["username"].'</td><td>'.$row["email"].'</td><td>'.$row["password"].'</td><td><a href="/Lap8/delete.php?id='.$row['ID'].'">Delete</a></td></tr>';
// }
// }else{
//     echo "no data";
// }
if(isset($_POST['submit'])){
$username = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="SELECT * FROM users WHERE name=? and password=? and email=?";
$sql=mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($sql,'sss',$username,$password,$email);
mysqli_stmt_execute($sql);

$result=mysqli_stmt_get_result($sql);
if($result->num_rows>0){
   // echo 'done';
    echo "Name: " . $_POST['name'] . "<br>";
    echo "password: " . $_POST['password'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br><br>";
}else{
    echo 'falid';
}

}
mysqli_close($con);
?>