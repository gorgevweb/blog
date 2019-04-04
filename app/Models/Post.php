<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'category_id', 'title', 'description', 'image','tags'
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }


    public function tags()
    {
        return $this->belongsToMany('App\Models\PostTag');
    }
}
