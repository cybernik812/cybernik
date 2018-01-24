<?php

class User
{
    public $id;
    public $name;
    public $avatar;
    public $login;
    private $password;

    public function setPassword($password)
    {
        $this->password = md5($password . 'ewfewfrewf');
    }

    public function getPassword()
    {
        return $this->password;
    }

    public static function add(User $user)

    {
        $pdo = DB::getInstance()->getPdo();
        $stmt = $pdo->prepare('INSERT INTO users
            (name, login, password)
            VALUES (?,?,?)');
//        echo 'INSERT INTO users
//            (name, login, password)
//            VALUES (?,?,?'; die;
        $stmt->execute([
            $user->name,
            $user->login,
            $user->password
        ]);

    }

    public static function getHash($string) {

        return md5($string . 'defdefefrefwe');
    }

    public static function findByLogin($login, $password)
    {
        $pdo = DB::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT id, name, avatar,
                login
                FROM users
                WHERE login = ? AND password = ?');
        $stmt->execute([
            $login,
            self::getHash($password)
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $user = new User();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $user->login = $row['login'];
            $user->avatar = $row['avatar'];
            return $user;
        }
        return null;
    }

    public static function current()
    {
        if (!isset($_SESSION['user_id']) || !$_SESSION['user_id']) {
            return null;
        }
        $pdo = DB::getInstance()->getPdo();
        $stmt = $pdo->prepare('SELECT id, name, avatar,
                login
                FROM users
                WHERE login = ? AND password = ?');
        $stmt->execute([
            $login,
            self::getHash($password)
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $user = new User();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $user->login = $row['login'];
            $user->avatar = $row['avatar'];
            return $user;
    }

}