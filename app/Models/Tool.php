<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'tool_categories');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
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
}
