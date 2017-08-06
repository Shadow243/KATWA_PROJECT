<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post as BasePost;
use TCG\Voyager\Models\User;

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
}
