<?php
class User
{
    public $name;
    public $email;
    public $phone;
    public $age;

    public function __construct($name, $email, $age = 0, $phone = "")
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->age = $age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function isAdult()
    {
        return ($this->age > 18);
    }
}
