<?php

// ОТПРАВЛЯЕМ ЗАЯВКУ В ТЕЛЕГРАМ

require_once 'Autoload.php';
// Для примера пост массив приходящий с сайта ДМС
$_POST = [
    "id"     => 3,
    "status" => false,
    "name"   => "Иван",
    "phone"  => "+7-925-857-84-95",
    "sex"    => "муж",
    "typeProgram" => "Стоматология",
    "priceLevelProgram" => "Эконом",
    "info" => "Мне ноебходимо застраховать мужа, он хоккеист"
];



$bid = new \Bot\Bid();
$bid
    ->setId               ($_POST["id"])
    ->setStatus           ($_POST["status"])
    ->setName             ($_POST["name"])
    ->setPhone            ($_POST["phone"])
    ->setSex              ($_POST["sex"])
    ->setTypeProgram      ($_POST["typeProgram"])
    ->setPriceLevelProgram($_POST["priceLevelProgram"])
    ->setInfo             ($_POST["info"]);

$bot = new \Bot\BotDms();

$msg = $bot->createMsgOfBid($bid);

$bot->sendMessage($msg);

//echo $msg->getText();
//$msg = new \Bot\Message();
//
//$msg
//    ->setText  ('Hello!!!!')
//    ->setChatId('225283121');
//
//$bot = new \Bot\BotDms();
//
//$res = $bot->sendMessage($msg);
//
//echo "<br>-----------------------------------------------------------------------------------------------<br>"
//    . $res;




















