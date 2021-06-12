<?php

namespace App\Exports;

use App\buku;
use App\Models\buku as Buku_1;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukEx implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku_1::all();
    }
}
