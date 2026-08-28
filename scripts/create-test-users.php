<?php

$host = '127.0.0.1';
$dbname = 'touche_pas_au_klaxon';
$username = 'root';
$password = '';

$pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
    $username,
    $password
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "=== Création des comptes de test ===" . PHP_EOL;
echo PHP_EOL;

echo "Mot de passe du compte admin : ";
$adminPassword = trim(fgets(STDIN));

echo "Mot de passe du compte utilisateur : ";
$userPassword = trim(fgets(STDIN));

$users = [
    [
        'role' => 'admin',
        'nom' => 'Administrateur',
        'prenom' => 'Admin',
        'telephone' => '0600000000',
        'email' => 'admin@touche-pas-au-klaxon.fr',
        'mot_de_passe' => $adminPassword,
    ],
    [
        'role' => 'user',
        'nom' => 'Utilisateur',
        'prenom' => 'Test',
        'telephone' => '0611111111',
        'email' => 'user@touche-pas-au-klaxon.fr',
        'mot_de_passe' => $userPassword,
    ],
];

$sql = '
    INSERT INTO users (
        role,
        nom,
        prenom,
        telephone,
        email,
        mot_de_passe
    ) VALUES (
        :role,
        :nom,
        :prenom,
        :telephone,
        :email,
        :mot_de_passe
    )
';

$stmt = $pdo->prepare($sql);

foreach ($users as $user) {
    $stmt->execute([
        'role' => $user['role'],
        'nom' => $user['nom'],
        'prenom' => $user['prenom'],
        'telephone' => $user['telephone'],
        'email' => $user['email'],
        'mot_de_passe' => password_hash(
            $user['mot_de_passe'],
            PASSWORD_DEFAULT
        ),
    ]);
}

echo PHP_EOL;
echo "Les comptes ont été créés avec succès." . PHP_EOL;