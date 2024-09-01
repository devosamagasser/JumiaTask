<?php

namespace App\Repositories;
use App\Traits\CustomersTrait;
use App\Interfaces\CustomersInterface;
use App\Models\Customer;


class CustomersRepository implements CustomersInterface
{

    use CustomersTrait;
    // Define your repository methods here
    public function index()
    {
        $customers = Customer::all();

        if(request('code') && !request('state'))
        {
            $customers = $this->getCustomersWithCode($customers);
        }
        elseif(!request('code') && request('state'))
        {
            $customers = $this->getCustomersWithState($customers);
        }
        elseif(request('code') && request('state'))
        {
            $customers = $this->getCustomersWithCodeAndState($customers);
        }

        return view('customers',compact('customers'));
    }

    private function getCustomersWithCode($customers)
    {
        return $this->filterWithCode($customers);
    }

    private function getCustomersWithState($customers)
    {
        return $this->filterWithState($customers);
    }

    private function getCustomersWithCodeAndState($customers)
    {
        return $this->filterWithCodeAndState($customers);
    }

}
