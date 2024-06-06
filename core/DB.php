<?php

namespace core;

use Exception;
use PDO;
use PDOException;

class DB
{

    public PDO $pdo;
    protected static DB $instance;

    public function __construct()
    {

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $DB_DSN = 'mysql:host=localhost;dbname=mfo;charset=utf8';
            $DB_USER = 'root';
            $DB_PASSWORD = '';

            $this->pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD, $options);
        } catch (PDOException $e) {
            die('Подключение не удалось: ' . $e->getMessage());
        }
    }

    public static function instance(): DB
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function execute($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        try {
            return $stmt->execute($params);
        } catch (Exception $ex) {
            exit($ex);
        }
    }

    public function query($sql, $params = []): false|array
    {
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute($params);
        if ($res !== false) {
            return $stmt->fetchAll();
        }
        return [];
    }

}
