<?php
// opérations arithmétiques
$a = 10; $b = 5;
echo "Addition : " . ($a + $b) . "<br>"; // 15
echo "Soustraction : " . ($a - $b) . "<br>"; // 5
echo "Multiplication : " . ($a * $b) . "<br>"; // 50
echo "Division : " . ($a / $b) . "<br>"; // 2
echo "Modulo : " . ($a % $b) . "<br>"; // 0
echo "Puissance : " . ($a ** $b) . "<br>"; // 100000
echo "Incrémentation : " . ($a++) . "<br>"; // 10 (puis $a devient 11)
echo "Décrémentation : " . ($b--) . "<br>"; // 5 (puis $b devient 4)
echo "Valeur absolue : " . abs(-10) . "<br>"; // 10
echo "Racine carrée : " . sqrt(16) . "<br>"; // 4
echo "Arrondi : " . round(3.6) . "<br>"; // 4
echo "Plafond : " . ceil(3.2) . "<br>"; // 4
echo "Plancher : " . floor(3.8) . "<br>"; // 3
echo "Nombre aléatoire : " . rand(1, 100) . "<br>"; // entre 1 et 100

// opérations de comparaison
$a = 10; $b = 5;
echo "Égal : " . ($a == $b) . "<br>"; // false
echo "Identique : " . ($a === $b) . "<br>"; // false
echo "Différent : " . ($a != $b) . "<br>"; // true
echo "Différent identique : " . ($a !== $b) . "<br>"; // true
echo "Plus grand : " . ($a > $b) . "<br>"; // true
echo "Plus petit : " . ($a < $b) . "<br>"; // false
echo "Plus grand ou égal : " . ($a >= $b) . "<br>"; // true
echo "Plus petit ou égal : " . ($a <= $b) . "<br>"; // false
echo "Opérateur de comparaison : " . ($a <=> $b) . "<br>"; // 1 (car $a est supérieur à $b)

// opérations logiques
$a = true; $b = false;
echo "ET : " . ($a && $b) . "<br>"; // false
echo "OU : " . ($a || $b) . "<br>"; // true
echo "NON : " . (!$a) . "<br>"; // false
echo "XOR : " . ($a xor $b) . "<br>"; // true
echo "Opérateur de coalescence nulle : " . ($a ?? $b) . "<br>"; // true (car $a est défini)

?>