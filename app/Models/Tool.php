<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tool extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [];

    protected $with = ['categories'];

    // toSearchableArray() for Algolia
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['categories'] = $this->categories->pluck('name')->toArray();

        return $array;
    }

    public function searchableAs()
    {
        return 'StudentAITools';
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

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

    public function favoriters()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'tool_id', 'user_id')->withTimestamps();
    }

    public function isFavorite()
    {
        return $this->favoriters->contains(auth()->id());
    }

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

    public function getFavoritersCommasAttribute()
    {
        // limit to 3 favoriters
        return $this->favoriters->take(3)->implode('first_name', ', ');
    }

    public function getFavoritersCountAttribute()
    {
        $count = $this->favoriters->count();
        if ($count >= 1000) {
            return number_format($count / 1000, 1) . 'K';
        } else {
            return $count;
        }
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
