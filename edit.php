<!-- Exercice 5 : Modifier les cookies -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Modifier vos préférences</h1>
    <form action="traitement.php" method="post">
        <label for="animal">Animal préféré :</label>
        <input type="text" id="animal" name="animal" value="<?= $_COOKIE['animal'] ?? '' ?>" required>
        <br>
        <label for="couleur">Couleur préférée :</label>
        <input type="text" id="couleur" name="couleur" value="<?= $_COOKIE['couleur'] ?? '' ?>" required>
        <br>
        <button type="submit">Modifier</button>
    </form>
    <a href="preferences.php">Retour aux préférences</a>
</body>
</html>
