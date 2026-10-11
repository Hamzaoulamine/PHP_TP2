<?php
echo "<h3>1. Nombres pairs de 0 à 20</h3>";
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>10</strong> ";
    } else {
        echo $i . " ";
    }
    $i += 2;
}

echo "<h3>2. Comparaison while vs do-while</h3>";
$compteur = 5;
$exec_while = 0;
while ($compteur < 5) {
    $exec_while++;
    $compteur++;
}

$compteur = 5;
$exec_dowhile = 0;
do {
    $exec_dowhile++;
    $compteur++;
} while ($compteur < 5);

echo "Exécutions while : $exec_while <br>";
echo "Exécutions do-while : $exec_dowhile <br>";

echo "<h3>3. Nombres de 1 à 20 avec filtre</h3>";
for ($n = 1; $n <= 20; $n++) {
    if ($n % 3 == 0) {
        continue;
    }
    if ($n >= 16) {
        break;
    }
    echo $n . " ";
}
?>
