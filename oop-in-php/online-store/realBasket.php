<?php
require("Order.php");
require("Product.php");
require("BasketPosition.php");
require("Basket.php");


// новая корзина
$basket = new Basket;

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
echo "<pre>";
var_dump($order);
echo "</pre>";

//Выведите информацию о корзине этого заказа 
//и выведите общую стоимость заказа.


echo "Заказ, на сумму: " . $order->getPrice() . " Состав: " . $order->getBasket() . "";

/* echo "<pre>";
var_dump($basket);
echo "</pre>"; */
//echo "Заказ, на сумму: " . $basket->getPrice() . " Состав: " . $basket->describe();


/* $productObject = new Product(1, 123);
$test = new BasketPosition($productObject, 12);

$order = new Order($basket);
$order->shippingCost = 400;
$order->getBasket(); */



//Выведите информацию о корзине этого заказа и выведите общую стоимость заказа.
//echo "Заказ, на сумму: " . $order->getPrice() . " Состав: " . $order->getBasket($basket);
