<?php
require_once("Order.php");
require_once("Product.php");
require_once("BasketPosition.php");
require_once("Basket.php");

//создаю корзину
$basket =  new Basket;

//создаю товары
$product1 = new Product("светильник", 750);
$product2 = new Product("стул", 250);
$product3 = new Product("комод", 5000);

//наполняю товарами
$basket->addProduct($product1, 3);
$basket->addProduct($product2, 4);
$basket->addProduct($product3, 1);

//Создайте заказ на основе этой корзины таким образом
$order = new Order($basket);

//Выведите информацию о корзине этого заказа 
//и выведите общую стоимость заказа.
//"Заказ, на сумму: <сумма заказа> Состав: <информация о корзине>"

echo "Заказ, на сумму: " . $basket->getPrice() . " Состав: " . $basket->describe();


/* $productObject = new Product(1, 123);
$test = new BasketPosition($productObject, 12);

$order = new Order($basket);
$order->shippingCost = 400;
$order->getBasket(); */



//Выведите информацию о корзине этого заказа и выведите общую стоимость заказа.
//echo "Заказ, на сумму: " . $order->getPrice() . " Состав: " . $order->getBasket($basket);
