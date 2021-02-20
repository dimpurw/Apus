<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'alamat', 'nohp', 'password', 'role', 'foto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFoto()
    {
        if (!$this->foto) {
            return asset('dashboard/dist/img/user1-128x128.jpg');
        }
        return asset('foto/' . $this->foto);
    }
    
    public function forum()
    {
        return $this->hasMany('App\Forum');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
