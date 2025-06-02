<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改餐點價格</title>
</head>
<body>
    <h1>修改餐點價格</h1>
    <?php
        $dsn="host=localhost;dbname=store;charset=utf8";
        $pdo = new PDO($dsn, 'root', '');
        $price = $pdo->query("UPDATE `name`,`price` FROM `items`")
    ?>
</body>
</html>