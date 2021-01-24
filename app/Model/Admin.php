<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;
use App\Role;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guarded = ['id'];

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

    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function hasRole($payload): bool{
        if (is_string($payload)) {
            $role = $this->roles()->where('key', $payload)->first();
        }

        if (is_int($payload)) {
            $role = $this->roles()->where('id', $payload)->first();
        }

        return $role && $role->status == 1 ? true : false;
    }

    public function hasPermissionTo($payload): bool{
        $check_permission =  Permission::where(["key"=> $payload])->first();
        if(is_null($check_permission)){
            $name = str_replace("_", " ", $payload);
            $terms = explode(" ",str_replace("_", " ", $payload));
            Permission::create([
                "name"=> $name,
                "key"=> $payload, 
                "action"=>$terms[0],
                "model"=>$terms[1]
            ]);
        }

        if (is_string($payload)) {
            foreach($this->roles()->where('status', 1)->get() as $role){
                $permission = $role->permissions()->where('key', $payload)->first();
                if($permission && $permission->status == 1){
                    return true;
                }
            }
            $permission = $this->permissions()->where('key', $payload)->first();
        }

        if (is_int($payload)) {
            foreach($this->roles()->where('status', 1)->get() as $role){
                $permission = $role->permissions()->where('id', $payload)->first();
                if($permission && $permission->status == 1){
                    return true;
                }
            }
            $permission = $this->permissions()->where('id', $payload)->first();
        }

        return $permission && $permission->status == 1 ? true : false;
    }
}
