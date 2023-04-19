<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $table = 'items';

    protected $fillable = [
        'page_name',
        'title',
        'text',
        'link',
        'status',
        'section',
        'position',
        'sort',
    ];

    public function photo()
    {
        return $this->morphOne('App\Photo', 'pictures');
    }

    public function activity()
    {
        return $this->morphOne('App\Activity', 'activities');
    }
}
