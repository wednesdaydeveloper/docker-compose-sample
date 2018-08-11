<?php
    date_default_timezone_set('Asia/Tokyo');

    $pdo = new PDO(
        'mysql:dbname=test;host=mysql;charset=utf8mb4',
        'root',
        'secret'
    );

    $stmt = $pdo->prepare("INSERT INTO counter () VALUE ()");
    $stmt->execute();

    $stmt = $pdo->prepare("SELECT * FROM counter ORDER BY id DESC limit 1");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($row);
?>
