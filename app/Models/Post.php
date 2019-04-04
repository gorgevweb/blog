<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'category_id', 'title', 'description', 'image'
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function post_tags()
    {
        return $this->hasMany('App\Models\PostTag');
    }
}
