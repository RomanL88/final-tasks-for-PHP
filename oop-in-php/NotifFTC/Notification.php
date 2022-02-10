<?php
class Notification
{
    public $chanel;

    public function __construct($chanel)
    {
        $this->chanel = $chanel;
    }

    public function sendTo($name, $contact, $message)
    {
        echo "Уведомление клиенту: $name на $this->chanel ($contact): $message";
    }
}
