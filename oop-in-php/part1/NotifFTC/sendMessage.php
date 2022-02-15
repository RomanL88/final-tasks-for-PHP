<?php
require("Censor.php");
require("User.php");
require("Notification.php");


function notify(User $user, $message)
{

    if ($user->isAdult()) {

        $newCensor = new Censor();
        $newCensor->censor($message);
    }
    $newNotificationEmail = new Notification('email');
    $newNotificationEmail->sendTo($user->getName(), $user->getEmail(), $message . '<br>');


    if ($user->getPhone() !== '') {

        $newNotificationPhone = new Notification('телефон');
        $newNotificationPhone->sendTo($user->getName(), $user->getPhone(), $message . '<br>');
    }
}
