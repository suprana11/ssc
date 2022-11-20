<?php 
$fullname=$_POST["name"]; 
$gender=$_POST["gender"]; 
$country=$_POST["country"]; 
echo "Name: ". $fullname. "<br>"; 
echo "Gender: ". $gender . "<br>"; 
if(!empty($_POST['lang'])) {  
echo "Hobbies :";  
foreach($_POST['lang'] as $hobbies){ 
echo" ".$hobbies.', '; 
}} 
echo "<br>Country: ". $country. "<br>";