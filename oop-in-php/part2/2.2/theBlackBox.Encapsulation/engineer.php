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
        $logs = $blackBox->getData($this->accessLevel);
        foreach ($logs as $log) {
            //var_dump($logs);
            for ($i = 0; $i < count($logs); $i++) {
                echo ($log[$i]);
                echo '<br>';
            }
        }
        //  old code //
        //// пробует расшифровать
        // return $blackBox->getData($this->accessLevel);
    }
}
