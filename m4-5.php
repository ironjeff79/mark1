<?php
    $dsn = 'mysql:dbname=tb230626db;host=localhost';
    $user = 'tb-230626';
    $password = 'Vxknr54KK5';
    $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    
    $sql = $pdo -> prepare("INSERT INTO tbtest (name, comment) VALUES (:name, :comment)");
    $sql -> bindParam(':name', $name, PDO::PARAM_STR);
    $sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
    $name = '（jeffery）';
    $comment = '（good luck!）'; //好きな名前、好きな言葉は自分で決めること
    $sql -> execute();
    //bindParamの引数名（:name など）はテーブルのカラム名に併せるとミスが少なくなります。最適なものを適宜決めよう。
?>