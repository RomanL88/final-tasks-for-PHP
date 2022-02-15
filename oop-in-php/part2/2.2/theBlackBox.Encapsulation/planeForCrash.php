<?php
require('plane.php');
require('engineer.php');
//создаём самолёт
$planeForCrash = new Plane($blackbox_1);

//пусть он полетает и разобьётся
$planeForCrash->flyAndCrush();

//Создайте инженера 
//со случайным значением уровня доступа от 1 до 5 
$newEngineer = new Engineer(rand(1, 5));

//попробуйте расшифровать чёрный ящик из разбившегося самолёта
$newEngineer->decodeBox($blackbox_1);


/* class planeForCrash extends Plane
{

    public function flyAndCrush()
    {
        $this->blackBox->addLog('вылет в 8:30');
        $this->blackBox->addLog('турбулентность в 12:23');
        $this->blackBox->addLog('отказ работы двигателей в 12:30');
        $this->blackBox->addLog('logOut в 12:45');
    }
    
}
 */