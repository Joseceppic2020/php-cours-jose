<?php
// Tableau indexé
 // declaration d'un tableau
$tableau = array();
$tableau = [];
$tableau2 = array('Lundi','Mardi',45,67.8,false);
$tableau = [true,45,'Terre',56,[45,67,78]];
$tableau = [
    true,
    45,
    'Terre',
    56,
    [45,67,78]
];
echo '<pre>';
// print_r($tableau2);

$tableau[] = 'Janvier';
$tableau[] = 45;
$tableau[] = false;
// var_dump($tableau);

// echo $tableau[0];

$notes = [12,5,16,7];
// Afficher la moyenne des notes 
$sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
$moyenne = $sommeNotes / 4;
// echo $moyenne;

$tableau[] =34;
$fruit =('panane' => 'jaune, 'pomme' => 'rouge,


$ages = ( 'Michel' =>34, Lucie =>12, Mouloud => 56;),
$ages = [
          Michel =>34,
          Lucie =>12,
          Mouloud=>56,
];
$chaine = implode ('-' $ages);  
echo $chaine , '<br>';
$age2 exploide('-',$chaine); 
print _ r($age2);
echo'<br>;
$ages['Paul'


echo '</pre>';