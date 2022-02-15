<?php
abstract class Bird extends Animal
{
    public function isBird()
    {
        //животное является ли объектом класса Bird и не является животным 
        return ($this->animal instanceof Bird);
    }
}
