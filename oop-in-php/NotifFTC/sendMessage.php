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
    $newNotificationEmail->sendTo($user->getName(), $user->getEmail(), $message);


    if ($user->getPhone() !== "") {

        $newNotificationPhone = new Notification('телефон');
        $newNotificationPhone->sendTo($user->getName(), $user->getPhone(), $message);
    }
}
$user1 = new User("Алексей", "email@mail.ru", 22, 89999999);
$user2 = new User("Игорь", "gmail@gmail.com");

notify($user1, "Привет, друг!");

notify($user2, "Как твои дела?");














/* require("Notification.php");
$sendMessage = new Notification($name, $contact, $message);

function notify(User $user, $message)
{

    // $sendMessage->sendTo($sendMessage->$user, "", $message);

    $age = rand(10, 60);

    if ($age < 18) {

        $newCensor = new Censor($message);
        $newCensor->censor($message);
        // способ проще 
        //$this->censor($this->$message);
    }
    // $newNotification = new Notification();
}
 
*/










/* //$sendMessage = new Notification("Алексей", "What's Up", "Вам сообщение!");
require("Notification.php");

 function notify(User $user, $message)
{

    //$age = rand(10, 30);
} 
 */