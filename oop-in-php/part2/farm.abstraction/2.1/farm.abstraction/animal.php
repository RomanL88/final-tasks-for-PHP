<?php
abstract class Animal
{
    //возвращает название вида животного, например: конь, курица, собака
    // возвращает элемент массива animals
    public function getName()
    {
        return $this->animal;
    }
    //возвращает boolean-значения, является ли животное птицей. 
    //Для класса Animal всегда возвращает false
    public function isBird()
    {
        //животное является ли объектом класса Bird и не является животным 
        return (!($this->animal instanceof Animal) && ($this->animal instanceof Bird));
    }
}

// где-то в классе animal есть элемент свойство animal
