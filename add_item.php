<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增餐點</title>
</head>

<body>
    <h1>新增餐點項目</h1>
    <form action="./api/add_item.php" method="post">
        <label for="name">品項:</label>
        <input type="text" name="name" id="name"  required>
        <div></div>
        <label for="price">價格:</label>
        <input type="text" name="price" id="price"  required>
        <div></div>
        <label for="stock">庫存:</label>
        <input type="text" name="stock" id="stock" required>
        <div></div>
        <label for="cost">成本:</label>
        <input type="text" name="cost" id="cost"  required>
        <div></div>
        <button type="submit">新增</button>
    </form>
</body>

</html>