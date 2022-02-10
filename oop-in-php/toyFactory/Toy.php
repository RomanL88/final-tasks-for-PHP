<?php
class Toy
{

    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // создаю игрушки))))

    public function createToy($name)
    {
        //"<Название игрушки> - <Стоимость игрушки>"
        echo "$name - $this->price" . PHP_EOL;
        echo "<br>";
    }
}
