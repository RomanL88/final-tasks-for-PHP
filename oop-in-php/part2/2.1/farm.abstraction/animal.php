<?php

abstract class Animal
{
    public $name;
    //возвращает название вида животного, например: конь, курица, собака
    // возвращает элемент массива animals
    public function getName()
    {
        return $this->name;
    }
    //возвращает boolean-значения, является ли животное птицей. 
    //Для класса Animal всегда возвращает false
    public function isBird()
    {
        return false;
    }
}
