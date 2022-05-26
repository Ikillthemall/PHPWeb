<?php
    $hostName = 'localhost';
    $pass = '';
    $userName ='root';
    $dbname = 'new_web2041';
    $charset = 'utf8';
    $dsn = "mysql:host=$hostName; dbname=$dname; charset=$charset";
    try{
        $connect = new PDO($dsn, $userName,$pass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected';
    }catch(PDOException $e){
        echo ('Error: '.$e->getMessage());
    }
?>