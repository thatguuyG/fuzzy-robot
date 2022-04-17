<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Services\TransactionService;
use App\Services\ITransactionService;

class TransactionsController extends Controller
{

    private $transactions;
    private $customer;

    public function __construct(ITransactionService $transactions){
        $this->transactions = $transactions;
        $this->customer = $transactions;
    }

    public function index() {
        $transactions  = $this->transactions->getTransactions();
        dd($transactions);
        return view('welcome', ['transactions'=>$transactions]);
    }

    public function getCustRecord ($customerId) {
        $customer = $this->customer->getCustomerRecord($customerId);
        dd($customer);
    }

}
