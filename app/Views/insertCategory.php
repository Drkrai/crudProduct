<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Insert Category</h1>
    <form action="/saveCategory" method="post">
        <input type="hidden" name="id" value="">
        <label>Category</label>
        <input type="text" name="ProductCategory" value=""><br>
        <a href="/CategoryView"><input type="submit" name="" value="submit"></a>
    </form>
</body>
</html>