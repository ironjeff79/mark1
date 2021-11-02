DB接続設定
<?php
    $dsn = 'mysql:dbname=tb230626db;host=localhost';
    $user = 'tb-230626';
    $password = 'Vxknr54KK5';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    
?>
