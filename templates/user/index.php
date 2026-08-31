<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Utilisateurs</title>
</head>
<body>

    <h1>Liste des utilisateurs</h1>

    <?php foreach ($users as $user): ?>
        <p>
            <?= htmlspecialchars($user['prenom']) ?>
            <?= htmlspecialchars($user['nom']) ?>
        </p>
    <?php endforeach; ?>

</body>
</html>