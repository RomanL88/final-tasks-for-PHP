<?php
class BlackBox
{
    //лог записей полёта самолёта
    private array $data = [];

    //к строке $message в начале должен дописаться порядковый номер этой записи в логе
    public function addLog(string $message)
    {
        (string) $serialNumber = count($this->data) + 1;
        $message = $serialNumber . $message;
        //добавляет новую запись в лог
        $this->data[] = $message;
    }

    //проверяет уровень доступа 
    // возвращает массив с логами ящика
    public function getData(int $accessLevel): array
    {
        if ($accessLevel <= 1) {
            return 'Доступ запрещен';
        } elseif ($accessLevel > 1 && $accessLevel <= 3) {
            return (($this->data[0]) && ('<br>' . 'Ваш уровень доступа не позволяет получить больше данных'));
        } else {
            return $this->data;
        }
    }
}
