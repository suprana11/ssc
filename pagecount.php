<?php 
session_start(); 
?> 
<?php 
if(isset($_SESSION['count']))  
{  
echo "Your session count: ".$_SESSION['count']."<br />";  
$_SESSION['count']++;  
}  
else 
{  
$_SESSION['count'] = 1;  
echo "Session does not exist";  
}  
?> 