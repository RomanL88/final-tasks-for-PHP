<?php
//require "Product.php";

class BasketPosition //позиция одного товара в заказе
{
    public $product; // товар 
    public $quantity; // количество

    public function __construct($product, $quantity)
    {
        $this->product = $product;
        $product = new Product($this->getProduct(), $this->getPrice());
        $this->quantity = $quantity;
    }

    //возвращает наименование товара в этой позиции
    public function getProduct()
    {
        return $this->product;
    }

    //возвращает количество товаров в этой позиции
    // сумма товаров в одной позиции
    // переменна = сумма товаров в одной позиции
    //переменна = (товар + товар...)
    public function getQuantity()
    {
        return $this->quantity;
    }

    //возвращает стоимость позиции
    public function getPrice()
    {
        return $this->product->getPrice() * $this->getQuantity();
    }
}
