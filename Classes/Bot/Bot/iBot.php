<?php

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