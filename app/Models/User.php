<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get posts of the user
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Following Users
     */
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }

    /**
     * Follower Users
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }

    /**
     * Load Counts of Models of this User
     */
    public function loadRelationshipCounts()
    {
        $this->loadCount('posts', 'followings', 'followers');
    }

    /**
     * Follow user with userId
     *
     * @param  int  $userId
     * @return bool
     */
    public function follow($userId)
    {
        // Check whether to follow the User or not
        $exist = $this->is_following($userId);
        // Check if the object is this User or not
        $its_me = $this->id == $userId;

        if ($exist || $its_me) {
            // Don't follow if already follow or the object is not this userId
            return false;
        } else {
            // Follow User in other condition
            $this->followings()->attach($userId);
            return true;
        }
    }

    /**
     * Unfollow User with userId
     *
     * @param  int  $userId
     * @return bool
     */
    public function unfollow($userId)
    {
        // Check whether to follow the User or not
        $exist = $this->is_following($userId);
        // Check if the object is this User or not
        $its_me = $this->id == $userId;

        if ($exist && !$its_me) {
            // Follow if already follow and the object is not this userId
            $this->followings()->detach($userId);
            return true;
        } else {
            // Don't Unfollow in other condition
            return false;
        }
    }

    /**
     * Check if this User follow the user with userId
     * Return true if following
     *
     * @param  int  $userId
     * @return bool
     */
    public function is_following($userId)
    {
        // Check if userId is in following list of this user
        return $this->followings()->where('follow_id', $userId)->exists();
    }

    /**
     * Filter Posts to this User and following User
     */
    public function feed_posts()
    {
        // Make Array of following UserId
        $userIds = $this->followings()->pluck('users.id')->toArray();
        // Add this UserId to Array
        $userIds[] = $this->id;
        // Filter to their Posts
        return Post::whereIn('user_id', $userIds);
    }
}
