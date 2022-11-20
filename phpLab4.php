<?php 
$file="newfile.txt"; 
if(file_exists($file)){ 
$handle=fopen($file,"r"); 
$content=fread($handle,filesize($file)); 
echo "<table border=4>";  
echo "<tr><td>".$content."</td></tr>";  
echo "</table>"; 
fclose($handle); 
}else{ 
echo"ERROR:file doesnot exist"; 
} 
?> 