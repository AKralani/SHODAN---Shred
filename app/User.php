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
        'name', 'avatar', 'description', 'email', 'password', 'phone', 'birthday'
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
        // return asset("/storage/{$value}");
        return "https://i.pravatar.cc/80?u=" . $this->name;
    }


  
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = $value; 
    }


    

      
    public function timeline()

    {
        $ids = $this->follows()->pluck('id');
        $ids->push($this->id);

        return Post::latest()->withLikes()->get();

        //return Post::whereIn('user_id', $ids)->latest()->withlikes()->get();
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

    public function follow(User $user) 
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user) 
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        if($this->following($user)) {
            return $this->unfollow($user);
        }

        return $this->follow($user);
    }

    public function follows()
    { 
        return $this->belongsToMany(
        User::class,
        'follows',
        'user_id',
        'following_user_id'
        );
        
    }

    public function following(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

}
