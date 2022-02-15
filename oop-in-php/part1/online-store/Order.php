<?php

class Order // заказ
{
    public $basket; // корзина 
    public $shippingCost; // цена доставки

    public function __construct(Basket $basket, $shippingCost = 0)
    {
        $this->basket = $basket;
        $this->shippingCost = $shippingCost;
    }

    //возвращает объект-корзину, которая хранится в заказе
    public function getBasket()
    {
        return $this->basket;
    }
    //возвращает общую стоимость заказа 
    //Сумма стоимости корзины           ДОБАВИЛ 
    // и стоимости доставки заказа      ДОБАВИЛ 
    public function getPrice()
    {
        return (($this->basket->getPrice()) + ($this->shippingCost));
    }
}
