<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    public $timestamps = false;

    protected $guarded = ['id'];

    public function langs()
    {
        return $this->hasMany('App\Models\Lang','item_id')->where('type','partner');
    }


    public function photo()
    {
        return $this->morphOne('App\Photo', 'pictures');
    }

    public function activity()
    {
        return $this->morphOne('App\Activity', 'activities');
    }
    

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($item) {
            foreach ($item->langs as $lang){
                $lang->delete();
            }
        });
    }

}
