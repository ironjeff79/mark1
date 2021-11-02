<?php
    $dsn = 'mysql:dbname=tb230626db;host=localhost';
    $user = 'tb-230626';
    $password = 'Vxknr54KK5';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    //4-1で書いた「// DB接続設定」のコードの下に続けて記載する。
    // 【！この SQLは tbtest テーブルを削除します！】
        $sql = 'DROP TABLE tbtest';
        $stmt = $pdo->query($sql);
?>