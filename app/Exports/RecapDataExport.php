<?php

namespace App\Exports;

use App\RecapData;
use Maatwebsite\Excel\Concerns\FromCollection;

class RecapDataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RecapData::all();
    }
}
