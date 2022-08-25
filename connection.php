<?php


require_once 'config.php';

class Connection
{
    public static function make($host, $db, $username, $password)
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $conn = new PDO($dsn,  $username, $password, $options);
            $conn->exec("set names utf8");
            return $conn;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

return Connection::make($host, $db, $user, $password);
