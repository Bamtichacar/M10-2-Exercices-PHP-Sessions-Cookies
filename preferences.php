<!-- Exercice 4 : Afficher les cookies -->

<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Vos préférences</h1>
    <p>Animal préféré : <?= $_COOKIE['animal'] ?? 'Non défini' ?></p>
    <p>Couleur préférée : <?= $_COOKIE['couleur'] ?? 'Non défini' ?></p>

    <a href="edit.php">Modifier vos préférences</a>
</body>
</html>
