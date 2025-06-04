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
    $dsn = "mysql:host=localhost;dbname=store;charset=utf8";
    $pdo = new PDO($dsn, 'root', '');
    $id = $_GET['id'] ?? 0;
    // print $id; 先把該要懷疑誰print出來，然後再排查
    $item = $pdo->query("SELECT * FROM items WHERE id='$id'")->fetch(PDO::FETCH_ASSOC);
    if (!$item) {
        echo "<h2>品項不存在</h2>";
        exit;
    }
    ?>
    <form action="./api/update_item.php" method="post">
        <label for="name">品項:</label>
        <input type="text" name="name" id="name" value="<?= $item['name']; ?>" required>
        <div></div>
        <label for="price">價格:</label>
        <input type="text" name="price" id="price" value="<?= $item['price']; ?>" required>
        <div></div>
        <label for="stock">庫存:</label>
        <input type="text" name="stock" id="stock" value="<?= $item['stock']; ?>" required>
        <div></div>
        <label for="cost">成本:</label>
        <input type="text" name="cost" id="cost" value="<?= $item['cost']; ?>" required>
        <div></div>
        <input type="hidden" name="id" value="<?= $item['id']?>">
        <button type="submit">修改</button>
    </form>
</body>

</html>