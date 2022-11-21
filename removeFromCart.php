<?php
@include('./config/master.php');

makeSqlQuery("delete from cart where productID= {$_POST["productID"]}");

$product = makeSqlQuery("select * from product where productID = {$_POST["productID"]}");

$row = mysqli_fetch_assoc($product);

echo "Product \"{$row['productName']}\" has been removed from your cart";
