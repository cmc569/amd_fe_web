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
     * @param String $ip
     * @param String $name
     * @param String $title
     * @param String $company
     * @param String $tel
     * @param String $mobile
     * @param String $email
     * @param String $contact
     * @param String $key
     */
    public function createCustomers(String $ip, String $name, String $title, String $company, String $tel, String $mobile, String $email, String $contact, String $key)
    {
        $contact = ($contact == 'Y') ? 'Y' : 'N';
        $ip = $ip ?? null;
        
        return $this->customers->create([
            'ip'            => $ip ?? null,
            'name'          => $name,
            'title'         => $title,
            'company'       => $company,
            'tel'           => $tel,
            'mobile'        => $mobile,
            'email'         => $email,
            'contact'       => $contact,
            'identify_key'  => $key,
        ]);
    }
    
}