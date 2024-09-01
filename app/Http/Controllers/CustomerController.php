<?php

namespace App\Http\Controllers;

use App\Interfaces\CustomersInterface;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $interface;
    public function __construct(CustomersInterface $interface)
    {
        $this->interface = $interface;
    }

    public function index()
    {
        return $this->interface->index();
    }
}
