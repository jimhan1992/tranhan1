<?php

namespace Model;

class Product
{
 public $id;
 protected $name;
 protected $price;
 protected $description;
 protected $producer;

    /**
     * @param $name
     * @param $price
     * @param $description
     * @param $producer
     */
    public function __construct($name, $price, $description, $producer)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->producer = $producer;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @param mixed $producer
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;
    }


}