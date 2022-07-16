<?php

namespace App\Exports;

use App\Models\Medical;
use Maatwebsite\Excel\Concerns\FromCollection;

class MedicalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Medical::all();
    }
}
