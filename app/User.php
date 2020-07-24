<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar', 'email', 'password', 'phone', 'birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset("/storage/{$value}");
    }

    public function timeline()
    {
        return Post::orderByDesc('likes')->latest()->withLikes()->get();
        //return Post::latest()->withLikes()->get();
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function path($append = '')
    {
        $path = route('profile', $this->name);

        return $append ? "{$path}/{$append}" : $path;
    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function replies()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
