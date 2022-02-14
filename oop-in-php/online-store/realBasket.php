<?php
require("Order.php");
require("Product.php");
require("BasketPosition.php");
require("Basket.php");
require("../NotifFTC/sendMessage.php");

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


$newUser = new User("Николай Николаич", "email@mail.ru", 22, 89999999);

notify($newUser, "Для вас создан заказ, на сумму: " . $order->getPrice() . "<br>" . " Состав: " . "<br>" . $basket->describe());

/* function strForMessage () {
echo "Для вас создан заказ, на сумму: " . $order->getPrice() . "<br>" . " Состав: " . "<br>" . $basket->describe();
echo   " Состав: " . "<br>";
echo $basket->describe();
} */

/* 
echo "<pre>";
var_dump($basket);
echo "</pre>"; */
