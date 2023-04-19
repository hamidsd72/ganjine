<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta';
    protected $fillable = [
        'id', 'name_page', 'model', 'item_id', 'description', 'keyword', 'title_page', 'priority', 'schema'
    ];
    public function langs()
    {
        return $this->hasMany('App\Models\Lang','item_id')->where('type','meta');
    }
}
