<?php

class Employee
{
    protected string $name;
    protected string  $birthDay;
    protected string $address;
    protected string $position;

    public function __construct( $name,  $birthDay, $address, $position)
    {
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->address = $address;
        $this->position = $position;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getBirthDay(): string
    {
        return $this->birthDay;
    }


    public function setBirthDay(string $birthDay): void
    {
        $this->birthDay = $birthDay;
    }


    public function getAddress(): string
    {
        return $this->address;
    }


    public function setAddress(string $address): void
    {
        $this->address = $address;
    }


    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }


}