<?php

namespace App;

class Product
{
    private int $id;
    private string $name;
    private int $price;
    private int $quantity;

    /**
     * @param int $id
     * @param string $name
     * @param int $price
     * @param int $quantity
     */
    public function __construct(int $id, string $name, int $price, int $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }



}