<?php

namespace Models;

class Product
{
    private $name;
    private $price;

    public function __construct($name = '', $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @param mixed|string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int|mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}