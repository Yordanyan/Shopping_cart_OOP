<?php

namespace App;

class CartItem
{
    private Product $product;
    private int $quantity;

    /**
     * @param string $product
     * @param int $quantity
     */
    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        if($product->getQuantity() < $this->quantity){
            $this->quantity = $product->getQuantity();
            echo "The Product is not available";
        }
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }






}