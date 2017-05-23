<?php
error_reporting(E_ALL);
$dsn = 'mysql:dbname=robot;host=192.168.31.249';
$user = 'root';
$password = 'chukui';

try {
    $pdo = new pdo($dsn, $user, $password);
    $sql = "set names utf8";
    $pdo->exec($sql);
    $sql = "select * from mzitu where category= '性感妹子' order by url limit 4000,6000";
    $stat = $pdo->query($sql);
    $res = $stat->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e)
{
    echo $e->getMessage();
    exit;
}
$img = '';
foreach ($res as $k => $v) {
	$img .= '<p>' .$v['title'].'</p><br/>';
	$img .= '<img src="'.$v['image'].'" /><br/>';
}

file_put_contents('./mzitu.html', $img);