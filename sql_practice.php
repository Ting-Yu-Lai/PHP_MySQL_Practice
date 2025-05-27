<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL語法練習</title>
    <style></style>
</head>

<body>
    <?php
    // 先連線到資料表
    $conn = new mysqli("localhost", "root", "", "school");
    // 檢查連線是否成功
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 2. SQL 查詢語句
    $sql = "SELECT name, birthday FROM students WHERE YEAR(birthday) = 1984";

    // 3. 執行查詢
    $result = $conn->query($sql);

    // 4. 顯示結果
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "姓名: " . $row["name"] . "，生日: " . $row["birthday"] . "<br>";
        }
    } else {
        echo "查無資料";
    }

    // 5. 關閉連線
    $conn->close();
    ?>
</body>

</html>