<?php
class HungryCat
{
    public $name;
    public $color;
    public $favoriteFood;

    public function __construct($name, $color, $favoriteFood)
    {
        $this->name = $name;
        $this->color = $color;
        $this->favoriteFood = $favoriteFood;
    }

    // Создайте и реализуйте метод 

    public function eat($food)
    {
        $this->food = $food;
        echo "Голодный кот $this->name, особые приметы: цвет - $this->color, съел $food" . PHP_EOL;

        if ($this->favoriteFood == $this->food) {
            echo "  и замурчал 'мррррр' от своей любимой еды" . PHP_EOL;
        }
        echo '<br>';
    }
}
