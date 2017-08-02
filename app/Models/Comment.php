<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models;

class Comment extends Model
{
     /**
     * Belong to user Relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * belong to post relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
