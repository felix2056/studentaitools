<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['categories'];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'tool_categories');
    }

    public function images()
    {
        return $this->hasMany(ToolImage::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'tool_id', 'user_id')->withTimestamps();
    }

    // public function bookmarks()
    // {
    //     return $this->hasMany(Bookmark::class);
    // }

    // public function likes()
    // {
    //     return $this->hasMany(Like::class);
    // }

    public function getCategoryListAttribute()
    {
        return $this->categories->pluck('id');
    }

    public function getCategoryNamesAttribute()
    {
        return $this->categories->pluck('name');
    }

    public function getCategoryNameAttribute()
    {
        return $this->categories->first()->name ?? 'No Category';
    }

    public function getTagsAttribute($value)
    {
        return json_decode($value);
    }

    public function getCommaseparatedTagsAttribute()
    {
        if (!$this->tags) return '';
        return implode(', ', $this->tags);
    }

    public function getRatingAttribute()
    {
        return $this->ratings->avg('rating');
    }

    public function getRatingCountAttribute()
    {
        return $this->ratings->count();
    }

    public function getRatingPercentageAttribute()
    {
        return $this->ratings->avg('rating') / 5 * 100;
    }

    public function getRatingRoundedAttribute()
    {
        return round($this->ratings->avg('rating'));
    }

    public function getDomainAttribute()
    {
        return parse_url($this->link, PHP_URL_HOST);
    }

    public function getScreenshot1Attribute($value)
    {
        $color = substr(md5($this->name), 0, 6);
        return $value ? asset('screenshots/' . $value) : 'https://via.placeholder.com/640x480.png?text=' . $this->name . '&bg=' . $color;
    }

    public function getScreenshot2Attribute($value)
    {
        $color = substr(md5($this->name), 0, 6);
        return $value ? asset('screenshots/' . $value) : 'https://via.placeholder.com/640x480.png?text=' . $this->name . '&bg=' . $color;
    }

    public function getScreenshot3Attribute($value)
    {
        $color = substr(md5($this->name), 0, 6);
        return $value ? asset('screenshots/' . $value) : 'https://via.placeholder.com/640x480.png?text=' . $this->name . '&bg=' . $color;
    }

    public function getImageUrlsAttribute()
    {
        $screenshots = [
            $this->screenshot1,
            $this->screenshot2,
            $this->screenshot3,
        ];

        $images = $this->images->pluck('path')->toArray() ?? [];

        return array_merge($screenshots, $images);
    }

    public function getProsAttribute($value)
    {
        return json_decode($value) ?? [];
    }

    public function getConsAttribute($value)
    {
        return json_decode($value) ?? [];
    }
}
