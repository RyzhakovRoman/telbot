<?php

// ОТПРАВЛЯЕМ ЗАЯВКУ В ТЕЛЕГРАМ

require_once 'Autoload.php';

$_POST = [
    "id"     => 3,
    "status" => false,
    "name"   => "Иван",
    "phone"  => "+7-925-857-84-95",
    "sex"    => "муж",
    "typeProgram" => "Стоматология",
    "priceLevelProgram" => "Эконом",
    "info" => "Мне ноебходимо застраховать мужа, он боксер"
];

var_dump($_POST);








// создание нового cURL ресурса
//$ch = curl_init();
//
//// установка URL и других необходимых параметров
//curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot308308894:AAHU2h4OIyR9w3k5JSV_rXB8te947o3yZPg/sendMessage?chat_id=225283121&text=hello");
//curl_setopt($ch, CURLOPT_HEADER, 0);
//
//// загрузка страницы и выдача её браузеру
//curl_exec($ch);
//
//// завершение сеанса и освобождение ресурсов
//curl_close($ch);