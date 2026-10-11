<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * (TAUX_TVA / 100);
$totalTTC = $totalHT + $montantTVA;

$totalTTC += 15; // Ajout des frais de livraison

echo "<h3>Récapitulatif de la commande</h3>";
echo "Total HT : " . $totalHT . " " . DEVISE . "<br>";
echo "Montant TVA (" . TAUX_TVA . "%) : " . $montantTVA . " " . DEVISE . "<br>";
echo "Total TTC (avec livraison) : " . $totalTTC . " " . DEVISE . "<br><br>";

if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA est bien définie.";
}
?>
