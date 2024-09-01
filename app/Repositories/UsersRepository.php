<?php

namespace App\Repositories;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use  App\Interfaces\UsersInterface;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class UsersRepository implements UsersInterface
{
    public function index()
    {
        $users = User::get();
        return view('users',compact('users'));
    }

    public function import($request)
    {
        Excel::import(new UsersImport, $request->file);

        return redirect(route('users.index'));
    }

    public function export()
    {
//        return Excel::download(new UsersExport, 'users.xlsx');
        return Excel::download(new UsersExport, 'invoices.pdf', \Maatwebsite\Excel\Excel::MPDF);
    }
}
