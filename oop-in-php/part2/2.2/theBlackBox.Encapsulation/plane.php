<?php
require('blackBox.php');
class Plane
{
    private BlackBox $blackBox;

    public function __construct($blackBox)
    {
        $this->blackBox = $blackBox;
    }

    /**
     *  имитирует процесс полёта самолёта и его крушения 
     * запишите различные строковые записи в лог чёрного ящика
     */
    public function flyAndCrush()
    {
        $this->addLog('взлетаем');
        $this->addLog('летим');
        $this->addLog('турбулентность');
        $this->addLog('катастрофа, самолёт падает');
    }


    /**
     * добавляет запись в чёрный ящик 
     * В начале каждой записи дописывается метка времени в формате: "Y.m.d H:i:s"
     */
    private function addLog(string $message)
    {
        (string)$dateToday = date('Y.m.d H:i:s' . ' ');
        $message = $dateToday . '| ' . $message;
        $this->blackBox->addLog($message);
    }

    /**
     * возвращает значение свойства blackBox
     */
    public function getBlackBox(): BlackBox
    {
        return $this->blackBox;
    }
}
