<!DOCTYPE HTML>
<html>  
<body>
<form action="upload.php" method="post">
Name: <input type="text" name="name"><br>
<br>E-mail: <input type="text" name="email"><br>
<br>Gender:
<br><input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female<br>
<input type="radio" name="gender" value="other">Other<br>
<br>Password:
<input type="password" name="password" value="requierd"><br>
<br><input type="submit">
</form>
</body>

<?php
if(isset($_POST['submit']))
{
	session_start();
	$_SESSION['Name']=$_POST['name'];
	$_SESSION['Email']=$_POST['email'];
	$_SESSION['gender']=$_POST['gender'];
	$_SESSION['password']=$_POST['password'];
}
?>