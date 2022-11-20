<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="ecommerce"; 
$conn=mysqli_connect($servername, $username, $password, $dbname); 
if(!$conn) 
{ 
die("Mysql connection failed :".mysqli_connect_error()); 
} 
$sql = "SELECT productID, productName, price FROM product"; 
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0) { 
while($row= mysqli_fetch_assoc($result)) { 
echo "product ID: " . $row["productID"] . " "."Product Name: " . $row["productName"]. " Price:".$row["price"]."<br>"; 
} 
} else { 
echo" 0 items"; 
} 
mysqli_close($conn); 
?> 