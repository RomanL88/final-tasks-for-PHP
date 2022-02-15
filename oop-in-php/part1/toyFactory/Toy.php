<?php
class Toy
{

    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = rand(30, 1000);
    }
}
