<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;

class OrderService implements IOrderService {

    public function index(int $orderId = NULL) {
        return DB::select("select * from customers WHERE id='$orderId'");
    }

}
