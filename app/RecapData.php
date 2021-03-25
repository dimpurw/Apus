<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecapData extends Model
{
    protected $table = 'recap_datas';
    protected $fillable = [
        'nama_kucing', 'jenis_penyakit', 'presentase',
    ];
}
