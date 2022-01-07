<?php

namespace App\Http\Repositories;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CustomerRepository
{
    private $customers;
    /**
     * 
     */
    public function __construct(Customer $customers)
    {
        $this->customers = $customers;
    }

    /**
     * 
     */
    
}