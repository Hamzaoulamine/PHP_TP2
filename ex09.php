<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbrValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nom</th><th>Note</th><th>Statut</th></tr>";

foreach ($notes as $nom => $note) {
    $somme += $note;
    $statut = ($note >= 10) ? "Validé" : "Non validé";
    
    if ($note >= 10) {
        $nbrValides++;
    }

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }

    echo "<tr><td>$nom</td><td>$note</td><td>$statut</td></tr>";
}
echo "</table>";

$moyenne = $somme / count($notes);

echo "<p>Moyenne de la classe : $moyenne</p>";
echo "<p>Nombre d'étudiants ayant validé : $nbrValides</p>";
echo "<p>Meilleure note : $meilleurEtudiant avec $meilleureNote/20</p>";
?>
