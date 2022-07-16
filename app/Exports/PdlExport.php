<?php

namespace App\Exports;

use App\Models\Pdl;
use Maatwebsite\Excel\Concerns\FromCollection;

class PdlExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pdl::all();
    }
}
