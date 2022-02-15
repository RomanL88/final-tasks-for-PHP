<?php
class ToyFactory
{
    public function createToy($name)
    {
        //"<Название игрушки> - <Стоимость игрушки>"
        echo "$name - $this->price" . PHP_EOL;
        echo "<br>";
    }
}
