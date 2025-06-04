<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>早餐店系統</title>
    <style>
        h2 {
            text-align: center;
        }

        table,
        tr,
        td {
            width: 500px;
            height: 50px;
            margin: auto;
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 500px;
            height: 30px;
            display: flex;
            justify-content: start;
            align-items: center;
            margin:auto;
            /* background-color: green; */
        }

        .report {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <h1>泰山泰好吃早餐店</h1>
    <h2>餐點項目</h2>

    <?php
    $dsn = "mysql:host=localhost;dbname=store;charset=utf8";
    $pdo = new PDO($dsn, 'root', '');
    $items = $pdo->query("SELECT `id`, `name`, `price` FROM items")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <button><a href="./add_item.php">+</a></button>
        <button class="report"><a href="./sales_report.php">銷售報表</a></button>
    </div>
    <table>

        <tr>
            <td>品項</td>
            <td>價格</td>
        </tr>
        <?php
        foreach ($items as $item):
        ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td>
                    <?= $item['price'] ?>
                    <a href='./Edit_item_price.php?id=<?= $item['id']; ?>'>Edit</a>
                    <a href='./api/del_item.php?id=<?= $item['id']; ?>'>Del</a>
                </td>
            </tr>
        <?php
        endforeach
        ?>
    </table>
</body>

</html>