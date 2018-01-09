<?php
/**
 * Class DB (singletone)
 */
class DB
{
    private static $instance = null;
    private $pdo;
    private function __construct()
    {
        $dsn = 'mysql: dbname=skillogram_710;host=cybernik.ru';
        $user = 'root';
        $password = '';
        $this->pdo = new PDO($dsn, $user, $password);
    }
    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new self(); // == вызвать снаружи new DB-> __construct()
        }
        return self::$instance;
    }
    public function getPDO()
    {
        return $this->pdo;
    }
}
