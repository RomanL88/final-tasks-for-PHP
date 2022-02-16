<?php
// ПЕЧЬ
class Forge
{

    //сжигает указанный предмет
    public function burn($object)
    {
        /**
         * качестве параметра передавая случайным образом один 
         * из объектов BlueFlame, RedFlame, Smoke
         */
        $blueFlame = new BlueFlame;
        $redFlame = new RedFlame;
        $smoke = new Smoke;

        $flame = [$blueFlame, $redFlame, $smoke];
        $rand = rand(0, 2);
        //рандомное пламя
        $randFlame = $flame[$rand];

        //вызываю метод рандомного пламяни

        $object->burnWith($randFlame);
    }
}
