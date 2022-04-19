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

    public function index() {
        $orders = $this->orders->index();
        dd($orders);
    }
}
