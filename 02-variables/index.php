<?php
// constantes
define('HOST','localhost');
define('USER','root');

// var_dump(USER);
// print_r(USER);

$x = 4;
$y = 2;
$z = 5;

// $calcul = $x + $y;
// $calcul = $x * $y;
// $calcul = $x / $y;
//$calcul = $x % $y;
// $calcul = $y ** $x;
$calcul = $x + ($y * $z);
// echo $calcul;

// affectation
$a = 5;
// $a = '5';
$b = 7;
// $a += 6; // $a = $a + 6;
// $a += $b;
// $a -= $b;
// $a *= $b;
// $a /= $b; 
//$a %= $b; // $a = $a % $b
// $a **= $b;
// echo $a;
// echo round($a,3);
$c = 'Hello ';
$c .= ' world.';
// echo $c;

//Creer 2 variables prix ht et tva
// Afficher le calcul du prix prix ttc
$prixht = 34;
$tva = 10;
$prixttc = $prixht + ($tva * $prixht) / 100;
echo '<h4>Prix HT en € : ' . $prixht . ' €</h4>';
echo '<h4>TVA en % : ' . $tva . ' %</h4>';
echo '<h4>Prix TTC en € : ' . $prixttc . ' €</h4>';



// Calculer l'âge d'une personne en renseigant son année de naissance , utiliser la fonction date









