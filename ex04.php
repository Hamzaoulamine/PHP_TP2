<?php
$val1 = 42;
$val2 = "-42";
$val3 = 15.8;
$val4 = true;
$val5 = false;
$val6 = null;

echo "<pre>";
var_dump($val1, $val2, $val3, $val4, $val5, $val6);
echo "</pre>";

$conv1 = (int)"-42";
$conv2 = (int)15.8;
$conv3 = (string)42;

echo "<pre>";
var_dump($conv1, $conv2, $conv3);
echo "</pre>";

echo "Affichage de true avec echo : " . $val4 . "<br>";
echo "Affichage de false avec echo : " . $val5 . "<br>";

echo "<pre>";
var_dump((bool)0, (bool)"0", (bool)"PHP", (bool)[]);
echo "</pre>";
?>
