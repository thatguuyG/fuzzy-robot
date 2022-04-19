<?php

namespace App\Services;
use App\services\IOrderService;

class OrderService {

    protected $order;

    public function __construct(IOrderService $order)
    {
        $this->order = $order;
    }

    public function index()
    {
        $order = $this->order->index();
        return $order;
    }

}
