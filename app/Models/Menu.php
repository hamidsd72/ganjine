<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    public $timestamps = false;

    protected $parent = 'parent_id';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function informations()
    {
        return $this->hasMany('App\Models\MenuInformation','menu_id');
    }  
    
    public function contents()
    {
        return $this->hasMany('App\Models\MenuInformation','menu_id')->orderBy('sort')->get();
    } 

    public function items()
    {
        return $this->hasMany('App\Models\MenuInformation','menu_id')->where('status','active')->orderBy('sort');
    } 

    public function langs()
    {
        return $this->hasMany('App\Models\Lang','item_id')->where('type','menu');
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

}
