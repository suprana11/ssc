<?php
@include('./config/master.php');

makeSqlQuery("INSERT into cart (productID) values ({$_POST["productID"]})");

$product = makeSqlQuery("select * from product where productID = {$_POST["productID"]}");

$row = mysqli_fetch_assoc($product);

echo "Product \"{$row['productName']}\" has been added to your cart";
