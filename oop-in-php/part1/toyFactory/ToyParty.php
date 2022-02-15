<?php
require("Toy.php");
require("ToyFactory.php");


//массив строк с названиями игрушек, 
$ToyNameParty = ['солдатик", "машинка", "кукла", "динозавр", "лего'];

//случайное количество игрушек 
$countToys = rand(5, 20);




for ($i = 0; $i < $countToys; $i++) {

    //случайное имя игрушки
    $randToyName = $ToyNameParty[rand(0, 4)];
    $priceToys = rand(30, 1000);
    $priceToysAll += $priceToys;

    $ToyParty = new ToyFactory($randToyName, $priceToys);
    $ToyParty->createToy($randToyName);
}
echo "<br>";
echo 'Итого - ' . $priceToysAll;
