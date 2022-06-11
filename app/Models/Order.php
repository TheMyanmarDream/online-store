<?php
namespace App\Models;
class Order{
    protected $order_id = 1;
    protected function confirmOrder(){
        return "confirm order";
    }
    public function balanceItem(){
        return $this->confirmOrder();
    }
}