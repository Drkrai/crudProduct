<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>Products</h1>
    <table>
        <tr>
            <?php foreach ($pro as $prod): ?>
            <li><a href="/editProduct/<?= $prod['id'] ?>"><?= $prod['ProductName']?></a></li>
            </tr>
        <?php endforeach;?>
    </table>
        <button><a href="/insertProduct/">Insert Product</a></button>
</body>
</html>