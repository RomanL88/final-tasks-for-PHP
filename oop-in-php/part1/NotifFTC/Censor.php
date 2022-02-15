<?php
class Censor
{
    public function __construct()
    {
    }
    public function censor($message)
    {
        echo "<del>";
        return $message;
        echo "</del>";
    }
}
