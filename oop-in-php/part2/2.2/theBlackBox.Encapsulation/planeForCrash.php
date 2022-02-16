<?php
require('plane.php');
require('engineer.php');

$blackBox = new BlackBox;
//создаём самолёт
$planeForCrash = new Plane($blackBox);

//пусть он полетает и разобьётся
$planeForCrash->flyAndCrush();

//Создайте инженера 
//со случайным значением уровня доступа от 1 до 5 
$newEngineer = new Engineer(rand(1, 5));

//попробуйте расшифровать чёрный ящик из разбившегося самолёта
$newEngineer->decodeBox($blackBox);
