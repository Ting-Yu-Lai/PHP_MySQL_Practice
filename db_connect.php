<?php
$dsn = "mysql:host=localhost;dbname=school;charset=utf8";

$pdo = new PDO($dsn, 'root', '');

$sql = ("SELECT * FROM students WHERE id<=20");

$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
foreach ($rows as $row) {
?>
    <div class="card">
        <h3></h3>
        <div class="head"><?=$row['name'];?></div>
        <div class="id"><?=$row['id'];?></div>
        <div class="birthday"><?=$row['birthday'];?></div>
        <div class="tel"><?=$row['telphone'];?></div>
        <div class="num"><?=$row['school_num'];?></div>
    </div>
<?php
}
?>