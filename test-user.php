<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Model\UserModel;

$userModel = new UserModel();

$users = $userModel->findAll();

foreach ($users as $userData) {
    echo $userData['prenom'] . ' ' . $userData['nom'] . PHP_EOL;
}