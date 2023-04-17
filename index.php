<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

input{
    padding:5px;
    margin-bottom: 20px;
    margin-top: 20px;
    margin-left: 20px;

}
label{
    margin-left: 25px;
}
select{
    padding:5px;
    margin-bottom: 20px;
}
body{
    margin-left: 100px;
    color: black;
    font-size: 0.9em;
}
.container{
    background-color: #4CAF50;
    width:400px;
    height:450px;
    
}
#submit{
    margin-top: px;
    margin-left: 20px;
}
.error {
    color: red;
    font-size: 0.8em;
    margin-bottom: 10px;
} 
</style>  



<body>
<h2>Sign Up ::</h2>
<div class="container">
<form  action="insert.php" method="post">

<label for="email">Name:</label>
<input type="text" id="name" name="name" required>
<br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<br>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required>
<br>

	<!-- <label for="gender" >Gender:</label>
		<select  id="gender" name="gender">
			<option value="">Select Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		
		</select> -->
		<br>
<br>

<input id="submit" type="submit" name="submit" value="Submit">

</form>
</div>
</body>

</html>



</head>
<body>



