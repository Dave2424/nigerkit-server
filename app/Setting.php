<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = ['id'];

    private function primaryId(): string{
        return (string)$this->getAttribute($this->primaryKey);
    }

    public static function getValue($name)
    {
        $setting =  Setting::where(["name"=> $name])->first();
        if(is_null($setting)){
            $setting =  Setting::create(["name"=> $name]);
        }

        return $setting->value;
    }
    
    public static function setValue($name, $value)
    {
        $setting =  Setting::where(["name"=> $name])->first();
        if(is_null($setting)){
            $setting = Setting::create(["name"=> $name]);
        }
        $setting->update(['value'=>$value]);

        return $setting;
    }
}
