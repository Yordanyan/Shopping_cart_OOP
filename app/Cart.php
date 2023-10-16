<?php

namespace App;

class Cart
{
    private array $cartItems;

    public function addProduct(Product $product,$quantity): void
    {
        $this->cartItems[] = new CartItem($product,$quantity);

    }

    public function getCartItems(): array
    {
        return $this->cartItems;
    }

    public function getTotalQuantity(): int
    {
       $sum = 0;
       foreach ($this->cartItems as $elem){
           $sum += $elem->getQuantity();
       }

       return $sum;

    }

    public function getTotalSum(): int
    {
        $sum = 0;
        foreach ($this->cartItems as $elem){
            $item_count = $elem->getQuantity();
            $items_price = $elem->getProduct()->getPrice() * $item_count;
            $sum += $items_price;

        }

        return $sum;
    }

}