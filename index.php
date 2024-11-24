<!-- Exercice 1 : Afficher User Agent, IP et Nom du Serveur  -->

<?php
session_start();
/* Exercice 2 : Sessions avec nom, prénom, âge
Fichier : index.php (ajout pour l'exercice 2)
Ajoutez ce code avant le <!DOCTYPE html> :  */
$_SESSION['nom'] = 'Dupont';
$_SESSION['prenom'] = 'Jean';
$_SESSION['age'] = 30;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Informations de l'utilisateur</h1>
    <p>User Agent : <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
    <p>Adresse IP : <?= $_SERVER['REMOTE_ADDR'] ?></p>
    <p>Nom du Serveur : <?= $_SERVER['SERVER_NAME'] ?></p>

    <a href="infos.php">Page Infos</a>


<!--     Exercice 3 : Formulaire pour récupérer animal et couleur préférés
    Fichier : index.php (ajout pour l'exercice 3)  -->

    <h1>Formulaire des préférences</h1>
<form action="traitement.php" method="post">
    <label for="animal">Animal préféré :</label>
    <input type="text" id="animal" name="animal" required>
    <br>
    <label for="couleur">Couleur préférée :</label>
    <input type="text" id="couleur" name="couleur" required>
    <br>
    <button type="submit">Enregistrer</button>
</form>


</body>
</html>
