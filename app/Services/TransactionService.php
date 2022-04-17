<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;

class TransactionService implements ITransactionService {

    public function getTransactions()
    {

        // return DB::select('select * from customers');

        // return DB::select('select customers.customerName, orders.order_date
        // FROM customers
        // INNER JOIN orders ON orders.customerId = customers.customerId OrderBy');

        // return DB::select('select
        // customers.customerName, orders.order_date
        // FROM customers
        // LEFT JOIN orders ON orders.customerId = customers.customerId
        // ORDER BY orders.order_date');


        // return DB::table('projects')
        // ->join('transactions','projects.transactionId','=','transactions.id')
        // ->selectRaw('transactions.id, name, project, transaction_type, income, transaction_date')
        // ->get();

        return DB::table('customers')
        ->leftJoin('orders', 'orders.customerId', '=', 'customers.customerId')
        ->get();
    }

    public function getCustomerRecord(int $customerId = NULL) {
        return DB::select("select * from customers WHERE id='$customerId'");
    }

}
