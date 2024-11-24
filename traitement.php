<!-- Exercice 3 : Formulaire pour récupérer animal et couleur préférés  -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $animal = htmlspecialchars($_POST['animal']);
    $couleur = htmlspecialchars($_POST['couleur']);

    // Création du cookie
    setcookie('animal', $animal, time() + 3600, "/");
    setcookie('couleur', $couleur, time() + 3600, "/");

    header('Location: preferences.php');
    exit();
}
?>
