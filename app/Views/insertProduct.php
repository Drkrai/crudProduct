<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/save" method="post">
    <input type="hidden" name="id" value="">
    <label>Product Name</label>
    <input type="text" name="ProductName" value="">
    <label>Product Description</label>
    <input type="text" name="ProductDescription" value="">
    <label>Quantity</label>
    <input type="text" name="ProductQuantity" value="">
    <label>Price</label>
    <input type="text" name="Product Price" value="">
    <label>Category</label>
    <select name="ProductCategory" id="ProductCategory">
        <?php foreach(): ?>
        <option value=""></option>
    </select>
    <a href="/productView"><input type="submit" name="" value="submit"></a>
    </form>
</body>
</html>