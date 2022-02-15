<?php

class Farm
{
    //массив животных на ферме
    public $animals = [];

    //добавляет животное на ферму.
    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    //вызывает перекличку животных. 
    //Перекличка выполняется для всех животных на ферме в случайном порядке. 
    //Для каждого животного должна выводиться строка:
    //"На ферме обитает: <вид животного>"
    public function rollCall()
    {

        shuffle($this->animals);
        foreach ($this->animals as $animal) {
            echo 'На ферме обитает: ' . $animal;
        }


        // СТАРЫЙ КОД //
        /* $endAnimal = [];
        // пока животные не закончатся в массиве
        for ($i = 0; $i < count($this->animals); $i++) {
            //выбираем рандомного
            $randAnimal = array_rand($this->animals);


            // если уже называли животное
            if (array_key_exists($randAnimal, $endAnimal)) {
                $i--;
            } else {
                //выводим, что он обитает на ферме
                echo 'На ферме обитает: ' . $randAnimal . PHP_EOL;
                $endAnimal[] = $randAnimal;
            }
        } */
    }
}
