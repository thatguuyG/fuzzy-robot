<?php

namespace App\Http\Controllers;
use App\Services\IOrderService;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    private $orders;

    public function __construct(IOrderService $orders){
        $this->orders = $orders;
    }

    public function index($orderId) {
        $orders = $this->orders->index($orderId);
        dd($orders);
    }
}
