<?php

namespace Bot;


class BotDms extends Bot
{

    const CHAT_ID = "225283121";

    /**
     * @param Bid $bid
     * @return Message
     */
    public function createMsgOfBid(Bid $bid)
    {
        $msg = new Message();

        $msg->setChatId(self::CHAT_ID)
            ->setText  (
                "код: "             . $bid->getId() . "\n" .
                "имя: "             . $bid->getName() . "\n" .
                "телефон: "         . $bid->getPhone() . "\n" .
                "пол: "             . $bid->getSex() . "\n" .
                "тип программы: "   . $bid->getTypeProgram() . "\n" .
                "ценовой уровень: " . $bid->getPriceLevelProgram() . "\n" .
                "информация: "      . $bid->getInfo()
            );

        return $msg;
    }
}