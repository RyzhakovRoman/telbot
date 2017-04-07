<?php
/**
 * Created by PhpStorm.
 * User: Рыжаков
 * Date: 07.04.2017
 * Time: 10:55
 */

namespace Bot;


class Bot implements iBot
{
    private const TOKEN = "308308894:AAHU2h4OIyR9w3k5JSV_rXB8te947o3yZPg";

    /**
     * @param Message $msg
     * @return Message
     */
    public function sendMessage(Message $msg)
    {
        //
    }

    /**
     * @return mixed
     */
    public function parseUpdate()
    {
        //
    }

    protected function insertBidToDB()
    {

    }
}