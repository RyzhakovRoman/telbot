<?php
/**
 * Created by PhpStorm.
 * User: Рыжаков
 * Date: 10.04.2017
 * Time: 18:06
 */

namespace Bot;


interface iMessage
{
    /**
     * @return string
     */
    public function toJson();
}