<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Admin;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public static function columns() {
        return \Schema::getColumnListing('activity_logs');
    }

    private function primaryId(): string{
        return (string)$this->getAttribute($this->primaryKey);
    }

    public function user(){
        return $this->belongsTo(Admin::class, 'user_id');
    }

    public function actable(){
        return $this->morphTo();
    }
}
