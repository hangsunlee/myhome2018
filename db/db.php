<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
try {
    $pdo = new PDO('mysql:host=localhost; dbname=hslee; charset=utf8;','root','rhakdnj');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}catch(PDOException $Exception){
    die("연결실패".$Exception->getMessage());
}
?>