<?php 
$a = 9; 
$b = 11; 
echo "ARITHMETIC OPERATORS"."<br>"; 
$c = $a + $b; 
echo "$a + $b = $c<br>"; 
$c = $a - $b; 
echo "$a - $b = $c<br>"; 
$c = $a * $b; 
echo "$a * $b = $c<br>"; 
$c = $a / $b; 
echo "$a / $b = $c<br>"; 
$c = $a % $b; 
echo "$a % $b = $c<br>"; 
echo "<br>"."COMPARISON OPERATORS"."<br>"; 
if($a==$b) 
{ 
echo "Both are equal"."<br>"; 
} 
if($a===$b) 
{ 
echo "Both are equal with same type"."<br>"; } 
if($a!=$b) 
{ 
echo "Both are different"."<br>"; 
} 
if($a<>$b) 
{ 
echo "Both are different"."<br>"; 
} 
if($a!==$b) 
{ 
echo "Both are different but have same data type"."<br>"; } 
if($a>$b) 
{ 
echo "a is greater than b"."<br>"; 
} 
if($a<$b) 
{ 
echo "b is greater than a"."<br>"; 
}
if($a>=$b) 
{  
echo "a is greater or equal to b"."<br>"; 
} 
if($a<=$b) 
{ 
echo "a is less than b"."<br>"; 
} 
echo "<br>"."LOGICAL OPERATORS"."<br>"; 
if($a<$b && $b>$a) 
{ 
echo "a is less than b and b is greater than a"."<br>"; } 
if($a>$b || $b>$a) 
{ 
echo "a is greater than b or b is greater than a"."<br>"; } 
if($a!==$b){ 
echo "a is not equal to b"."<br>"; 
} 
?> 