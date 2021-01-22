<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name','email','password'];

    public static $UserActive = 1;
    public static $UserFlagged = 0;

    protected $table = 'admins';
    protected $guard = 'admin';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('\App\Role','role_id');
    }
}
