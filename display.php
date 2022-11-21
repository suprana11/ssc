<?php
@include('./config/master.php');

$products = makeSqlQuery("SELECT productID, productName, price FROM product");

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
            <td>Wishlist</td>
        </tr>
    </thead>
    <tbody>

        <?php
        while ($row = mysqli_fetch_assoc($products)) {
            echo "<tr>
                <td>{$row["productID"]}</td>
                <td>{$row["productName"]}</td>
                <td>{$row["price"]}</td>
                <td>
                <form action=\"http://localhost/ssc/addToCart.php\" method=\"post\">
                    <input name=\"productID\" value=\"{$row["productID"]}\" type=\"hidden\" />
                    <button>Add</button>
                </form>
                </td>
                <td>
                <form action=\"http://localhost/ssc/addToWishlist.php\" method=\"post\">
                    <input name=\"productID\" value=\"{$row["productID"]}\" type=\"hidden\" />
                    <button>Add</button>
                </form>
                </td>
            </tr>";
        }

        ?>

    </tbody>
</table>