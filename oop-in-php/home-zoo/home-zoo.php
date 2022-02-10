<?php
require_once('animalsName/nameCat.php');
require_once('animalsName/nameDog.php');
require_once('animalsName/nameFish.php');


$newCat1 = new nameCat\Cat("Барсик");
$newCat2 = new nameCat\Cat("Мурзик");

$newDog1 = new nameDog\Dog("Тишка");
$newDog2 = new nameDog\Dog("Полкан");

$newFish1 = new nameFish\Fish("Мира");
$animals = [$newCat1, $newCat2, $newDog1, $newDog2, $newFish1];
echo '<pre>';
var_dump($animals);
echo '</pre>';
