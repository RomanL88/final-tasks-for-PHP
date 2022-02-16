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
     * построчно выводит результат дешифровки. 
     */
    public function decodeBox(BlackBox $blackBox)
    {
        $logs = $blackBox->getData($this->accessLevel);
        foreach ($logs as $log) {
            echo $log;
            echo '<br>';
        }
    }
}
