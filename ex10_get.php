<?php
if (!isset($_GET['nom']) || !isset($_GET['prenom']) || !isset($_GET['groupe'])) {
    echo "Veuillez soumettre le formulaire correctement.";
    exit;
}

$nom = trim($_GET['nom']);
$prenom = trim($_GET['prenom']);
$groupe = trim($_GET['groupe']);

if (empty($nom) || empty($prenom) || empty($groupe)) {
    echo "Tous les champs sont obligatoires. Formulaire incomplet !";
} else {
    echo "Bonjour " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " " 
         . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . ", vous êtes affecté(e) au groupe " 
         . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . ".";
}
?>
