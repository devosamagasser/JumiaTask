<?php

namespace App\Interfaces;

interface UsersInterface
{
    // Define your interface methods here
    public function index();

    public function import($request);

    public function export();
}
