<?php
$moyenne = 14;

if ($moyenne < 0 || $moyenne > 20) {
    echo "Note invalide";
} else {
    if ($moyenne < 10) {
        $message = "Non validé";
    } elseif ($moyenne < 12) {
        $message = "Passable";
    } elseif ($moyenne < 14) {
        $message = "Assez bien";
    } elseif ($moyenne < 16) {
        $message = "Bien";
    } else {
        $message = "Très bien";
    }
    echo "Moyenne : " . $moyenne . " => Mention : " . $message;
}
?>
