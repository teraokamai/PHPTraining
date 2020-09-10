<?php
    // データベースに接続
    $pdo = new PDO(
      'mysql:dbname=db;host=localhost;charset=utf8mb4',
      '',
      '',
      [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      ]
    );

    print PHP_VERSION;
?>