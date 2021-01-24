<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['id'];

    private function primaryId(): string{
        return (string)$this->getAttribute($this->primaryKey);
    }

    public static function columns() {
        return \Schema::getColumnListing('roles');
    }

    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }

    public function users(){
        return $this->belongsToMany('App\Model\User');
    }

    public function admins(){
        return $this->belongsToMany('App\Model\Admin');
    }

    public function hasPermissionTo($payload): bool
    {
        if (is_string($payload)) {
            $permission = $this->permissions()->where('key', $payload)->first();
        }

        if (is_int($payload)) {
            $permission = $this->permissions()->where('id', $payload)->first();
        }

        return $permission && $permission->status == 1 ? true : false;
    }
}
