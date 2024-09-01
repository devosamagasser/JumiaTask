<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromView, WithStyles
{

    public function view(): View
    {
        $users = User::select('name','email')->get();

        return view('Download.users',compact('users'));
    }

    public function styles(Worksheet $sheet)
    {
        // TODO: Implement styles() method.
    }
}
