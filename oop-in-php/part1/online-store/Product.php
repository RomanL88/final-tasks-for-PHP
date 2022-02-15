<?php
class Product // товар
{
    public $name; // название 
    public $price; // цена

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //возвращает наименование товара
    public function getName()
    {
        return $this->name;
    }

    //возвращает стоимость товара
    public function getPrice()
    {
        return $this->price;
    }
}
