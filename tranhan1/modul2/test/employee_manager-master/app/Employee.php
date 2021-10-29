<?php

namespace App;

class Employee
{
    public string $firstName;
    public string $lastName;
    public string $birthday;
    public string $address;
    public string $role;

    public function __construct($data)
    {
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
        $this->birthday = $data['birthday'];
        $this->address = $data['address'];
        $this->role = $data['role'];
    }

    function getName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * @return mixed|string
     */
    public function getAddress(): mixed
    {
        return $this->address;
    }

    /**
     * @return mixed|string
     */
    public function getRole(): mixed
    {
        return $this->role;
    }

    /**
     * @return mixed|string
     */
    public function getBirthday(): mixed
    {
        return $this->birthday;
    }

    /**
     * @return mixed|string
     */
    public function getLastName(): mixed
    {
        return $this->lastName;
    }

    /**
     * @return mixed|string
     */
    public function getFirstName(): mixed
    {
        return $this->firstName;
    }

}