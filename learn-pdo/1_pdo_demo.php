<?php
$dsn = 'mysql:dbname=mark_base;host=192.168.1.10';
$username = 'mark';
$password = 'vlvsTPeG';

try {
    $pdo = new PDO($dsn, $username, $password);

    $sql = 'select * from user';
    $stat = $pdo->query($sql);
    $res = $stat->fetchAll(PDO::FETCH_ASSOC);
    print_r($res);
} catch (PDOException $e)
{
    echo $e->getMessage();
    exit;
}