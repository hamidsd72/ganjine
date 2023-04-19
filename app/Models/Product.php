<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Product extends Model
{


    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function cat()
    {
        return $this->belongsTo('App\Models\ProductCat','cat_id');
    }
    public function category()
    {
        return $this->belongsTo('App\ProductCategory','category_id');
    }
    public function type()
    {
        return $this->belongsTo('App\Models\ProductType','type_id');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\ProductBrand','brand_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'item_id')->where('type','product')->where('reply_id',0)->where('lang',app()->getLocale())->where('status','active');
    }

    public function rates()
    {
        return $this->hasMany('App\ProductRate');
    }

    public function photo()
    {
        return $this->morphOne('App\Photo', 'pictures');
    }

    public function activity()
    {
        return $this->morphOne('App\Activity', 'activities');
    }

    public function library()
    {
        return $this->morphMany('App\Library', 'pictures');
    }

    public function attr()
    {
        return $this->hasMany('App\Models\ProductAttr','product_id');
    }
    public function langs()
    {
        return $this->hasMany('App\Models\Lang','item_id')->where('type','product');
    }
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($item) {
            $item->photo()->get()
                ->each(function ($photo) {
                    $path = $photo->path;
                    File::delete($path);
                    $photo->delete();
                });
            foreach ($item->langs as $lang){
                $lang->delete();
            }
        });
    }

}
