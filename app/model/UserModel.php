<?php

namespace App\Model;

use Core\Database;
use PDO;

class UserModel
{
    private PDO $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function findAll(): array
    {
        $sql = 'SELECT * FROM users';
        $statement = $this->pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}