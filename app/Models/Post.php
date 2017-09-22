<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post as BasePost;

class Post extends BasePost
{
    public function __construct()
    {

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function getImageAttribute($value)
    {
        return asset('storage/'. $value);
    }

    /**
     * @param int $nbr
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function lastComments($nbr = 5)
    {
        return Comments::with('user')->where('post_id', $this->id)->latest()->limit($nbr)->get();
    }

//    public function GetImage()
//    {
//        return ($this->image !== null) ? asset('storage/' . $this->image) : asset('uploads/Profiles/avatar.jpg') ;
//    }
}
