<?php
if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['groupe'])) {
    echo "Veuillez soumettre le formulaire correctement.";
    exit;
}

$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);
$groupe = trim($_POST['groupe']);

if (empty($nom) || empty($prenom) || empty($groupe)) {
    echo "Tous les champs sont obligatoires. Formulaire incomplet !";
} else {
    echo "Bonjour " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " " 
         . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . ", vous êtes affecté(e) au groupe " 
         . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . ".";
}
?>
