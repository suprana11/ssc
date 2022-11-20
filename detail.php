<?php 
$productId =$_POST["product_id"]; 
$productName=$_POST["product_name"]; 
$price=$_POST["price"]; 
echo $productId ."<br>"; 
echo $productName ."<br>"; 
echo $price ."<br>"; 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="ecommerce"; 
$conn=mysqli_connect($servername, $username, $password, $dbname);
 if(!$conn) 
{ 
die("Mysql connection failed :".mysqli_connect_error()); 
} 
else{ 
echo "connection successful"."<br>"; 
} 
$sql = "insert into product(productID, productName, price) values('$productId','$productName','$price')";
 if(mysqli_query($conn, $sql)){ 
echo"New product  saved successfully"; 
} 
else{ 
echo"Error:" .sql."<br>". mysqli_error($conn); 
} 
mysqli_close($conn); 
?> 