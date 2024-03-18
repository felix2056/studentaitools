<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hootlex\Friendships\Traits\Friendable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Friendable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'avatar',
        'agree_terms',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function tools()
    {
        return $this->hasMany(Tool::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Tool::class, 'user_favorites', 'user_id', 'tool_id')->withTimestamps();
    }

    public function likes()
    {
        return $this->belongsToMany(Post::class, 'user_likes', 'user_id', 'post_id')->withTimestamps();
    }

    public function comments()
    {
        return $this->belongsToMany(Post::class, 'user_comments', 'user_id', 'post_id')->withTimestamps();
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'user_events')->withPivot('status');
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    // public function getAvatarAttribute($value)
    // {
    //     $placeholder = 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=fff&background=b172f5';
    //     return $value ? asset('storage/avatars/' . $value) : $placeholder;
    // }

    public function getAvatarAttribute($value)
    {
        if (empty($value)) {
            switch ($this->attributes['gender']) {
                case 'male':
                    return $value ? asset('storage/avatars/' . $value) : '/images/avatar-1.png';
                    break;
                case 'female':
                    return $value ? asset('storage/avatars/' . $value) : '/images/avatar-3.png';
                    break;
                default:
                    return $value ? asset('storage/avatars/' . $value) : '/images/avatar-2.png';
                    break;
            }
        }

        return $value;
    }

    public function getCoverAttribute($value)
    {
        return $value ? $value : '/images/profile-cover.png';
    }

    public function getImagesAttribute()
    {
        return $this->posts->pluck('images')->toArray();
    }
}
