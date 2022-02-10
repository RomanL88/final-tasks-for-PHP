<?php
require("HungryCat.php");
/* Создайте двух совершенно разных голодных котов 
и накормите каждого тремя разными блюдами. 
Оба котика обязательно должны помурчать. */
$newCat1 = new HungryCat("Барсик", "серый", "сосиски");
$newCat1->eat("сосиски") . PHP_EOL;
$newCat1->eat("курочку") . PHP_EOL;
$newCat1->eat("кошачий корм") . PHP_EOL;

$newCat2 = new HungryCat("Мурзик", "рыжий", "кошачий корм");
$newCat2->eat("сосиски") . PHP_EOL;
$newCat2->eat("курочку") . PHP_EOL;
$newCat2->eat("кошачий корм") . PHP_EOL;
