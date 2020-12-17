<?php
class Database 	{
    public static function StartUp()   {
        $pdo = new PDO('mysql:host=159.203.98.121;dbname=ct_administrador;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}