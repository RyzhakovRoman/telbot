<?php
/**
 * Created by PhpStorm.
 * User: Рыжаков
 * Date: 07.04.2017
 * Time: 11:17
 */

namespace Bot;


class Bid
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $status;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $typeProgram;

    /**
     * @var string
     */
    private $priceLevelProgram;

    /**
     * @var string
     */
    private $info;

    /**
     * @var string
     */
    private $insurer;

    /**
     * @param int $id
     * @return Bid
     */
    public function setId(int $id): Bid
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param bool $status
     * @return Bid
     */
    public function setStatus(bool $status): Bid
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $name
     * @return Bid
     */
    public function setName(string $name): Bid
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $phone
     * @return Bid
     */
    public function setPhone(string $phone): Bid
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $sex
     * @return Bid
     */
    public function setSex(string $sex): Bid
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @param string $typeProgram
     * @return Bid
     */
    public function setTypeProgram(string $typeProgram): Bid
    {
        $this->typeProgram = $typeProgram;
        return $this;
    }

    /**
     * @param string $priceLevelProgram
     * @return Bid
     */
    public function setPriceLevelProgram(string $priceLevelProgram): Bid
    {
        $this->priceLevelProgram = $priceLevelProgram;
        return $this;
    }

    /**
     * @param string $info
     * @return Bid
     */
    public function setInfo(string $info): Bid
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @return string
     */
    public function getTypeProgram(): string
    {
        return $this->typeProgram;
    }

    /**
     * @return string
     */
    public function getPriceLevelProgram(): string
    {
        return $this->priceLevelProgram;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @param string $insurer
     * @return Bid
     */
    public function setInsurer(string $insurer): Bid
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsurer(): string
    {
        return $this->insurer;
    }
}