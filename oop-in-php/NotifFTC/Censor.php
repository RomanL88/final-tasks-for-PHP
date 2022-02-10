<?php
class Censor
{
    public function __construct()
    {
    }
    public function censor($message)
    {
        echo "<del>";
        echo $message;
        echo "</del>";
    }
}
