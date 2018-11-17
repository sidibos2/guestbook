<?php
namespace Bark\Model;

class Connection
{
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_NAME = 'guestbook';
    const DB_HOST = 'localhost';

    public function getInstance()
    {
        $dsn = "mysql:host=" .self::DB_HOST. ";dbname=" . self::DB_NAME. ";charset=utf8";
        $opt = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new \PDO($dsn, self::DB_USER, self::DB_PASS, $opt);
    }
}