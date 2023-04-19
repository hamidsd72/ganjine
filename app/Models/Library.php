<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class Library extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];

    public function pictures()
    {
        return $this->morphTo();
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($item) {

            if(is_file($item->path))
                File::delete($item->path);

        });

    }
}
