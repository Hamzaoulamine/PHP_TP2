<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
    <h1><?php echo "Bienvenue dans mon TP PHP"; ?></h1>

    <?php
    $nom = "Oulamine";
    $prenom = "Hamza";
    $groupe = "G4";


    echo "<p>Nom : " . $nom . "</p>";
    echo "<p>Prénom : " . $prenom . "</p>";
    echo "<p>Groupe : " . $groupe . "</p>";
    ?>

    <p><?= "Dernière phrase affichée avec la syntaxe courte." ?></p>
</body>
</html>
