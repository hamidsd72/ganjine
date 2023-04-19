<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearnCategory extends Model
{
    protected $fillable = [
        'id',
        'name',
        'status',
        'sort',
        'description',
    ];

}
