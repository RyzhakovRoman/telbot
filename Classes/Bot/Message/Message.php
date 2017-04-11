<?php

namespace Bot;


class Message implements iMessage
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var int
     */
    private $chat_id;


    /**
     * @return string
     */
    public function toJson()
    {
        $arr = ["chat_id" => $this->chat_id, "text" => $this->text];
        return json_encode($arr);
    }

    /**
     * @param string $text
     * @return Message
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param int $chat_id
     * @return Message
     */
    public function setChatId($chat_id)
    {
        $this->chat_id = $chat_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getChatId()
    {
        return $this->chat_id;
    }
}