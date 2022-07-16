<?php

namespace App\Http\Controllers;

use App\Exports\MedicalExport;
use App\Exports\PdlExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function Medical()
    {
        return Excel::download(new MedicalExport, 'medical.xlsx');
    }


    public function Pdl()
    {
        return Excel::download(new PdlExport, 'pdl.xlsx');
    }
}
