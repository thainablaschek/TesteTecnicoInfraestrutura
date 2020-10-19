<?php  
    require_once 'config.php';

    $url = "mysql:host=$servername;dbname=$database;charset=utf8";
    $dsn_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ];

    try { 
        $conn = new PDO($url, $username, $password, $dsn_options);
    } catch (PDOException $error) {
        die("Connection failed: " . $error->getMessage());
        error_log("Connection failed: " . $error->getMessage());
    }