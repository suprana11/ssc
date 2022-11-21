<?php
@include('./config/master.php');

$products = makeSqlQuery("SELECT * FROM cart join product on cart.productID = product.productID where cart.isWishlist = 0");

if (mysqli_num_rows($products) == 0) {
    die("0 items");
}

?>

<table>
    <thead>
        <tr>
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Cart</td>
        </tr>
    </thead>
    <tbody>

        <?php
$totalNpr = 0;

while ($row = mysqli_fetch_assoc($products)) {
    $totalNpr += $row["price"];
           echo "<tr>
                <td>{$row["productID"]}</td>
                <td>{$row["productName"]}</td>
                <td>{$row["price"]}</td>
                <td>
                <form action=\"http://localhost/ssc/removeFromCart.php\" method=\"post\">
                    <input name=\"productID\" value=\"{$row["productID"]}\" type=\"hidden\" />
                    <button>Remove</button>
                </form>
                </td>
            </tr>";

        }
?>
    </tbody>
</table>

<p>Total: <?=$totalNpr?></p>