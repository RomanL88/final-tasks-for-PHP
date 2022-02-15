<?php
require('animal.php');
require('birdFarm.php');
require('farmer.php');

// создаю животных
class Wolf extends Animal
{
    public function getName()
    {
        return $this->animal;
    }
    public function isBird()
    {
        //животное является ли объектом класса Bird и не является животным 
        return (!($this->animal instanceof Animal) && ($this->animal instanceof Bird));
    }
}
class Bear extends Animal
{
}
class Rabbit extends Animal
{
}

// создаю птичек
/* $bird_1 = new Bird;
$bird_2 = new Bird;
$bird_3 = new Bird; */

//Создайте по одному экземпляру классов Farm, BirdFarm, Farmer

$farm = new Farm;
$birdFarm = new BirdFarm;
$farmer = new Farmer;

//Создайте массив с животными
//в нём должны быть вперемешку и птицы, и не птицы

$allAnimals = [$animal_3, $animal_2, $bird_3, $animal_1, $bird_2, $bird_1];

//Расселите одним циклом всех животных на фермы с помощью фермера
$animal = new Animal;
foreach ($allAnimals as $allAnimal) {
    if ($animal->isBird()) {
        $farmer->addAnimal($birdFarm, $allAnimal);
    } else {
        $farmer->addAnimal($farm, $allAnimal);
    }
}

//попросите фермера провести перекличку на этих фермах
$farmer->rollCall($birdFarm);
$farmer->rollCall($farm);
