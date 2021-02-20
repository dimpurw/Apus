<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'description', 'foto'
    ];

    public function blogFoto()
    {
        if (!$this->foto) {
            return asset('dashboard/dist/img/user1-128x128.jpg');
        }
        return asset('blog/' . $this->foto);
    }
    
}
