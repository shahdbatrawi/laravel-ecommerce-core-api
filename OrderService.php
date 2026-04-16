<?php
namespace App\Services;

class OrderService {
    public function placeOrder($cartData, $userId) {

        return "Order placed successfully for User: " . $userId;
    }
}
