<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Hootlex\Friendships\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hootlex\Friendships\Traits\Friendable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
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

    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follows', 'following_id', 'user_id')->withTimestamps();
    }

    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follows', 'user_id', 'following_id')->withTimestamps();
    }

    public function isFollowing($user)
    {
        return $this->followings->contains($user->id);
    }

    public function isFollowedBy($user)
    {
        return $this->followers->contains($user->id);
    }

    public function mutualFollowers()
    {
        return $this->followings->intersect($this->followers);
    }

    public function mutualFollowings()
    {
        return $this->followers->intersect($this->followings);
    }

    public function addFollowing($user)
    {
        $this->followings()->attach($user->id);
    }

    public function removeFollowing($user)
    {
        $this->followings()->detach($user->id);
    }

    public function hasFavorited($tool)
    {
        return $this->favorites->contains($tool->id);
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

    public function getBirthdayAttribute()
    {
        return $this->date_of_birth ? Carbon::parse($this->date_of_birth)->format('F j') : null;
    }

    public function getPendingFriendsCount($groupSlug = '')
    {
        $friendsCount = $this->findFriendships(Status::PENDING, $groupSlug)->count();
        return $friendsCount;
    }

    public function getFollowersCountAttribute()
    {
        // count them in 'K' format
        $count = $this->followers()->count();
        if ($count >= 1000) {
            return number_format($count / 1000, 1) . 'K';
        } else {
            return $count;
        }
    }

    public function getFollowingsCountAttribute()
    {
        // count them in 'K' format
        $count = $this->followings()->count();
        if ($count >= 1000) {
            return number_format($count / 1000, 1) . 'K';
        } else {
            return $count;
        }
    }

    public function getMutualFollowersCountAttribute()
    {
        // count them in 'K' format
        $count = $this->mutualFollowers()->count();
        if ($count >= 1000) {
            return number_format($count / 1000, 1) . 'K';
        } else {
            return $count;
        }
    }

    public function getMutualFollowingsCountAttribute()
    {
        // count them in 'K' format
        $count = $this->mutualFollowings()->count();
        if ($count >= 1000) {
            return number_format($count / 1000, 1) . 'K';
        } else {
            return $count;
        }
    }

    public function getLanguagesAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    public function getLearningPreferencesAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    public function getPreferredStudyToolsAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    public function getLanguagesCommasAttribute()
    {
        return implode(', ', $this->languages);
    }

    public function getLearningPreferencesCommasAttribute()
    {
        return implode(', ', $this->learning_preferences);
    }

    public function getPreferredStudyToolsCommasAttribute()
    {
        return implode(', ', $this->preferred_study_tools);
    }

    public function getIsOnlineAttribute()
    {
        return $this->last_login_at > now()->subMinutes(5);
    }

    public function getIsOfflineAttribute()
    {
        return !$this->is_online;
    }
}
