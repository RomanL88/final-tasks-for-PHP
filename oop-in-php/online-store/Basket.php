<?php
class Basket // корзина
{
    public $basket = []; // массив позиций товаров

    public function __construct()
    {
    }


    //создаёт новую позицию и добавляет её в корзину, 
    //объединение количества товаров можно не реализовывать
    public function addProduct(Product $product, $quantity)
    {
        // создаю новую позицию
        $newPosition = new BasketPosition($product, $quantity);

        // добавляю её в корзину
        $this->basket[][0] = $newPosition;

        //  ПРОШЛЫЙ КОД //
        /* echo "<pre>";
        var_dump($this->basket);
        echo "</pre>"; */
        /*  $newPosition = $product->getName();
        $i = 0;
        do {
            $this->basket[$i] = $newPosition;
            $i++;
        } while ($i < $quantity);
        echo "<pre>";
        var_dump($this->basket);
        echo "</pre>"; */
    }

    //возвращает стоимость всех позиций в корзине.                              
    // сумма цен всех позиций                                                   
    // цена позиции + цена другой позиции ....
    // для каждой позиции -> добавляем в переменную стоимость позиции
    //выводим переменную  
    public function getPrice()
    {
        $endPrice = 0;
        // перебрать массив списка цен в позициях в корзине

        foreach ($this->basket as $price) {

            // записать значения цены в переменную
            $endPrice += $price[0]["product"]['price'];

            //вернуть цену
            return $endPrice;
        }

        // СТАРЫЙ КОД //
        // записать значения цены в переменную 
        // $price += _____;

        //вернуть цену

        //    return $price; 


        /*  $price = 0;
        foreach ($this->basket as $product) {
            $price += $product->price;
        }
        return $price; */
    }

    //выводит или возвращает информацию о корзине в виде строки:                
    //для каждой позиции в корзине вывести                                      
    //"<Наименование товара> - <Цена одной позиции> - <Количество>"
    public function describe()
    {
        foreach ($this->basket as $product) {
            return $product[0]["product"]['name'] . " - " . $product[0]["product"]['price'] . " - " . $product[1]["quantity"];
        }
    }
}
