<?php

class DB
{
    private static $instance = null;

    private $pdo;

    private function __construct()
    {
        $dsn = 'mysql:dbname=skillogram_710;host=localhost';
        $user = 'root';
        $password = 'password';

        $this->pdo = new PDO($dsn, $user, $password);

    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPdo()
    {
        return $this->pdo;
    }

}