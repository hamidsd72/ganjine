<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'sort',
        'category_id',
        'link',
    ];

    public function category()
    {
        return $this->hasOne('App\Models\LearnCategory','id','category_id');
    }
    
}
