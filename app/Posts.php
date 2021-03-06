<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";
    protected $guarded = ['id'];

    public function PostsComment(){
        return $this->belongsToMany("App\PostsComment")->withTimestamps();
    }

}
