<?php
class Engineer
{
    private int $accessLevel;
    public function __construct($accessLevel)
    {
        $this->accessLevel = $accessLevel;
    }

    /**
     * пробует дешифровать чёрный ящик 
     * построчно выводит результат дешифровки. - ?? КАК ЭТО СДЕЛАТЬ
     */
    public function decodeBox(BlackBox $blackBox)
    {
        return $blackBox->getData($this->accessLevel);
    }
}
