<?php
class BlackBox
{
    //лог записей полёта самолёта
    private array $data = [];

    //добавить запись в лог
    //к строке $message в начале должен дописаться порядковый номер этой записи в логе
    public function addLog(string $message)
    {
        (string) $serialNumber = count($this->data) + 1;
        $message = $serialNumber . '| ' . $message;
        //добавляет новую запись в лог
        $this->data[] = $message;
    }

    //проверяет уровень доступа 
    // возвращает массив с логами ящика
    public function getData(int $accessLevel): array
    {
        switch ($accessLevel) {
            case ($accessLevel <= 1):
                echo 'Доступ запрещен';
                return [];
                break;
            case ($accessLevel > 1 && $accessLevel <= 3):
                echo 'Ваш уровень доступа не позволяет получить больше данных' . '<br>';
                return [$this->data[0]];
                break;

            default:
                return $this->data;
                break;
        }
    }
}
