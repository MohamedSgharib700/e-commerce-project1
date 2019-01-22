<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    //
    protected $table = 'favorites';
    protected $fillable = ['user_id', 'post_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    
}
