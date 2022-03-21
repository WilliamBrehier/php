<?php

require_once 'Personnage.php';

$arthur = new Personnage('Arthur','roi',100,10);

//$arthur->presentation();

//echo $arthur->getProfession();

$arthur->setProfession('chevalier');


var_dump($arthur);


/*$personnage = new Personnage( 'toto','cuistot');


$personnage2 = new Personnage('titi', 'guerrier');

$personnage->appel();
$personnage2->appel();die;
var_dump($personnage);

var_dump($personnage2);die;*/

