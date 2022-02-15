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
            echo ' На ферме обитает: ' . $animal->name . '<br>';
            echo '<br>';
        }
    }
}
