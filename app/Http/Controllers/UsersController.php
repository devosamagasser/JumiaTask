<?php

namespace App\Http\Controllers;

use App\Interfaces\UsersInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public $interface;
    public function __construct(UsersInterface $interface)
    {
        $this->interface = $interface;
    }

    public function index()
    {
        return $this->interface->index();
    }

    public function import(Request $request)
    {
        return $this->interface->import($request);
    }

    public function export()
    {
        return $this->interface->export();
    }
}
