<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = ['id'];

    private function primaryId(): string{
        return (string)$this->getAttribute($this->primaryKey);
    }

    public static function columns() {
        return \Schema::getColumnListing('permissions');
    }

    public function users(){
        return $this->belongsToMany('App\Model\User');
    }

    public function admins(){
        return $this->belongsToMany('App\Model\Admin');
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public static function findByKey(string $key)
    {
        return Permission::where('key', $key)->where('status', 1)->first();
    }

    public static function findById(int $id)
    {
        return Permission::where('id', $id)->where('status', 1)->first();
    }
}
