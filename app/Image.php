<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'name', 'unique_name', 'user_id', 'private'
    ];
}
