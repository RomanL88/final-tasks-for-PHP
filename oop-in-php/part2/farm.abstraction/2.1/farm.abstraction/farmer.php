<?php
// фермер
//менеджер, который передаёт наши команды на фермы
class Farmer
{
    // добавляет животное на указанную ферму
    public function addAnimal(Farm $farm, Animal $animal)
    {
        $farm->addAnimal($animal);
    }

    //вызывает перекличку животных на указанной ферме
    public function rollCall(Farm $farm)
    {
        $farm->rollCall();
    }
}
