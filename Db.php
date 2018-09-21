<?php
/**
 * Created by PhpStorm.
 * User: nzt200
 * Date: 21.09.18
 * Time: 5:09
 */
namespace Nzt200\App\Components;
use \PDO;

class Db
{
    public static function getConnection()
    {
        include ROOT . '/config/config.php';
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $db  = new PDO($dsn, DB_USER,DB_PASSWORD,$opt);
        return $db;
    }
}