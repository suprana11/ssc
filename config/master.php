<?php
// This is master file to be included on everypage
@include('helper.php');
@include('sql.php');

// Nav bar of website
echo '<a href="' . addBaseUrl("display.php") . '">Products</a>  |  ';
echo '<a href="' . addBaseUrl("cart.php") . '">Cart</a>  |  ';
echo '<a href="' . addBaseUrl("wishlist.php") . '">Wishlist</a>  |  ';
echo '<a href="' . addBaseUrl("product.php") . '">Add Product</a>';

echo '<hr>';