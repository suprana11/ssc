<?php 
$username=$_POST["Username"]; 
$password=$_POST["Password"]; 
$uname="Suprana"; 
$pw="111222"; 
if($username ==$uname and $password==$pw){ header("Location: welcome.php"); 
exit(); 
} 
else{ 
echo "Invalid Username or Password!"; 
} 
?> 