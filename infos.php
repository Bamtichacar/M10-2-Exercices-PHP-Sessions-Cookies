<!-- Exercice 2 : Sessions avec nom, prénom, âge  -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Informations de session</h1>
    <p>Nom : <?= $_SESSION['nom'] ?? 'Non défini' ?></p>
    <p>Prénom : <?= $_SESSION['prenom'] ?? 'Non défini' ?></p>
    <p>Âge : <?= $_SESSION['age'] ?? 'Non défini' ?></p>

    <a href="index.php">Retour à l'accueil</a>
</body>
</html>
