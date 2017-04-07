<?php
/**
 * Created by PhpStorm.
 * User: Рыжаков
 * Date: 07.04.2017
 * Time: 10:49
 */

namespace Bot;


interface iBot
{
    /**
     * @param Message $msg
     * @return Message
     */
    public function sendMessage(Message $msg);

    /**
     * @return mixed
     */
    public function parseUpdate();
}