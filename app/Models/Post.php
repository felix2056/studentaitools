<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'image',
        'video',
        'link',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(UserLike::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getImagesAttribute($value)
    {
        return json_decode($value);
    }

    public function getVideoEmbedAttribute()
    {
        return str_replace('watch?v=', 'embed/', $this->video);
    }

    public function getLikesCountAttribute()
    {
        return $this->likes->count();
    }
}
