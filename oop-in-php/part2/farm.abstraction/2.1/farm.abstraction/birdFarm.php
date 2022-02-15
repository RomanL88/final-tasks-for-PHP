<?php
// птичья ферма
require('bird.php');
require('farm.php');

class BirdFarm extends Farm
{
    //переопределяю перекличку животных

    //должен сначала вывести строку с количеством птиц на птицеферме, а затем провести перекличку. 
    //Строка с количеством птиц должна выглядеть следующим образом:
    //"Птиц на птицеферме: <кол-во птиц>"
    public function rollCall()
    {
        //кол-во птичек
        $countBirds = 0;

        foreach ($this->animals as $animal) {
            if ($animal->isBird()) {
                $countBirds++;
            }
        }
        echo 'Птиц на птицеферме: ' . $countBirds;

        //ПЕРЕКЛИЧКА
        shuffle($this->animals);
        foreach ($this->animals as $animal) {
            echo 'На ферме обитает: ' . $animal;
        }
    }
}
