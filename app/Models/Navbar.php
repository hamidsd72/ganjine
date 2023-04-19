<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model {

    public function parrent()
    {
        return $this->belongsTo('App\Models\Navbar','parrent_id','id');
    } 

    public function child()
    {
        return $this->hasMany('App\Models\Navbar','parrent_id')->orderBy('sort');
    }  
    
    public function langs()
    {
        return $this->hasMany('App\Models\Lang','item_id')->where('type','menu');
    }

    public function photo()
    {
        return $this->morphOne('App\Photo', 'pictures');
    }

    public function activity()
    {
        return $this->morphOne('App\Activity', 'activities');
    }
    public function meta()
    {
        return $this->hasOne('App\Models\Meta','item_id')->where('model','App\Menu');
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

    protected $fillable = [
        "title",
        "link",
        "link_type",
        "parrent_id",
        "sort",
    ];
    
}
