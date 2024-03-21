<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function getHasChildrenAttribute()
    {
        return $this->children->count() > 0;
    }

    public function getGifLinkAttribute()
    {
        // if comment body is a link to .gif
        if (strpos($this->body, '.gif') !== false) {
            return $this->body;
        }
        return null;
    }

    public function getFileLinkAttribute()
    {
        // if comment body is a link to /storage/files/
        if (strpos($this->body, '/storage/files/') !== false) {
            return $this->body;
        }
        return null;
    }
}
