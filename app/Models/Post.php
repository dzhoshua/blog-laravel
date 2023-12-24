<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $dates = ['publish_at'];

    protected $fillable = ['title', 'content', 'publish_at', 'published'];

    public function setPublishAtAttribute($value)
    {
        $this->attributes['publish_at'] = $value ?: null;
    }

    function comment() {
        return $this->morphMany(Comment::class,'commentable');
    }
}
