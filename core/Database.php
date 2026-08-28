<?php

namespace core;
use PDO;

class Database {
    private PDO $pdo;

    public function __construct()
    {
        $host = '127.0.0.1';
        $dbname = 'touche_pas_au_klaxon';
        $username = 'root';
        $password = '';

        $this->pdo = new PDO (
             "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
             $username,
             $password
        );
        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        );
    }
    public function getConnection(): PDO {
        return $this->pdo;
    }
}