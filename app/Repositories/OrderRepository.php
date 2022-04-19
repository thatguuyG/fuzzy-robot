<?php
namespace App\Repositories;

use App\Models\Order;
use App\Services\IOrderService;

class OrderRepository implements IOrderService {
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function index() {
        $order = $this->order::all();
        return $order;
    }
}
