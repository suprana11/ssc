<html>
<head>
<title>Ecommerce</title>
<link rel="stylesheet" href="product.css">
</head>
<body>
    <h1>Add new items here</h1>
    <div class="form-outer">
    <div class="form">     
        <form action="detail.php" method="post">
            <div class="item1"><label for="product_id">Product Id:<br>
            <input type="text" id="product_id" name="product_id"/></label><br></div>
            <div class="item2"><label for="product_name">Product Name:<br>
            <input type="text" id="product_name" name="product_name"/></label><br></div>
            <div class="item3"><label for="price">Price:<br>
            <input type="text" id="price" name="price"/></label><br></div>
            <div class="item4">
                <button type="submit" value="Submit">Add</button><br>
                <button type="submit" formaction="display.php">View Product</button></div>
            </form>
        </div>
        </div>
</body>
</html>