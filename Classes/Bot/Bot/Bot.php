<?php

namespace Bot;


abstract class Bot implements iBot
{

    const URL = "https://api.telegram.org/bot308308894:AAHU2h4OIyR9w3k5JSV_rXB8te947o3yZPg/";

//    const chat_id = 225283121;

    /**
     * @param Bid $bid
     * @return Message
     */
    abstract public function createMsgOfBid(Bid $bid);

    /**
     * @param Message $msg
     * @return string
     */
    public function sendMessage(Message $msg)
    {

        $json = $msg->toJson();

        $result = $this->sendJsonRequestToTlgrm($json, __FUNCTION__);

        return $result;
    }

    /**
     * @return mixed
     */
    public function parseUpdate()
    {
        //
    }

    /**
     * @param $json
     * @param $method
     * @return string
     */
    protected function sendJsonRequestToTlgrm($json, $method)
    {
        $ch =       curl_init(self::URL . $method);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $result =   curl_exec($ch);
                    curl_close($ch);

        return $result;
    }
}