<?php

namespace App\Services;

interface ITransactionService {

    public function getTransactions();

    public function getCustomerRecord(int $customerId = NULL);

}
