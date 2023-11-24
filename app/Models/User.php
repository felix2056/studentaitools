<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function tools()
    {
        return $this->hasMany(Tool::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function getFirstNameAttribute()
    {
        return explode(' ', $this->name)[0];
    }

    public function getLastNameAttribute()
    {
        return explode(' ', $this->name)[1];
    }

    public function getAvatarAttribute($value)
    {
        $placeholder = 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=fff&background=b172f5';
        return $value ? asset('storage/avatars/' . $value) : $placeholder;
    }
}
