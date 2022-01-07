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
     * 紀錄顧客資訊
     * @param String $name
     * @param String $title
     * @param String $company
     * @param String $tel
     * @param String $mobile
     * @param String $email
     * @param String $contact
     */
    public function createCustomers(String $name, String $title, String $company, String $tel, String $mobile, String $email, String $contact)
    {
        return $this->customers->create([
            'name'      => $name,
            'title'     => $title,
            'company'   => $company,
            'tel'       => $tel,
            'mobile'    => $mobile,
            'email'     => $email,
            'contact'   => $contact,
        ]);
    }
    
}