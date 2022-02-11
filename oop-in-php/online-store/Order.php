<?php

require('Basket.php');

class Order // заказ
{
    public $basket; // корзина 
    public $shippingCost; // цена доставки

    public function __construct($basket, $shippingCost = 0)
    {
        $this->basket = $basket;
        $this->shippingCost = $shippingCost;
    }

    //возвращает объект-корзину, которая хранится в заказе
    public function getBasket()
    {
        return $this->basket;
    }
    ///////////////////////////////////////////////////////////////
    //возвращает общую стоимость заказа 
    //Сумма стоимости корзины           ДОБАВИЛ 
    // и стоимости доставки заказа      ДОБАВИЛ 
    public function getPrice()
    {
        $priceBasket = 0;

        foreach ($this->basket as $basketItem) {
            $priceBasket += $this->basket->getPrice();
        }
        $priceBasket += $this->shippingCost;
        return $priceBasket;
    }
}
