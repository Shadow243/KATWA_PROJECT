<?php

namespace App;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use TCG\Voyager\Models\User as BaseUser;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * threads's relationship.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function threads()
//     {
//         return $this->hasMany(Thread::class);
//     }


    /**
     * @param Post $post
     * @return bool
     */
    public function hasLikePost(Post $post)
    {
        return (bool) $post->likes->where('user_id', $this->id)->count();
    }

    /**
     * @param $value
     * @return string return name user in uppercase
     */
//    public function getNameAttribute($value)
//    {
//        return ucfirst(strtolower($value)) ;
//    }

    /**
     * @param $value
     * @return string user picture profile
     */
//    public function GetPhoto()
//    {
//        return ($this->photo !== null) ? asset('uploads/Profiles/' . $this->photo) : asset('uploads/Profiles/avatar.jpg') ;
//    }
}
