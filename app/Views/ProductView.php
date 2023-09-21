<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Products</h1>
        <ul>
            <?php foreach ($product as $pro): ?>
            <li><a href="editView/<?= $pro['id'] ?>"><?= $pro['ProductName']?></a></li>
        </ul>
        <?php endforeach;?>
        <button><a href="insertView/">Insert</a></button>
</body>
</html>