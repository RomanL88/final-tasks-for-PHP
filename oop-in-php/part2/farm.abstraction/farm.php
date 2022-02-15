<?php

namespace animal;

class Animal
{
    //возвращает название вида животного, например: конь, курица, собака
    public function getName()
    {
        $farm = new Farm;
        // $nameAnimal = $farm->$animals[];
        //return $nameAnimal;
    }
    //возвращает boolean-значения, является ли животное птицей. 
    //Для класса Animal всегда возвращает false
    public function isBird()
    {/* 
        //животное является ли объектом класса Bird и не является животным 
        if (!($animal instanceof Animal) && ($animal instanceof Bird)){
        } */
    }
}


class Bird extends Animal
{
    public function isBird()
    {
    }
}


class Farm
{
    //массив животных на ферме
    public $animals = [];
}

class BirdFarm extends Farm
{
}

class Farmer
{
}
